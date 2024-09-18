<?php
namespace Database\Seeders;

use App\Models\Widget;
use App\Models\BlockWidget;
use Illuminate\Database\Seeder;

class WidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Widget::query()->delete();
        // Example data
        $data = [
            '{"title":"محصولات جدید","link":"/category/محصولات-جدید","type":"simple","count":"4","hover":true,"data":"new product"}',
            '{"title":"محصولات تخفیف دار","link":"/category/محصولات-تخفیف-دار","type":"series","count":"10","hover":true,"data":"discount product"}',
            '{"title":"برند کوروش","link":"/category/برند-کوروش","type":"special","count":"10","hover":true,"category":"برند-کوروش","data":"category"}',
        ];

        // Create widget
        $widget = Widget::create([
            'name' => 'WidgetProducts',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        // Create sample data
        for ($i = 0; $i < 3; $i++) {
            BlockWidget::create([
                'widget_id' => $widget->id,
                'block' => 'block_' . ($i + 1),
                'type' => json_decode($data[$i])->data,
                'settings' => $data[$i]
            ]);
        }

        // type : simple | mosaic | list | carousel | slider

        $widget = Widget::create([
            'name' => 'WidgetPosts',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"آخرین مطالب","link":"","type":"simple","count":"6","data":"new post"}',
            '{"title":"","link":"","type":"mosaic","count":"4","data":"new post"}',
            '{"title":"پر بازدیدترین مطالب","link":"","type":"list","count":"10","data":"popular post"}',
            '{"title":"نتایج جستجو","link":"","type":"simple","count":"6","data":"search"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_4' ,
            'type' => json_decode($data[0])->data,
            'settings' => $data[0]
        ]);
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_14' ,
            'type' => json_decode($data[1])->data,
            'settings' => $data[1]
        ]);
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_16' ,
            'type' => json_decode($data[2])->data,
            'settings' => $data[2]
        ]);

        $widget = Widget::create([
            'name' => 'WidgetPostsList',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_15' ,
            'type' => json_decode($data[0])->data,
            'settings' => $data[0]
        ]);

        $widget = Widget::create([
            'name' => 'WidgetPostsList',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_35' ,
            'type' => json_decode($data[3])->data,
            'settings' => $data[3]
        ]);


        $widget = Widget::create([
            'name' => 'WidgetBanners',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"","name":"Banner 1","link":"","type":"template2","count":"6","data":"selection","images":[1,2]}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_5' ,
            'type' => json_decode($data[0])->data,
            'settings' => $data[0]
        ]);


        $widget = Widget::create([
            'name' => 'WidgetSliders',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"","name":"Slider 1","link":"","type":"template1","data":"selection","images":[1,2]}',
            '{"title":"","name":"Slider 2","link":"","type":"template1","data":"selection","images":[1,2,3,4]}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_6' ,
            'type' => json_decode($data[0])->data,
            'settings' => $data[0]
        ]);
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_9' ,
            'type' => json_decode($data[1])->data,
            'settings' => $data[1]
        ]);
        $widget = Widget::create([
            'name' => 'WidgetMenus',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"دسته بندی","name":"","link":"","type":"portfolio","count":"2","alias":"categories_home_page"}',
            '{"title":"ویژگی","name":"","link":"","type":"features_menu","count":"4","alias":"features_menu"}',
            '{"title":"","name":"","link":"","type":"menu_category","count":"10"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_7' ,
            'type' => 'category',
            'settings' => $data[0]
        ]);
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_8' ,
            'type' => 'simple',
            'settings' => $data[1]
        ]);
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_49' ,
            'type' => 'menu_category',
            'settings' => $data[2]
        ]);





        $widget = Widget::create([
            'name' => 'WidgetPostsSearch',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"جستجو","name":"","link":"","type":"simple"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_17' ,
            'type' => 'category',
            'settings' => $data[0]
        ]);


        $widget = Widget::create([
            'name' => 'WidgetPostTitle',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"جستجو","name":"","link":"","type":"simple"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_18' ,
            'type' => 'single post',
            'settings' => $data[0]
        ]);

        $widget = Widget::create([
            'name' => 'WidgetPostInfo',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"","name":"","link":"","type":"simple"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_19' ,
            'type' => 'single post',
            'settings' => $data[0]
        ]);

        $widget = Widget::create([
            'name' => 'WidgetPostFeaturedImage',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"","name":"","link":"","type":"simple"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_20' ,
            'type' => 'single post',
            'settings' => $data[0]
        ]);

        $widget = Widget::create([
            'name' => 'WidgetPostContent',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"","name":"","link":"","type":"simple"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_21' ,
            'type' => 'single post',
            'settings' => $data[0]
        ]);

        $widget = Widget::create([
            'name' => 'WidgetPostTags',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"","name":"","link":"","type":"simple"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_22' ,
            'type' => 'single post',
            'settings' => $data[0]
        ]);


        $widget = Widget::create([
            'name' => 'WidgetPostComments',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"","name":"","link":"","type":"simple"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_23' ,
            'type' => 'single post',
            'settings' => $data[0]
        ]);



        $widget = Widget::create([
            'name' => 'WidgetPostCategory',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"","name":"","link":"","type":"simple"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_24' ,
            'type' => 'posts category',
            'settings' => $data[0]
        ]);

        $widget = Widget::create([
            'name' => 'WidgetProductsList',
            'setup' => json_encode(['option1' => 'value1', 'option2' => 'value2']),
        ]);

        $data = [
            '{"title":"","name":"","link":"","type":"list"}',
        ];
        // Create sample data
        BlockWidget::create([
            'widget_id' => $widget->id,
            'block' => 'block_44' ,
            'type' => 'category',
            'settings' => $data[0]
        ]);

    }
}
