<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\NewsletterController;

// All Product Routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/search', [ProductController::class, 'search']);
    Route::get('/filter', [ProductController::class, 'filter']);
    Route::get('/sort', [ProductController::class, 'sort']);
    Route::get('/paginate', [ProductController::class, 'paginate']);
    Route::get('/active', [ProductController::class, 'getActiveProducts']);
    Route::get('/inactive', [ProductController::class, 'getInactiveProducts']);
    Route::get('/category/{categoryId}', [ProductController::class, 'getByCategory']);
    Route::get('/{id}', [ProductController::class, 'show']);

    Route::post('/', [ProductController::class, 'store']);
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::delete('/{id}', [ProductController::class, 'destroy']);
});

// All Category Routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);

    Route::get('/{id}/products', [CategoryController::class, 'products']);
    Route::get('/{id}/products/active', [CategoryController::class, 'activeProducts']);
    Route::get('/{id}/products/inactive', [CategoryController::class, 'inactiveProducts']);
    Route::get('/{id}/products/search', [CategoryController::class, 'searchProducts']);
    Route::get('/{id}/products/filter', [CategoryController::class, 'filterProducts']);
    Route::get('/{id}/products/sort', [CategoryController::class, 'sortProducts']);
    Route::get('/{id}/products/paginate', [CategoryController::class, 'paginateProducts']);
});



// 1. Public Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// 2. Protected Auth Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/refresh-token', [AuthController::class, 'refreshToken']);
    Route::post('/change-password', [AuthController::class, 'changePassword']);
    Route::put('/update-profile', [AuthController::class, 'updateProfile']);
    Route::delete('/delete-account', [AuthController::class, 'deleteAccount']);

    // Roles & Permissions
    Route::get('/permissions', [AuthController::class, 'getUserPermissions']);
    Route::get('/roles', [AuthController::class, 'getUserRoles']);
    Route::post('/assign-role', [AuthController::class, 'assignRole']);
    Route::post('/remove-role', [AuthController::class, 'removeRole']);
});


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/orders/date-range', [OrderController::class, 'getOrdersByDateRange']);
    Route::get('/orders/price-range', [OrderController::class, 'getOrdersByPriceRange']);
    Route::get('/orders/status/{status}', [OrderController::class, 'getOrdersByStatus']);


    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);
    Route::get('/orders/{id}', [OrderController::class, 'show']);
    Route::post('/orders/{id}/cancel', [OrderController::class, 'cancel']);
    Route::put('/orders/{id}/status', [OrderController::class, 'updateStatus']);
    Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
});

Route::prefix('cart')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [CartController::class, 'index']);
    Route::post('/add', [CartController::class, 'add']);
    Route::put('/update/{productId}', [CartController::class, 'updateQuantity']);
    Route::delete('/remove/{productId}', [CartController::class, 'removeItem']);
    Route::delete('/clear', [CartController::class, 'clear']);
    Route::post('/checkout', [CartController::class, 'checkout']);
});

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe']);



