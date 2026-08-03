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
                    ],
                    [
                        'name' => 'Google Pixel 8 Pro',
                        'price' => 899.00,
                        'description' => 'Advanced AI cameras and pure Android experience.',
                        'primary_image' => 'https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&auto=format&fit=crop',
                        'specs' => ['ram' => '12GB', 'storage' => '128GB', 'screen' => '6.7 inch LTPO OLED']
                    ],
                    [
                        'name' => 'Xiaomi 14 Ultra',
                        'price' => 1099.00,
                        'description' => 'Leica quad-camera system for professional mobile photography.',
                        'primary_image' => 'https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&auto=format&fit=crop',
                        'specs' => ['ram' => '16GB', 'storage' => '512GB', 'screen' => '6.73 inch AMOLED']
                    ],
                    [
                        'name' => 'OnePlus 12',
                        'price' => 799.99,
                        'description' => 'Fast performance with Snapdragon 8 Gen 3 and 100W charging.',
                        'primary_image' => 'https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&auto=format&fit=crop',
                        'specs' => ['ram' => '12GB', 'storage' => '256GB', 'screen' => '6.82 inch AMOLED']
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
                    ],
                    [
                        'name' => 'Lenovo Legion Pro 7i',
                        'price' => 2199.99,
                        'description' => 'High-end gaming laptop with RGB keyboard and high refresh rate screen.',
                        'primary_image' => 'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=600&auto=format&fit=crop',
                        'specs' => ['processor' => 'Intel i9-14900HX', 'ram' => '32GB', 'gpu' => 'RTX 4080']
                    ],
                    [
                        'name' => 'ASUS ROG Zephyrus G14',
                        'price' => 1599.00,
                        'description' => 'Ultra-portable gaming laptop with OLED screen.',
                        'primary_image' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&auto=format&fit=crop',
                        'specs' => ['processor' => 'AMD Ryzen 9', 'ram' => '16GB', 'gpu' => 'RTX 4070']
                    ],
                    [
                        'name' => 'HP Spectre x360',
                        'price' => 1399.99,
                        'description' => '2-in-1 convertible laptop with touch screen and stylus support.',
                        'primary_image' => 'https://images.unsplash.com/photo-1544731612-de7f96afe55f?w=600&auto=format&fit=crop',
                        'specs' => ['processor' => 'Intel Ultra 7', 'ram' => '16GB', 'ssd' => '1TB']
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
                    ],
                    [
                        'name' => 'Canon EOS R6 Mark II',
                        'price' => 2299.00,
                        'description' => 'High-speed mirrorless camera with unmatched autofocus system.',
                        'primary_image' => 'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=600&auto=format&fit=crop',
                        'specs' => ['sensor' => '24.2MP Full-Frame', 'video' => '4K 60p Uncropped']
                    ],
                    [
                        'name' => 'Fujifilm X-T5',
                        'price' => 1699.95,
                        'description' => 'Classic retro design with modern high-res APS-C sensor.',
                        'primary_image' => 'https://images.unsplash.com/photo-1512790182412-b19e6d61b397?w=600&auto=format&fit=crop',
                        'specs' => ['sensor' => '40MP APS-C', 'video' => '6.2K 30p']
                    ],
                    [
                        'name' => 'Nikon Z6 II',
                        'price' => 1996.95,
                        'description' => 'Versatile full-frame camera with dual EXPEED processors.',
                        'primary_image' => 'https://images.unsplash.com/photo-1617005082133-548c4dd27f35?w=600&auto=format&fit=crop',
                        'specs' => ['sensor' => '24.5MP Full-Frame', 'video' => '4K 60p']
                    ],
                    [
                        'name' => 'GoPro HERO12 Black',
                        'price' => 399.99,
                        'description' => 'Rugged and waterproof action camera with HDR video.',
                        'primary_image' => 'https://images.unsplash.com/photo-1564466809058-bf4114d55352?w=600&auto=format&fit=crop',
                        'specs' => ['sensor' => '27MP', 'video' => '5.3K 60p']
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
