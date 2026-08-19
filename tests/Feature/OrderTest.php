<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_their_orders()
    {
        $user = User::factory()->create();
        Order::factory()->count(3)->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->getJson('/api/orders');

        $response->assertStatus(200)
                 ->assertJsonPath('data.total', 3);
    }

    public function test_user_can_create_order()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create(['stock' => 10, 'price' => 50]);

        $response = $this->actingAs($user)->postJson('/api/orders', [
            'phone'            => '01000000000',
            'shipping_address' => 'Cairo, Egypt',
            'items'            => [
                ['product_id' => $product->id, 'quantity' => 2]
            ]
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('products', ['id' => $product->id, 'stock' => 8]);
    }

    public function test_user_can_show_single_order()
    {
        $user = User::factory()->create();
        $order = Order::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->getJson("/api/orders/{$order->id}");

        $response->assertStatus(200)
                 ->assertJsonPath('data.id', $order->id);
    }

    public function test_user_can_cancel_pending_order_and_restore_stock()
    {
        $user = User::factory()->create();
        $product = Product::factory()->create(['stock' => 5]);
        $order = Order::factory()->create(['user_id' => $user->id, 'status' => 'pending']);

        OrderItem::factory()->create([
            'order_id'   => $order->id,
            'product_id' => $product->id,
            'quantity'   => 2
        ]);

        $response = $this->actingAs($user)->postJson("/api/orders/{$order->id}/cancel");

        $response->assertStatus(200);
        $this->assertDatabaseHas('orders', ['id' => $order->id, 'status' => 'cancelled']);
        $this->assertDatabaseHas('products', ['id' => $product->id, 'stock' => 7]);
    }

    public function test_user_can_filter_orders_by_status()
    {
        $user = User::factory()->create();
        Order::factory()->create(['user_id' => $user->id, 'status' => 'shipped']);
        Order::factory()->create(['user_id' => $user->id, 'status' => 'pending']);

        $response = $this->actingAs($user)->getJson('/api/orders/status/shipped');

        $response->assertStatus(200)
                 ->assertJsonPath('data.total', 1);
    }

    public function test_non_admin_user_cannot_update_order_status()
{
    $user = User::factory()->create(['is_admin' => false]);
    $order = Order::factory()->create(['status' => 'pending']);


    $response = $this->actingAs($user)->putJson("/api/orders/{$order->id}/status", [
        'status' => 'shipped',
    ]);

    $response->assertStatus(403);
}

public function test_admin_can_update_order_status()
{
    $admin = User::factory()->create(['is_admin' => true]);
    $order = Order::factory()->create(['status' => 'pending']);

    
    $response = $this->actingAs($admin)->putJson("/api/orders/{$order->id}/status", [
        'status' => 'shipped',
    ]);

    $response->assertStatus(200);
    $this->assertDatabaseHas('orders', [
        'id'     => $order->id,
        'status' => 'shipped',
    ]);
}
}
