<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_fetch_all_categories(): void
    {

        Category::factory()->create(['name' => 'Electronics']);
        Category::factory()->create(['name' => 'Fashion']);


        $response = $this->getJson('/api/categories');


        $response->assertStatus(200);


        if (isset($response->json()['data'])) {
            $response->assertJsonCount(2, 'data');
        } else {
            $response->assertJsonCount(2);
        }
    }



    public function test_can_create_a_new_category(): void
{
    $categoryData = [
        'name' => 'Tablets',
    ];

    $response = $this->postJson('/api/categories', $categoryData);

    $response->assertStatus(201)
             ->assertJson([
                 'status' => true,
                 'message' => 'Category created successfully',
             ]);

    $this->assertDatabaseHas('categories', [
        'name' => 'Tablets',
        'slug' => 'tablets',
    ]);
}
}
