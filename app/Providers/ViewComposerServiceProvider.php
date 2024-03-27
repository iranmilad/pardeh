<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

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

        View::composer('partials.header', function ($view) {
            $cartCount = 0;

            $menus = Menu::whereNull('menu_id')->get()->keyBy('alias');

            $view->with('menus', $menus);

            if (session()->has('cart')){

                if (request()->cookie('cart')) {
                    $cartItems = json_decode(request()->cookie('cart'), true);
                    $cartCount = count($cartItems);
                }

            }

            $view->with('cartCount', $cartCount);
        });


    }
}
