<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use PhpParser\Node\Stmt\TryCatch;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RolesTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(MenusTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(BrandsTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(ArticlesTableSeeder::class);
        // $this->call(ReviewsTableSeeder::class);
        // $this->call(CommentsTableSeeder::class);
        // $this->call(ProductMenuSeeder::class);
        // $this->call(CategoriesMenuSeeder::class);
        // $this->call(ReviewsTableSeeder::class);
        // $this->call(CommentsTableSeeder::class);
        // $this->call(ProductMenuSeeder::class);
        // $this->call(CategoriesMenuSeeder::class);
        // $this->call(ProductMenuSeeder::class);






        // factory(Product::class, 500)->create();
        // factory(Review::class, 5000)->create();
        // factory(Comment::class, 50)->create();

        // پیدا کردن تمامی فایل‌های موجود در پوشه جاری
        $files = File::glob(database_path('seeders') . '/*.php');

        // اضافه کردن هر فایل به Seeder
        foreach ($files as $file) {
            $class = 'Database\\Seeders\\' . pathinfo($file, PATHINFO_FILENAME);

            if ($class !== self::class) {
                try {
                    $this->call($class);
                }
                catch (\Throwable $th) {
                    continue;
                }
            }
        }


    }
}
