<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json([
            'status' => true,
            'message' => 'Products fetched successfully',
            'data' => $products
        ], 200);
    }


    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Product fetched successfully',
            'data' => $product
        ], 200);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();

        return response()->json([
            'status' => true,
            'message' => 'Products fetched successfully',
            'data' => $products
        ], 200);
    }

    public function filter(Request $request)
    {
        $categoryId = $request->input('category_id');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $query = Product::query();

        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        $products = $query->get();

        return response()->json([
            'status' => true,
            'message' => 'Products fetched successfully',
            'data' => $products
        ], 200);
    }

    public function sort(Request $request)
    {
        $sortBy = $request->input('sort_by', 'name');
        $sortOrder = $request->input('sort_order', 'asc');

        $products = Product::orderBy($sortBy, $sortOrder)->get();

        return response()->json([
            'status' => true,
            'message' => 'Products fetched successfully',
            'data' => $products
        ], 200);
    }

    public function paginate(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $products = Product::paginate($perPage);

        return response()->json([
            'status' => true,
            'message' => 'Products fetched successfully',
            'data' => $products
        ], 200);
    }

    public function getByCategory($categoryId)
    {
        $category = Category::with('products')->find($categoryId);

        if (!$category) {
            return response()->json([
                'status' => false,
                'message' => 'Category not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Products fetched successfully',
            'data' => $category->products
        ], 200);
    }

    public function getActiveProducts()
    {
        $products = Product::where('is_active', true)->get();

        return response()->json([
            'status' => true,
            'message' => 'Active products fetched successfully',
            'data' => $products
        ], 200);
    }

    public function getInactiveProducts()
    {
        $products = Product::where('is_active', false)->get();

        return response()->json([
            'status' => true,
            'message' => 'Inactive products fetched successfully',
            'data' => $products
        ], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'primary_image' => 'required|url',
            'specs' => 'nullable|array',
            'is_active' => 'boolean',
        ]);

        $product = Product::create($validatedData);

        return response()->json([
            'status' => true,
            'message' => 'Product created successfully',
            'data' => $product
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found',
            ], 404);
        }

        $validatedData = $request->validate([
            'category_id' => 'exists:categories,id',
            'name' => 'string|max:255',
            'description' => 'string',
            'price' => 'numeric|min:0',
            'stock' => 'integer|min:0',
            'primary_image' => 'url',
            'specs' => 'array',
            'is_active' => 'boolean',
        ]);

        $product->update($validatedData);

        return response()->json([
            'status' => true,
            'message' => 'Product updated successfully',
            'data' => $product
        ], 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found',
            ], 404);
        }

        $product->delete();

        return response()->json([
            'status' => true,
            'message' => 'Product deleted successfully',
        ], 200);
    }
}
