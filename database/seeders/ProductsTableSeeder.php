<?php
namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the "Kourosh" category
        $category = Category::create([
            'title' => 'محصولات اختصاصی کوروش',
            'description' => 'محصولات اختصاصی کوروش کمپانی',
            'alias' => 'kourosh',
            // Add other necessary fields
        ]);



        $products = [
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'img' => 'images/single-product/1.jpg',
                'hover_img' => 'images/auth.jpg',
                'description' => 'Description of product 1',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'sale_price' => '9000000',
                'img' => 'images/single-product/2.jpg',
                'hover_img' => 'images/auth2.jpg',
                'description' => 'Description of product 2',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'img' => 'images/single-product/3.jpg',
                'hover_img' => 'images/auth3.jpg',
                'description' => 'Description of product 3',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'img' => 'images/single-product/1.jpg',
                'hover_img' => 'images/auth.jpg',
                'description' => 'Description of product 1',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'sale_price' => '9000000',
                'img' => 'images/single-product/2.jpg',
                'hover_img' => 'images/auth2.jpg',
                'description' => 'Description of product 2',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'img' => 'images/single-product/3.jpg',
                'hover_img' => 'images/auth3.jpg',
                'description' => 'Description of product 3',
            ],

            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'img' => 'images/single-product/1.jpg',
                'hover_img' => 'images/auth.jpg',
                'description' => 'Description of product 1',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'sale_price' => '8500000',
                'img' => 'images/single-product/2.jpg',
                'hover_img' => 'images/auth2.jpg',
                'description' => 'Description of product 2',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'img' => 'images/single-product/3.jpg',
                'hover_img' => 'images/auth3.jpg',
                'description' => 'Description of product 3',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'img' => 'images/single-product/1.jpg',
                'hover_img' => 'images/auth.jpg',
                'description' => 'Description of product 1',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'sale_price' => '8000000',
                'img' => 'images/single-product/2.jpg',
                'hover_img' => 'images/auth2.jpg',
                'description' => 'Description of product 2',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'img' => 'images/single-product/3.jpg',
                'hover_img' => 'images/auth3.jpg',
                'description' => 'Description of product 3',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '11000000',
                'img' => 'images/single-product/1.jpg',
                'hover_img' => 'images/auth.jpg',
                'description' => 'Description of product 1',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'sale_price' => '9000000',
                'img' => 'images/single-product/2.jpg',
                'hover_img' => 'images/auth2.jpg',
                'description' => 'Description of product 2',
            ],
            [
                'title' => 'پرده جدیده کتان',
                'price' => '12000000',
                'img' => 'images/single-product/3.jpg',
                'hover_img' => 'images/auth3.jpg',
                'description' => 'Description of product 3',
            ],
            // Add more products as needed
        ];

        foreach ($products as $productData) {
            $product = new Product();
            $product->fill($productData);
            $product->type = 'simple';
            $product->is_top = false;
            $product->is_new = false;
            $product->save();
        }

        foreach ($products as $productData) {
            $product = new Product();
            $product->fill($productData);
            $product->type = 'simple';
            $product->is_top = false;
            $product->is_new = false;
            $product->save();

            // Attach the product to the "Kourosh" category
            $product->categories()->attach($category->id);
        }

    }
}
