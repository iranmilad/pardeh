<?php
namespace Database\Seeders;


use App\Models\AttributeItem;
use App\Models\Product;
use App\Models\Attribute;
use Illuminate\Database\Seeder;

class ColorAttributeSeeder extends Seeder
{
    public function run()
    {
        Attribute::query()->delete();
        // ایجاد رنگ‌های مختلف برای ویژگی color
        $colors = [
            ['name' => 'black', 'img' => '/products/1123/color/black.jpg'],
            ['name' => 'gray', 'img' => '/products/1123/color/gray.jpg'],
            ['name' => 'orange', 'img' => '/products/1123/color/orange.jpg'],
            ['name' => 'yellow', 'img' => '/products/1123/color/yellow.jpg'],
            ['name' => 'blue', 'img' => '/products/1123/color/blue.jpg'],
            ['name' => 'purple', 'img' => '/products/1123/color/purple.jpg'],
            ['name' => 'pink', 'img' => '/products/1123/color/pink.jpg'],
        ];

        $products = Product::all();
        foreach ($products as $product) {
            // ایجاد یک ویژگی color جدید برای هر محصول
            $colorAttribute = Attribute::create([
                'name' => 'color',
                'countable' => false,
                'unit' => '',
                'display_type' => 'color',
                'guide_link' => ''
            ]);

            // تعداد تصادفی از رنگ‌ها برای هر محصول
            $numberOfColors = random_int(1, count($colors));

            // تصادفی کردن آرایه colors
            shuffle($colors);

            // انتخاب تعداد مورد نیاز از ابتدای آرایه
            $randomColors = array_slice($colors, 0, $numberOfColors);

            // ایجاد آیتم‌های ویژگی color برای هر رنگ انتخاب شده
            foreach ($randomColors as $color) {
                AttributeItem::create([
                    'name' => $color['name'],
                    'attribute_id' => $colorAttribute->id,
                    'img' => $color['img']
                ]);
            }

            // اتصال محصول به ویژگی color مربوطه
            $product->attributes()->attach($colorAttribute->id);
        }

    }
}
