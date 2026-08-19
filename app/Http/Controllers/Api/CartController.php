<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class CartController extends Controller
{

    private function getUserCart(Request $request)
    {
        return Cart::firstOrCreate([
            'user_id' => $request->user()->id,
        ]);
    }


    public function index(Request $request)
    {
        $cart = $this->getUserCart($request);

        return response()->json([
            'status' => true,
            'data'   => [
                'items'       => $cart->getItemsWithProductDetails(),
                'total_items' => $cart->totalItems(),
                'total_price' => $cart->totalPrice(),
            ],
        ], 200);
    }


    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'nullable|integer|min:1',
        ]);

        $quantity = $request->input('quantity', 1);
        $product  = Product::findOrFail($request->product_id);
        $cart     = $this->getUserCart($request);

        $existingItem     = $cart->getItem($product->id);
        $currentQtyInCart = $existingItem ? $existingItem->quantity : 0;

        if ($product->stock < ($currentQtyInCart + $quantity)) {
            return response()->json([
                'status'  => false,
                'message' => "The requested quantity exceeds available stock ({$product->stock} available).",
            ], 400);
        }

        $cart->addItem($product->id, $quantity);

        return response()->json([
            'status'  => true,
            'message' => 'Product added to cart successfully',
            'data'    => [
                'items'       => $cart->getItemsWithProductDetails(),
                'total_items' => $cart->totalItems(),
                'total_price' => $cart->totalPrice(),
            ],
        ], 200);
    }


    public function updateQuantity(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($productId);
        $cart    = $this->getUserCart($request);

        if ($request->quantity > 0 && $product->stock < $request->quantity) {
            return response()->json([
                'status'  => false,
                'message' => "Requested quantity not available in stock ({$product->stock} available).",
            ], 400);
        }

        $cart->updateItemQuantity($productId, $request->quantity);

        return response()->json([
            'status'  => true,
            'message' => 'Cart updated successfully',
            'data'    => [
                'items'       => $cart->getItemsWithProductDetails(),
                'total_items' => $cart->totalItems(),
                'total_price' => $cart->totalPrice(),
            ],
        ], 200);
    }


    public function removeItem(Request $request, $productId)
    {
        $cart = $this->getUserCart($request);
        $cart->removeItem($productId);

        return response()->json([
            'status'  => true,
            'message' => 'Product removed from cart successfully',
            'data'    => [
                'items'       => $cart->getItemsWithProductDetails(),
                'total_items' => $cart->totalItems(),
                'total_price' => $cart->totalPrice(),
            ],
        ], 200);
    }


    public function clear(Request $request)
    {
        $cart = $this->getUserCart($request);
        $cart->clear();

        return response()->json([
            'status'  => true,
            'message' => 'Cart cleared successfully',
        ], 200);
    }


    public function checkout(Request $request)
{

    $request->validate([
        'phone'            => 'required|string|max:20',
        'shipping_address' => 'required|string|max:500',
    ]);

    $cart = $this->getUserCart($request);

    if ($cart->isEmpty()) {
        return response()->json([
            'status'  => false,
            'message' => 'Your cart is empty.',
        ], 400);
    }


    foreach ($cart->items()->with('product')->get() as $item) {
        if (!$item->product || $item->product->stock < $item->quantity) {
            return response()->json([
                'status'  => false,
                'message' => "The requested quantity for product '{$item->product->name}' is not available.",
            ], 400);
        }
    }

    
    try {
        $order = DB::transaction(function () use ($cart, $request) {
            $order = Order::create([
                'user_id'          => $request->user()->id,
                'total_price'      => $cart->totalPrice(),
                'status'           => 'pending',
                'phone'            => $request->phone,
                'shipping_address' => $request->shipping_address,
            ]);

            foreach ($cart->items as $item) {
                $order->items()->create([
                    'product_id' => $item->product_id,
                    'quantity'   => $item->quantity,
                    'price'      => $item->product->price,
                ]);

                $item->product->decrement('stock', $item->quantity);
            }

            $cart->clear();

            return $order;
        });

        return response()->json([
            'status'   => true,
            'message'  => 'Checkout successful. Your order has been placed.',
            'order_id' => $order->id,
        ], 200);

    } catch (Exception $e) {
        return response()->json([
            'status'  => false,
            'message' => 'An error occurred during checkout. Please try again.',
            'error'   => $e->getMessage(),
        ], 500);
    }
}
}
