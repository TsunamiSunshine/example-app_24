<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\FormSendRegister;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        FormSendRegister::insert([
            'name' => 'Kirill',
            'email' => '123@mail.com',
            'phone' => '123',
            'select_department' => Str::random(10),
            'message' => Str::random(10),
        ]);

        $products = [
            [
                'product_id' => 1,
                'name' => 'Product 1',
                'image' => 'image/product/89VgT1cBB5XQQz3Hw2ogxABFhO1wQ0SG4yhP6l8p.jpg',
                'description' => 'This is the first product',
                'price' => 10.99,
            ],
            [
                'product_id' => 2,
                'name' => 'Product 2',
                'image' => 'image/product/89VgT1cBB5XQQz3Hw2ogxABFhO1wQ0SG4yhP6l8p.jpg',
                'description' => 'This is the second product',
                'price' => 19.99,
            ],
            [
                'product_id' => 3,
                'name' => 'Product 3',
                'image' => 'image/product/89VgT1cBB5XQQz3Hw2ogxABFhO1wQ0SG4yhP6l8p.jpg',
                'description' => 'This is the third product',
                'price' => 7.99,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        };

        $categories = [
            [
                'category_id' => 1,
                'name' => 'Category 1',
                'image' => 'image/product/89VgT1cBB5XQQz3Hw2ogxABFhO1wQ0SG4yhP6l8p.jpg',
                'description' => 'This is the first category',
            ],
            [
                'category_id' => 2,
                'name' => 'Category 2',
                'image' => 'image/product/89VgT1cBB5XQQz3Hw2ogxABFhO1wQ0SG4yhP6l8p.jpg',
                'description' => 'This is the second category',
            ],
            [
                'category_id' => 3,
                'name' => 'Category 3',
                'image' => 'image/product/89VgT1cBB5XQQz3Hw2ogxABFhO1wQ0SG4yhP6l8p.jpg',
                'description' => 'This is the third category',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }


    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
}
