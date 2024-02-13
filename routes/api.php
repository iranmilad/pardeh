<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
// routes/web.php or routes/api.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('card/{id}', function ($id) {
    $data = [
        'img' => "resources/images/single-product/6.jpg",
        'title' => 'پرده پانچی آماده هازان (کتان) رنگ خردلی',
        'price' => '12,800,000',
        'discounted_price' => '11,000,000', // 10.99 - (10.99 * 0.2) = 8.79
        'discount' => "20%",
        'options' => [
            'سایز' => '2*3',
            'رنگ' => 'خردلی',
            'عرض' => '2.6 متر',
            'طول' => '3.5 متر',
            'هدریل' => 'داخلی',
            'حالت بالابر' => 'دستی',
            'همراه با موتور' => 'ندارد',
            'گارانتی' => 'سه سال محدود'
        ]
    ];

    // Render the Blade view
    $html = View::make('components/cart-details', $data)->render();

    // Return the HTML as an API response
    return response()->json(['html' => $html]);
});
