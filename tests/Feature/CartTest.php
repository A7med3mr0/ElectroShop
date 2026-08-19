<?php

namespace Tests\Feature;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CartTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_cart()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->getJson('/api/cart');

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => true,
                 ])
                 ->assertJsonStructure([
                     'status',
                     'data' => [
                         'items',
                         'total_items',
                         'total_price',
                     ],
                 ]);
    }

    public function test_user_can_add_product_to_cart()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create([
            'stock' => 10,
        ]);

        $payload = [
            'product_id' => $product->id,
            'quantity'   => 2,
        ];

        $response = $this->actingAs($user)->postJson('/api/cart/add', $payload);

        $response->assertStatus(200)
                 ->assertJson([
                     'status'  => true,
                     'message' => 'Product added to cart successfully',
                 ]);
    }

    public function test_user_cannot_add_more_than_available_stock()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create([
            'stock' => 3,
        ]);

        $payload = [
            'product_id' => $product->id,
            'quantity'   => 5,
        ];

        $response = $this->actingAs($user)->postJson('/api/cart/add', $payload);

        $response->assertStatus(400)
                 ->assertJson([
                     'status' => false,
                 ]);
    }

    public function test_user_can_update_cart_item_quantity()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create([
            'stock' => 10,
        ]);


        $this->actingAs($user)->postJson('/api/cart/add', [
            'product_id' => $product->id,
            'quantity'   => 1,
        ]);


        $response = $this->actingAs($user)->putJson("/api/cart/update/{$product->id}", [
            'quantity' => 3,
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'status'  => true,
                     'message' => 'Cart updated successfully',
                 ]);
    }

    public function test_user_can_remove_item_from_cart()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create([
            'stock' => 10,
        ]);

        $this->actingAs($user)->postJson('/api/cart/add', [
            'product_id' => $product->id,
            'quantity'   => 1,
        ]);

        $response = $this->actingAs($user)->deleteJson("/api/cart/remove/{$product->id}");

        $response->assertStatus(200)
                 ->assertJson([
                     'status'  => true,
                     'message' => 'Product removed from cart successfully',
                 ]);
    }

    public function test_user_can_clear_cart()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->deleteJson('/api/cart/clear');

        $response->assertStatus(200)
                 ->assertJson([
                     'status'  => true,
                     'message' => 'Cart cleared successfully',
                 ]);
    }

    public function test_user_cannot_checkout_empty_cart()
{
    $user = User::factory()->create();

    
    $response = $this->actingAs($user)->postJson('/api/cart/checkout', [
        'phone'            => '01000000000',
        'shipping_address' => 'Cairo, Egypt',
    ]);

    $response->assertStatus(400)
             ->assertJson([
                 'status'  => false,
                 'message' => 'Your cart is empty.',
             ]);
}

    public function test_user_can_checkout_successfully()
{
    $user = User::factory()->create();
    $product = Product::factory()->create([
        'price' => 100,
        'stock' => 5,
    ]);


    $this->actingAs($user)->postJson('/api/cart/add', [
        'product_id' => $product->id,
        'quantity'   => 2,
    ]);


    $response = $this->actingAs($user)->postJson('/api/cart/checkout', [
        'phone'            => '01000000000',
        'shipping_address' => 'Cairo, Egypt',
    ]);

    $response->assertStatus(200)
             ->assertJson([
                 'status'  => true,
                 'message' => 'Checkout successful. Your order has been placed.',
             ]);


    $this->assertDatabaseHas('products', [
        'id'    => $product->id,
        'stock' => 3,
    ]);


    $this->assertDatabaseHas('orders', [
        'user_id'          => $user->id,
        'total_price'      => 200,
        'status'           => 'pending',
        'phone'            => '01000000000',
        'shipping_address' => 'Cairo, Egypt',
    ]);
}
}
