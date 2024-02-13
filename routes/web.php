<?php

use Livewire\Livewire;
use App\Livewire\Counter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'IndexController@index')
//     ->name('main');



// Route::get('blog', 'BlogController@index')
//     ->name('blog');



// Route::get('blog/{article}', 'BlogController@show')
//     ->name('article');


// Route::prefix('products')->group(function () {
//     Route::get('{menu}', 'ProductController@index')
//         ->name('products.index');

//     Route::get('{menu}/{category}', 'ProductController@showByCategory')
//         ->name('products.category');
// });


// Route::prefix('product')->group(function () {
//     Route::get('{product}', 'ProductController@show')
//         ->name('product');
// });



// Route::middleware('ajax')->group(function () {
//     Route::get('check/email', 'Auth\RegisterController@checkEmail')
//         ->name('check.email');

//     Route::post('review', 'ReviewController@store')
//         ->name('review.store');

//     Route::post('comment', 'CommentController@store')
//         ->name('comment.store');

//     Route::prefix('cart')->group(function () {
//         Route::get('add', 'CartController@incrementOrDecrementItem')
//             ->name('cart.add');

//         Route::get('remove', 'CartController@remove')
//             ->name('cart.remove');
//     });

//     Route::prefix('order')->group(function () {
//         Route::get('delivery', 'Order\DeliveryController@delivery')
//             ->name('delivery.delivery');

//         Route::get('self-delivery', 'OrderController@selfDelivery')
//             ->name('order.selfDelivery');

//         Route::get('region', 'Order\DeliveryController@region')
//             ->name('delivery.region');

//         Route::get('city', 'Order\DeliveryController@city')
//             ->name('delivery.city');

//         Route::get('warehouse', 'Order\DeliveryController@warehouse')
//             ->name('delivery.warehouse');

//         Route::get('category', 'Order\DeliveryController@category')
//             ->name('delivery.category');

//         Route::post('delivery/calculation', 'Order\DeliveryController@calculation')
//             ->name('delivery.calculation');
//     });

//     Route::get('home/orders/info', 'HomeController@order')
//         ->name('order.info');

//     Route::get('search/list', 'SearchController@search')
//         ->name('search.list');

//     Route::delete('comments/{comment}', 'CommentController@delete')
//         ->name('comment.delete');

//     Route::put('comments/{comment}', 'CommentController@update')
//         ->name('comment.update');
// });

// Route::get('/confirm/{token}', 'Auth\EmailConfirmController@confirmEmail')
//     ->name('confirm');


// Route::get('cart', 'CartController@index')
//     ->name('cart');

// Route::get('order', 'OrderController@index')
//     ->name('order')->middleware('order');

// Route::get('change/currency/{currency}', 'IndexController@changeCurrency')
//     ->name('currency.change')
//     ->middleware('currency');

// Route::post('payment/order', 'OrderController@store')
//     ->name('payment')
//     ->middleware('stripe');

// Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
//     Route::get('/', 'IndexController@index')
//         ->name('admin.main');
// });

// Route::get('search', 'SearchController@index')
//     ->name('search.index');

// Route::get('language/{locale}', function ($locale) {
//     app()->setLocale($locale);
//     session()->put('locale', $locale);
//     return redirect()->back();
// });




// Route::prefix('home')->group(function () {
//     Route::get('/', [HomeController::class,'index'])->name('home');

//     Route::post('user/update', 'HomeController@update')
//         ->name('user.update');

//     Route::get('change-password', 'Auth\ChangePasswordController@index')
//         ->name('change.password');

//     Route::post('user/change-password', 'Auth\ChangePasswordController@update')
//         ->name('user.update.pass');

//     Route::get('orders', 'HomeController@orders')
//         ->name('home.orders');
// });

Route::get('/', function () {
    return view('index');
})->name('home');
Route::post('/check_verify',[VerifyController::class, 'index'])->name('check_verify');

Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('login', [LoginController::class,'login'])->name('user.login');


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');
Route::post('/send-verification-code', [AuthController::class, 'sendVerificationCode'])->name('send.verification.code');
Route::post('/resend-verification-code', [AuthController::class, 'resendVerifyCode'])->name('resend.verification.code');

Route::get('/verify/{id}/{mobile}', [AuthController::class, 'showVerificationForm'])->name('verify.form');
Route::post('/verify', [AuthController::class, 'verifyCode'])->name('verify.code');
Route::get('/registration-success', function () {
    return view('auth.registration_success');
})->name('registration.success');

Route::get('/mobile-verification', [AuthController::class, 'showMobileVerificationForm'])->name('mobile.verification.form');
Route::post('/mobile-verification', [AuthController::class, 'MobileVerificationSubmit'])->name('MobileVerificationSubmit');



Route::get('/remember-code-entry/{id}/{mobile}', [AuthController::class, 'showRememberCodeForm'])->name('remember.code.form');
Route::post('/remember', [AuthController::class, 'rememberCodeValidate'])->name('verify.remember.submit');


// // Route to finish user Registered
// Route::post('/userRegistered', [RegisterController::class, 'userRegistered'])->name('userRegistered');

// // Route to resend verification code
// Route::post('/resend-verification-code', [RegisterController::class, 'resendVerificationCode'])->name('resend.verification.code');



Route::get('/terms', function () {
    return view('terms');
});


Route::get('/post', function () {
    return view('single-blog');
});

Route::get('/cart', function () {
    $uuid = Str::uuid();
    return view('cart',['uuid' => $uuid]);
})->name('cart');

Route::get('/shipping', function () {
    $uuid = Str::uuid();
    return view('shipping',['uuid' => $uuid]);
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});


Route::get('/blog', function () {
    return view('blog');
})->name('blog');;

Route::get('/favorites', function () {
    return view('favorites');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/payment-return', function () {
    return view('payment-return');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/delivery', function () {
    return view('delivery');
})->name('delivery');

Route::group(['prefix' => 'dashboard'], function () {
    // Define routes that have the 'dashboard' prefix

    Route::get('/', function () {
        // Your dashboard home page logic
        return view('dashboard.dashboard');
    })->name('dashboard.home');

    Route::get('/user-info', function () {
        // Your dashboard home page logic
        return view('dashboard.user-info');
    })->name('dashboard.user-info');

    Route::get('/notifications', function () {
        // Your dashboard home page logic
        return view('dashboard.notifications');
    })->name('dashboard.notifications');

    Route::get('/comments', function () {
        // Your dashboard home page logic
        return view('dashboard.comments');
    })->name('dashboard.comments');

    Route::get('/favorites', function () {
        // Your dashboard home page logic
        return view('dashboard.favorites');
    })->name('dashboard.favorites');

    Route::get('/changepass', function () {
        // Your dashboard home page logic
        return view('dashboard.changepass');
    })->name('dashboard.changepass');

    Route::get('/orders', function () {
        // Your dashboard home page logic
        return view('dashboard.orders');
    })->name('dashboard.orders');

    Route::get('/checks', function () {
        // Your dashboard home page logic
        return view('dashboard.checks');
    })->name('dashboard.checks');

    Route::get('/payment-deadline', function () {
        // Your dashboard home page logic
        return view('dashboard.payment-deadline');
    })->name('dashboard.payment-deadline');

    Route::get('/order', function () {
        // Your dashboard home page logic
        return view('dashboard.order');
    })->name('dashboard.order');

    // Add more routes as needed
});


Livewire::setScriptRoute(function ($handle) {
    return Route::get('/custom/livewire/livewire.js', $handle);
});


Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/custom/livewire/update', $handle);
});


Route::get('/counter', Counter::class);

Route::get('/api/cart/{id}', [ApiController::class, 'getResource']);
