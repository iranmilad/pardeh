<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Services\CodePlacementService;
use Illuminate\Support\ServiceProvider;

class CodePlacementServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // ثبت سرویس CodePlacementService به صورت Singleton
        $this->app->singleton(CodePlacementService::class, function ($app) {
            return new CodePlacementService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // استفاده از View Composer برای ارسال کدهای placement به تمام ویوها
        View::composer('layouts.primary', function ($view) {
            // دریافت سرویس CodePlacementService
            $codePlacementService = app(CodePlacementService::class);

            // دریافت کدها برای صفحه جاری
            $codeMap = $codePlacementService->renderCode(url()->current());

            // ارسال کدهای placement به تمام ویوها
            $view->with('codeMap', $codeMap);
        });
    }


}
