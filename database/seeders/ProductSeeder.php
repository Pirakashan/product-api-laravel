<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Clear existing products
        DB::table('products')->truncate();

        $products = [
            [
                'name' => 'Wireless Headphones',
                'description' => 'Premium noise-canceling wireless headphones with 30-hour battery life',
                'price' => 199.99,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500',
                
            ],
            [
                'name' => 'Smart Watch',
                'description' => 'Fitness tracker with heart rate monitor and GPS',
                'price' => 299.99,
                'image_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500',
               
            ],
            [
                'name' => 'Laptop Stand',
                'description' => 'Ergonomic aluminum laptop stand for better posture',
                'price' => 49.99,
                'image_url' => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500',
                
            ],
            [
                'name' => 'Mechanical Keyboard',
                'description' => 'RGB backlit mechanical keyboard with blue switches',
                'price' => 129.99,
                'image_url' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500',
                
            ],
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with precision tracking',
                'price' => 39.99,
                'image_url' => 'https://images.unsplash.com/photo-1527814050087-3793815479db?w=500',
                
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        echo "✅ Successfully seeded " . count($products) . " products!\n";
    }
}