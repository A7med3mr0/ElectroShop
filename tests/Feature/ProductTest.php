<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_fetch_all_products(): void
    {
        $category = Category::factory()->create();
        Product::factory()->count(3)->create(['category_id' => $category->id]);

        $response = $this->getJson('/api/products');

        $response->assertStatus(200)
                 ->assertJson(['status' => true])
                 ->assertJsonCount(3, 'data');
    }

    public function test_can_show_single_product(): void
    {
        $category = Category::factory()->create();
        $product = Product::factory()->create(['category_id' => $category->id]);

        $response = $this->getJson("/api/products/{$product->id}");

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => true,
                     'data'   => ['id' => $product->id]
                 ]);
    }

    public function test_returns_404_if_product_not_found(): void
    {
        $response = $this->getJson('/api/products/999');

        $response->assertStatus(404)
                 ->assertJson(['status' => false, 'message' => 'Product not found']);
    }

    public function test_can_create_product(): void
    {
        $category = Category::factory()->create();

        $productData = [
            'category_id'   => $category->id,
            'name'          => 'iPhone 15 Pro',
            'description'   => 'Latest Apple smartphone',
            'price'         => 999.99,
            'stock'         => 50,
            'primary_image' => 'https://example.com/iphone.jpg',
            'is_active'     => true,
        ];

        $response = $this->postJson('/api/products', $productData);

        $response->assertStatus(201)
                 ->assertJson(['status' => true, 'message' => 'Product created successfully']);

        $this->assertDatabaseHas('products', [
            'name' => 'iPhone 15 Pro',
            'price' => 999.99,
        ]);
    }

    public function test_can_update_product(): void
    {
        $category = Category::factory()->create();
        $product = Product::factory()->create(['category_id' => $category->id]);

        $updateData = ['name' => 'Updated Product Name'];

        $response = $this->putJson("/api/products/{$product->id}", $updateData);

        $response->assertStatus(200)
                 ->assertJson(['status' => true, 'message' => 'Product updated successfully']);

        $this->assertDatabaseHas('products', [
            'id'   => $product->id,
            'name' => 'Updated Product Name',
        ]);
    }

    public function test_can_delete_product(): void
    {
        $category = Category::factory()->create();
        $product = Product::factory()->create(['category_id' => $category->id]);

        $response = $this->deleteJson("/api/products/{$product->id}");

        $response->assertStatus(200)
                 ->assertJson(['status' => true, 'message' => 'Product deleted successfully']);

        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }

    public function test_can_search_products(): void
    {
        $category = Category::factory()->create();
        Product::factory()->create(['category_id' => $category->id, 'name' => 'MacBook Pro']);
        Product::factory()->create(['category_id' => $category->id, 'name' => 'Samsung Galaxy']);

        $response = $this->getJson('/api/products/search?query=MacBook');

        $response->assertStatus(200)
                 ->assertJsonCount(1, 'data')
                 ->assertJsonFragment(['name' => 'MacBook Pro']);
    }

    public function test_can_filter_products_by_category_and_price(): void
    {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();

        Product::factory()->create(['category_id' => $category1->id, 'price' => 100]);
        Product::factory()->create(['category_id' => $category1->id, 'price' => 500]);
        Product::factory()->create(['category_id' => $category2->id, 'price' => 100]);

        $response = $this->getJson("/api/products/filter?category_id={$category1->id}&min_price=200");

        $response->assertStatus(200)
                 ->assertJsonCount(1, 'data');
    }
}
