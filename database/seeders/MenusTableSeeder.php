<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'title' => 'Интерьер',
            'alias' => 'interior'
        ]);
        Menu::create([
            'title' => 'Экстерьер',
            'alias' => 'exterior'
        ]);
        Menu::create([
            'title' => 'Оптика',
            'alias' => 'lighting'
        ]);
        Menu::create([
            'title' => 'Запчасти',
            'alias' => 'repair-parts'
        ]);
        Menu::create([
            'title' => 'Кузов',
            'alias' => 'body-parts'
        ]);
        Menu::create([
            'title' => 'Блог',
            'alias' => 'blog'
        ]);
    }
}
