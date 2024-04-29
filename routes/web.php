<?php

use Livewire\Livewire;
use App\Models\Product;
use App\Livewire\Counter;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Livewire\ProductComponent;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\ProductWaitingListController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('login.home');
Route::get('/loginRequire', [HomeController::class,'loginRequire'])->name('loginRequire');

Route::post('/check_verify',[VerifyController::class, 'index'])->name('check_verify');

Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('login', [LoginController::class,'login'])->name('user.login');
Route::get('logout', [LoginController::class,'logout'])->name('logout');

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

Route::get('/blog/{slug}', [PostController::class, 'index'])->name('single.post');
Route::get('/category/{slug?}',[CategoryController::class,'index'])->name('category');
Route::get('/product/{id}',[ProductController::class,'index'])->name('single.product');



Route::get('/terms', function () {
    return view('terms');
});


// auth user access
Route::group(['middleware' => ['auth']],function(){
    Route::get('/shipping', [OrderController::class,'shipping'])->name('shipping');
    Route::get('/cart', [OrderController::class,'showCart'])->name('cart');
    Route::post('/shipping', [OrderController::class,'shippingStore'])->name('shipping.store');
    Route::get('/delivery/{deliveryType?}', [OrderController::class,'delivery'])->name('delivery');
    Route::post('/delivery', [OrderController::class,'storeDelivery'])->name('delivery.store');
    Route::get('/payment/{paymentMethod?}', [OrderController::class,'payment'])->name('payment');
    Route::get('/orderComplete', [OrderController::class,'complete'])->name('order.complete');
} );

Route::get('/wishlist/{id}', [WishlistController::class,'storeWishlist'])->name('storeWishlist');
Route::get('/delete-wishlist/{id}', [WishlistController::class,'delete'])->name('deleteFavorites');
Route::get('/favorites', [WishlistController::class,'index'])->name('favorites');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});


Route::get('/search/category/{query}', function () {
    return view('search-blog');
})->name('category.search');

Route::get('/search/tag/{query}', function () {
    return view('search-blog');
})->name('tag.search');

Route::get('/search/{query}', function () {
    return view('search-blog');
})->name('search');


Route::get('/blog', function () {
    return view('blog');
})->name('blog');
// Route::group(['middleware'=> ['
// when user is not logged in
// if user is logged in, we use dashboard
// in this page we always use cookie instead of database



Route::get('/payment-return', function () {
    return view('payment-return');
})->name('payment-return');








Route::group(['prefix' => 'dashboard','middleware' => ['auth']], function () {
    // Define routes that have the 'dashboard' prefix



    Route::get('/', [UserController::class,'index'])->name('dashboard.home');
    Route::get('/comments', [UserController::class,'comments'])->name('dashboard.comments');
    Route::get('/comment/delete/{id}', [UserController::class,'commentsDelete'])->name('dashboard.comments.delete');
    Route::get('/user-info', [UserController::class,'userInfo'])->name('dashboard.user-info');
    Route::post('/user-info-update', [UserController::class,'userInfoUpdate'])->name('dashboard.user-info.update');
    Route::get('/orders', [UserController::class,'orders'])->name('dashboard.orders');
    Route::get('/order/{id}', [UserController::class,'order'])->name('dashboard.order');
    Route::post('/review', [UserController::class,'review'])->name('dashboard.review.store');
    Route::get('/changepass', [UserController::class,'changePass'])->name('dashboard.change-pass');
    Route::post('/change-password', [UserController::class,'setNewPassword'])->name('dashboard.setNewPassword');
    Route::get('/notifications', [UserController::class,'notifications'])->name('dashboard.notifications');
    Route::get('/favorites', [UserController::class,'favorites'])->name('dashboard.favorites');
    Route::get('/checks', [UserController::class,'checks'])->name('dashboard.checks');
    Route::get('/payment-deadline', [UserController::class,'paymentDeadLine'])->name('dashboard.payment-deadline');
    Route::get('/invoice', [UserController::class,'invoice'])->name('dashboard.invoice');
    Route::post('/sessions/store', [SessionController::class, 'store'])->name('sessions.store');
    Route::post('notifications', [SessionController::class,'save'])->name('dashboard.messages.save');
    Route::get('/product/{id}/add-to-waiting-list', [ProductWaitingListController::class, 'addToWaitingList'])->name('product.waiting-list.add');
    Route::get('/product/{productId}/remove-waiting-list', [ProductWaitingListController::class, 'removeFromWaitingList'])->name('product.waiting-list.remove');

    // Add more routes as needed
});


Livewire::setScriptRoute(function ($handle) {
    return Route::get('/custom/livewire/livewire.js', $handle);
});


Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/custom/livewire/update', $handle);
});


Route::get('/counter', Counter::class);



Route::get('/get-cookie', function () {
    return request()->cookie('language');
});
