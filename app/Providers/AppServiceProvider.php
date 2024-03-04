<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        View::composer('partials.footer', function ($view) {
            // گرفتن همه‌ی منوها

            // laravel model get menu_id is null
            $menus = Menu::whereNull('menu_id')->get()->keyBy('alias');

            $view->with('menus', $menus);

        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
