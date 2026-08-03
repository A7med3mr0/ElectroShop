<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Smartphones',
                'slug' => 'smartphones',
                
                'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600&auto=format&fit=crop',
                'products' => [
                    [
                        'name' => 'iPhone 15 Pro',
                        'price' => 999.99,
                        'description' => 'Flagship phone with Titanium design and A17 Pro chip.',
                        'primary_image' => 'https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&auto=format&fit=crop',
                        'specs' => ['ram' => '8GB', 'storage' => '256GB', 'screen' => '6.1 inch OLED']
                    ],
                    [
                        'name' => 'Samsung Galaxy S24 Ultra',
                        'price' => 1199.99,
                        'description' => 'Ultimate Android experience with S-Pen and AI features.',
                        'primary_image' => 'https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&auto=format&fit=crop',
                        'specs' => ['ram' => '12GB', 'storage' => '512GB', 'screen' => '6.8 inch AMOLED']
                    ]
                ]
            ],
            [
                'name' => 'Laptops',
                'slug' => 'laptops',

                'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600&auto=format&fit=crop',
                'products' => [
                    [
                        'name' => 'MacBook Pro 16 M3 Pro',
                        'price' => 2499.00,
                        'description' => 'Powerhouse for developers and creative professionals.',
                        'primary_image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&auto=format&fit=crop',
                        'specs' => ['processor' => 'M3 Pro', 'ram' => '18GB', 'ssd' => '512GB']
                    ],
                    [
                        'name' => 'Dell XPS 15',
                        'price' => 1899.00,
                        'description' => 'Premium Windows laptop with infinity edge display.',
                        'primary_image' => 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=600&auto=format&fit=crop',
                        'specs' => ['processor' => 'Intel i9', 'ram' => '32GB', 'gpu' => 'RTX 4060']
                    ]
                ]
            ],
            [
                'name' => 'Cameras',
                'slug' => 'cameras',

                'image' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&auto=format&fit=crop',
                'products' => [
                    [
                        'name' => 'Sony Alpha A7 IV',
                        'price' => 2498.00,
                        'description' => 'Full-frame mirrorless camera for photos and video.',
                        'primary_image' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&auto=format&fit=crop',
                        'specs' => ['sensor' => '33MP Full-Frame', 'video' => '4K 60p']
                    ]
                ]
            ]
        ];

        foreach ($categories as $catData) {
            $category = Category::create([
                'name' => $catData['name'],
                'slug' => $catData['slug'],
                'image' => $catData['image']
            ]);

            foreach ($catData['products'] as $prodData) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => $prodData['name'],
                    'slug' => Str::slug($prodData['name']),
                    'description' => $prodData['description'],
                    'price' => $prodData['price'],
                    'stock' => rand(5, 20),
                    'primary_image' => $prodData['primary_image'],
                    'specs' => $prodData['specs'],
                    'is_active' => true
                ]);
            }
        }
    }
}
