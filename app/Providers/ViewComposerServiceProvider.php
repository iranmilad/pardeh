<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\OrderController;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::composer('partials.footer', function ($view) {
            // گرفتن همه‌ی منوها

            // laravel model get menu_id is null
            $menus = Menu::whereNull('menu_id')->get()->keyBy('alias');

            $view->with('menus', $menus);

        });

        // View::composer('partials.header', function ($view) {
        //     $cartCount = 0;

        //     $orderController = new OrderController();
        //     $cartCount = $orderController->getCartItemCount(request());

        //     $view->with('cartCount', $cartCount);
        // });


    }
}
