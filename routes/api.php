<?php


use Ramsey\Uuid\Uuid;
// routes/web.php or routes/api.php
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;

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
                'files' => ['https://placehold.co/600x400', 'https://placehold.co/600x400'],
                'you' => true
            ],
            [
                'id' => 2,
                'message' => 'پیام دوم',
                'created_at' => '1400/01/01 12:00:00',
                'files' => ['https://placehold.co/600x400', 'https://placehold.co/600x400'],
                'you' => false
            ],
        ],
    ];

    return response()->json(['message' => $message]);
});

// FOR IMAGE DOT. IT GETS DATA OF PRODUCT {ID} AND FILTER
Route::get("/imgdot/{id}", function ($id) {
    $product = [
        "name" => "محصول",
        "img" => "https://picsum.photos/200",
        "price" => "25,000,000",
        "discounted_price" => "18,000,000",
        "discount" => "20%"
    ];

    $html = View::make("components/imgdot", $product)->render();

    return response()->json(['html' => $html]);
});


/**
 * this route returns the product details and update price and time and discount and also the images of product.
 *
 */
Route::post("/product", function (Request $request) {

    /**
     * regular_price & sale_price & discount & time_delivery are optional.
     * images are required. if they are not exist, use a default image.
     */
    $response = [
        "name" => $request->name,
        "images" => [
            "/images/5.jpg",
            "/images/6.jpg",
        ],
        "regular_price" => "25,000,000",
        "sale_price" => "18,000,000",
        "discount" => "20%",
        "time_delivery" => 2
    ];

    /**
     * [ Unavailable product ]
     */
    // $response = [
    //     "name" => $request->name,
    //     "images" => [
    //         "https://placehold.co/900?text=2",
    //     ],
    // ];

    return response()->json($response);
});

// Route::post("/add-to-cart", function (Request $request) {
//     $response = [
//         "status" => "success",
//         "message" => "محصول با موفقیت به سبد خرید اضافه شد.",
//         "cart" => [
//             "count" => 5,
//         ],
//     ];

//     return response()->json($response);
// });

// Route::get("/mini-cart", function (Request $request) {
//     $response = [
//         "cart" => [
//             "count" => 5,
//             "total" => "43,000,000",
//         ]
//     ];

//     $items = [
//         [
//             "id" => 1,
//             "name" => "محصول 1",
//             "img" => "https://placehold.co/900?text=1",
//             "quantity" => 1,
//             "total" => "18,000,000",
//         ],
//         [
//             "id" => 2,
//             "name" => "محصول 2",
//             "img" => "https://placehold.co/900?text=2",
//             "quantity" => 1,
//             "total" => "25,000,000",
//         ],
//     ];

//     $response['items'] = $items;

//     return response()->json($response);
// });

// Route::post("/update-cart", function (Request $request) {
//     // $request params
//     // $request = [
//     //     "id" => 1,
//     //     "count" => 20
//     // ];

//     $response = [
//         "cart" => [
//             "count" => 5,
//             "total" => "80,000,000",
//         ]
//     ];

//     $items = [
//         [
//             "id" => 1,
//             "name" => "محصول 1",
//             "img" => "https://placehold.co/900?text=1",
//             "quantity" => 1,
//             "total" => "28,000,000",
//         ],
//         [
//             "id" => 2,
//             "name" => "محصول 2",
//             "img" => "https://placehold.co/900?text=2",
//             "quantity" => 1,
//             "total" => "35,000,000",
//         ],
//     ];

//     $response['items'] = $items;

//     return response()->json($response);
// });

// Route::post("/remove-cart", function (Request $request) {
//     $response = [
//         "status" => "success",
//         "message" => "محصول با موفقیت از سبد خرید حذف شد.",
//         "cart" => [
//             "count" => 2,
//             "total" => "15,000,000",
//             "profit" => "5,000,000",
//             "discounts" => "20%"
//         ],
//     ];

//     $items = [
//         [
//             "id" => 1,
//             "name" => "محصول 1",
//             "img" => "https://placehold.co/900?text=1",
//             "quantity" => 1,
//             "total" => "28,000,000",
//         ],
//     ];

//     $response['items'] = $items;

//     // empty cart after removing the last item
//     // $response = [
//     //     "status" => "success",
//     //     "message" => "محصول با موفقیت از سبد خرید حذف شد.",
//     //     "cart" => array(),
//     // ];

//     // error response
//     // $response = [
//     //     "status" => "error",
//     //     "message" => "محصول در سبد خرید یافت نشد.",
//     // ];

//     return response()->json($response);
// });

Route::post("/remove-all-cart", function (Request $request) {
    $response = [
        "status" => "success",
        "message" => "همه محصولات با موفقیت از سبد خرید حذف شد.",
    ];

    return response()->json($response);
});

/**
 * من را خبر کن
 */
Route::post("/letmeknow", function (Request $request) {
    $response = [
        "status" => "success",
        "message" => "اطلاعات با موفقیت ارسال شد. پس از موجود شدن به شما اطلاع داده خواهد شد.",
    ];

    return response()->json($response);
});

/**
 * add to wishlist
 */
Route::post('/wishlist', function (Request $request) {
    $response = [
        "status" => "success",
        "message" => "محصول با موفقیت به لیست علاقه مندی ها اضافه شد.",
    ];

    return response()->json($response);
});

/**
 * remove from wishlist
 */
Route::delete("/wishlist", function (Request $request) {
    $response = [
        "status" => "success",
        "message" => "محصول با موفقیت از لیست علاقه مندی ها حذف شد.",
    ];

    return response()->json($response);
});


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


/**
 * this route returns the product details and update price and time and discount and also the images of product.
 *
 */
Route::post("/product",function(Request $request){

    /**
     * regular_price & sale_price & discount & time_delivery are optional.
     * images are required. if they are not exist, use a default image.
     */
    $response = [
        "name" => $request->name,
        "images" => [
            "/images/5.jpg",
            "/images/6.jpg",
        ],
        "regular_price" => "25,000,000",
        "sale_price" => "18,000,000",
        "discount" => "20%",
        "time_delivery" => 2
    ];

    /**
     * [ Unavailable product ]
     */
    // $response = [
    //     "name" => $request->name,
    //     "images" => [
    //         "https://placehold.co/900?text=2",
    //     ],
    // ];

    return response()->json($response);
});



Route::post("/remove-cart",function(Request $request){
    $response = [
        "status" => "success",
        "message" => "محصول با موفقیت از سبد خرید حذف شد.",
        "cart" => [
            "count" => 2,
            "total" => "15,000,000",
            "profit" => "5,000,000",
            "discounts" => "20%"
        ],
    ];

    // empty cart after removing the last item
    // $response = [
    //     "status" => "success",
    //     "message" => "محصول با موفقیت از سبد خرید حذف شد.",
    //     "cart" => array(),
    // ];

    // error response
    // $response = [
    //     "status" => "error",
    //     "message" => "محصول در سبد خرید یافت نشد.",
    // ];

    return response()->json($response);
});

Route::post("/remove-all-cart",function(Request $request){
    $response = [
        "status" => "success",
        "message" => "همه محصولات با موفقیت از سبد خرید حذف شد.",
    ];

    return response()->json($response);
});

/**
 * من را خبر کن
 */
Route::post("/letmeknow",function(Request $request){
    $response = [
        "status" => "success",
        "message" => "اطلاعات با موفقیت ارسال شد. پس از موجود شدن به شما اطلاع داده خواهد شد.",
    ];

    return response()->json($response);
});

/**
 * add to wishlist
 */
Route::post('/wishlist',function(Request $request){
    $response = [
        "status" => "success",
        "message" => "محصول با موفقیت به لیست علاقه مندی ها اضافه شد.",
    ];

    return response()->json($response);
});

/**
 * remove from wishlist
 */
Route::delete("/wishlist",function(Request $request){
    $response = [
        "status" => "success",
        "message" => "محصول با موفقیت از لیست علاقه مندی ها حذف شد.",
    ];

    return response()->json($response);
});

Route::post("/category",[CategoryController::class,'list'])->name('api.category');

Route::group(['middleware' => ['web']], function () {

    Route::post("/add-to-cart",[OrderController::class,'addToCart'])->name('api.addToCart');

    Route::get("/mini-cart", [OrderController::class,'showMiniCart'])->name('api.showMiniCart');
    Route::get("/cart-item-count", [OrderController::class,'getCartItemCount'])->name('api.getCartItemCount');


    Route::post("/remove-cart", [OrderController::class,'removeItemCart'])->name('api.removeItemCart');

    Route::post("/update-cart", [OrderController::class,'updateCart'])->name('api.updateCart');

    Route::get('/set-cookie', function () {
        return response('Cookie set successfully')->cookie('language', 'ssa', 120);
    });
});
