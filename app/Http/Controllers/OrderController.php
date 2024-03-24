<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Components\Cart\Cart;
use App\Exceptions\DeliveryApi;
use App\Components\Stripe\Charge;
use App\Components\Money\Currency;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Log;
use App\Components\Delivery\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Exceptions\QuantityOverstated;

class OrderController extends Controller
{

    public function index(){
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

    public function showMiniCart(Request $request){
        $cartCount = 0; // Initialize cart count
        $totalPrice = 0; // Initialize total price
        $items = []; // Initialize cart items array

        // Check if the cart cookie exists
        if ($request->cookie('cart')) {
            // Get the current cart items from the cookie
            $cartItems = json_decode($request->cookie('cart'), true);

            // Iterate through each cart item to calculate the total price
            foreach ($cartItems as $key => $item) {
                // Assuming the product ID is provided as 'product'
                $productId = $item['product'];
                // Retrieve the product from the database
                $product = Product::find($productId);
                if ($product) {



                    // Extract quantity from the item using regular expressions
                    $attribute = $product->attributes()->where('name', 'تعداد')->first();


                    $quantity =  $item[$attribute->id]['تعداد'] ?? 1;

                    $totalPrice += $product->price * $quantity;
                    // Add product details to the items array
                    $items[] = [
                        "id" => $key,
                        "name" => $product->title,
                        "img" => $product->img,
                        "quantity" => $quantity,
                        "total" => number_format($product->price * $quantity), // Calculate total price for each item
                    ];
                }
            }

            // Update the cart count
            $cartCount = count($cartItems);
        }

        $response = [
            "cart" => [
                "count" => $cartCount,
                "total" => number_format($totalPrice), // Format the total price
            ],
            "items" => $items, // Add items to the response
        ];


        return response()->json($response);
    }

    public function removeItemCart(Request $request) {
        $id = $request->input('id');
        $cartCount = 0; // Initialize cart count
        $totalPrice = 0; // Initialize total price
        $items = []; // Initialize cart items array

        // Check if the cart cookie exists
        if ($request->cookie('cart')) {
            // Get the current cart items from the cookie
            $cartItems = json_decode($request->cookie('cart'), true);
            log::alert($cartItems);
            // Check if the item with the specified ID exists in the cart
            if (isset($cartItems[$id])) {
                // Remove the item with the specified ID from the cart
                unset($cartItems[$id]);

                // Update the cart count
                $cartCount = count($cartItems);

                // Iterate through each cart item to calculate the total price
                foreach ($cartItems as $key => $item) {
                    // Assuming the product ID is provided as 'product'
                    $productId = $item['product'];
                    // Retrieve the product from the database
                    $product = Product::find($productId);
                    if ($product) {

                        // Extract quantity from the item using regular expressions
                        $attribute = $product->attributes()->where('name', 'تعداد')->first();

                        $quantity =  $item[$attribute->id]['تعداد'] ?? 1;

                        $totalPrice += $product->price * $quantity;
                        // Add product details to the items array
                        $items[] = [
                            "id" => $key,
                            "name" => $product->title,
                            "img" => $product->img,
                            "quantity" => $quantity,
                            "total" => number_format($product->price * $quantity), // Calculate total price for each item
                        ];
                    }
                }
                if($cartCount>0)
                    $response = [
                        "status" => "success",
                        "message" => "محصول با موفقیت از سبد خرید حذف شد.",
                        "cart" => [
                            "count" => $cartCount,
                            "total" => number_format($totalPrice), // Format the total price
                            "profit" => "0",
                            "discounts" => "0%"
                        ],
                        "items" => $items, // Add items to the response
                    ];
                else{
                    $response = [
                        "status" => "success",
                        "message" => "محصول با موفقیت از سبد خرید حذف شد.",
                        "cart" => array(),
                    ];
                }

                return response()->json($response)->cookie('cart', json_encode($cartItems));
            }
            else {
                // If the item with the specified ID does not exist in the cart
                $response = [
                    "status" => "error",
                    "message" => "محصول در سبد خرید یافت نشد.",
                ];

                // Return the error response
                return response()->json($response);
            }
        }
    }

}
