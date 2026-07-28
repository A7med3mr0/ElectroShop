<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::with('items.product')
            ->where('user_id', $request->user()->id)
            ->latest()
            ->paginate(10);

        return response()->json([
            'status' => true,
            'data'   => $orders,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone'              => 'required|string',
            'shipping_address'   => 'required|string',
            'items'              => 'required|array|min:1',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity'   => 'required|integer|min:1',
        ]);

        try {
            $order = DB::transaction(function () use ($request) {
                $totalPrice = 0;
                $orderItemsData = [];

                foreach ($request->items as $item) {
                    $product = Product::findOrFail($item['product_id']);


                    if ($product->stock < $item['quantity']) {
                        throw new \Exception("The requested quantity is not available for product {$product->name}");
                    }

                    $itemTotal = $product->price * $item['quantity'];
                    $totalPrice += $itemTotal;


                    $product->decrement('stock', $item['quantity']);

                    $orderItemsData[] = [
                        'product_id' => $product->id,
                        'quantity'   => $item['quantity'],
                        'price'      => $product->price,
                    ];
                }


                $order = Order::create([
                    'user_id'          => $request->user()->id,
                    'total_price'      => $totalPrice,
                    'phone'            => $request->phone,
                    'shipping_address' => $request->shipping_address,
                    'status'           => 'pending',
                ]);

                $order->items()->createMany($orderItemsData);

                return $order;
            });

            return response()->json([
                'status'  => true,
                'message' => 'Order created successfully',
                'data'    => $order->load('items.product'),
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }

    public function show(Request $request, $id)
    {
        $order = Order::with('items.product')
            ->where('user_id', $request->user()->id)
            ->find($id);

        if (!$order) {
            return response()->json([
                'status'  => false,
                'message' => 'Order not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data'   => $order,
        ], 200);
    }


    public function cancel(Request $request, $id)
    {
        $order = Order::with('items')->where('user_id', $request->user()->id)->find($id);

        if (!$order) {
            return response()->json([
                'status'  => false,
                'message' => 'Order not found',
            ], 404);
        }

        if ($order->status !== 'pending') {
            return response()->json([
                'status'  => false,
                'message' => 'Cannot cancel order that is already processed or shipped',
            ], 400);
        }

        DB::transaction(function () use ($order) {

            foreach ($order->items as $item) {
                Product::where('id', $item->product_id)->increment('stock', $item->quantity);
            }

            $order->update(['status' => 'cancelled']);
        });

        return response()->json([
            'status'  => true,
            'message' => 'Order cancelled successfully and stock restored',
            'data'    => $order,
        ], 200);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
        'status' => 'required|in:pending,processed,shipped,delivered,cancelled',
    ]);

    $order = Order::with('items')->where('user_id', $request->user()->id)->find($id);

    if (!$order) {
        return response()->json([
            'status'  => false,
            'message' => 'Order not found',
        ], 404);
    }

    
    if ($request->status === 'cancelled' && $order->status !== 'cancelled') {
        DB::transaction(function () use ($order) {
            foreach ($order->items as $item) {
                Product::where('id', $item->product_id)->increment('stock', $item->quantity);
            }
            $order->update(['status' => 'cancelled']);
        });
    } else {
        $order->update(['status' => $request->status]);
    }

    return response()->json([
        'status'  => true,
        'message' => 'Order status updated successfully',
        'data'    => $order->fresh('items.product'),
    ], 200);
    }

    public function destroy(Request $request, $id)
    {
        $order = Order::where('user_id', $request->user()->id)->find($id);

        if (!$order) {
            return response()->json([
                'status'  => false,
                'message' => 'Order not found',
            ], 404);
        }

        $order->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Order deleted successfully',
        ], 200);
    }

    public function getOrdersByStatus(Request $request, $status)
    {
        $request->merge(['status' => $status]);
    $request->validate([
        'status' => 'required|in:pending,processed,shipped,delivered,cancelled',
    ]);

    $orders = Order::with('items.product')
        ->where('user_id', $request->user()->id)
        ->where('status', $status)
        ->latest()
        ->paginate(10);

    return response()->json([
        'status' => true,
        'data'   => $orders,
    ], 200);
    }

    public function getOrdersByDateRange(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
        ]);

        $orders = Order::with('items.product')
            ->where('user_id', $request->user()->id)
            ->whereBetween('created_at', [$request->start_date, $request->end_date])
            ->latest()
            ->paginate(10);

        return response()->json([
            'status' => true,
            'data'   => $orders,
        ], 200);
    }

    public function getOrdersByPriceRange(Request $request)
    {
        $request->validate([
            'min_price' => 'required|numeric|min:0',
            'max_price' => 'required|numeric|gte:min_price',
        ]);

        $orders = Order::with('items.product')
            ->where('user_id', $request->user()->id)
            ->whereBetween('total_price', [$request->min_price, $request->max_price])
            ->latest()
            ->paginate(10);

        return response()->json([
            'status' => true,
            'data'   => $orders,
        ], 200);
    }
}
