<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
// routes/web.php or routes/api.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;


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

Route::post('/file/upload', function (Request $request) {
    $uploadedFiles = [];

    foreach ($request->file('files') as $file) {
        $uuid = Uuid::uuid4()->toString();
        $uploadedFiles[] = [
            'uuid' => $uuid,
            'original_name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
        ];
    }

    return response()->json(['files' => $uploadedFiles], 200);
});

// FOR MESSAGE IN DASHBOARD
Route::get('/messages/{id}', function ($id) {
    $message = [
        'id' => $id,
        'sender' => 'مدیریت',
        'priority' => 'زیاد',
        'title' => 'پیام اول',
        'messages' => [
            [
                'id' => 1,
                'message' => 'پیام اول',
                'created_at' => '1400/01/01 12:00:00',
                'files' => ['https://placehold.co/600x400','https://placehold.co/600x400'],
                'you' => true
            ],
            [
                'id' => 2,
                'message' => 'پیام دوم',
                'created_at' => '1400/01/01 12:00:00',
                'files' => ['https://placehold.co/600x400','https://placehold.co/600x400'],
                'you' => false
            ],
        ],
    ];

    return response()->json(['message' => $message]);
});

// FOR IMAGE DOT. IT GETS DATA OF PRODUCT {ID} AND FILTER
Route::get("/imgdot/{id}",function($id){
    $product = [
        "name" => "محصول",
        "img" => "https://picsum.photos/200",
        "price" => "25,000,000",
        "discounted_price" => "18,000,000",
        "discount" => "20%"
    ];

    $html = View::make("components/imgdot",$product)->render();

    return response()->json(['html' => $html]);
});