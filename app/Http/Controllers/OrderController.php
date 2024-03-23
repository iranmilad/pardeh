<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\Components\Cart\Cart;
use App\Exceptions\DeliveryApi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Components\Stripe\Charge;
use App\Components\Money\Currency;
use App\Http\Requests\OrderRequest;
use App\Components\Delivery\Address;
use App\Exceptions\QuantityOverstated;

class OrderController extends Controller
{


    public function index()
    {
        return view('order');
    }


    public function addToCart(Request $request){

        //$request is form parameter example data
        //param[466][طول]: 0
        // param[546]: سه ساله
        // param[586]: بیرونی
        // param[626]: داخلی
        // param[666]: کتان مخمل
        // param[706][تعداد]: 1
        // param[746]: pink

        if (!Auth::check()) {

            $param = $request->input('param');
            $cartCount = 0; // Initialize cart count

            // Check if the cart cookie exists
            if ($request->cookie('cart')) {
                // Get the current cart items from the cookie
                $cartItems = json_decode($request->cookie('cart'), true);

                // Append the new item to the cart
                $cartItems[] = $param;

                // Update the cart count
                $cartCount = count($cartItems);
            } else {
                // If the cart cookie doesn't exist, create a new array with the new item
                $cartItems = [$param];
                $cartCount = 1; // Update the cart count
            }

            // Store the updated cart items in the cookie
            return response()->json([
                "status" => "success",
                "message" => "محصول با موفقیت به سبد خرید اضافه شد.",
                "cart" => [
                    "count" => $cartCount,
                ],
            ])->cookie('cart', json_encode($cartItems));
        }
        else{
            // Handle authenticated user
        }
    }

}
