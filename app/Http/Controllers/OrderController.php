<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Str;
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
use Illuminate\Support\Facades\View;
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
                //generate a random number
                $randomNumber=rand(1000000,9999999);


                // add installer id to exist parent order
                if(isset($param['installer']))
                    $cartItems=$this->editCartArray($cartItems,$param['installer'],'installer',$randomNumber);
                    unset($param["installer"]);
                // add sewing id to exist parent order
                if (isset($param['sewing']))
                    $cartItems=$this->editCartArray($cartItems,$param['sewing'],'sewing',$randomNumber);
                    unset($param["sewing"]);
                // add design id to exist parent order
                if  (isset($param['design']))
                    $cartItems=$this->editCartArray($cartItems,$param['design'],'design',$randomNumber);
                    unset($param["design"]);

                // Append the new item to the cart
                $cartItems[$randomNumber] = $param;


                // Update the cart count
                $cartCount = count($cartItems);
            } else {
                //generate a random number
                $randomNumber=rand(1000000,9999999);

                // Append the new item to the cart
                $cartItems[$randomNumber] = $param;

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
        $attributeNames = [];

        // Check if the cart cookie exists
        if ($request->cookie('cart')) {
            // Get the current cart items from the cookie
            $cartItems = json_decode($request->cookie('cart'), true);

            // Iterate through each cart item to calculate the total price
            foreach ($cartItems as $key => $cartItem) {
                if(!isset($cartItem['product']))
                continue;
                $totalAttributePrice = 0;
                // Assuming the product ID is provided as 'product'
                $productId = $cartItem['product'];
                // Retrieve the product from the database
                $product = Product::find($productId);
                if ($product) {


                    $all_attribute = $product->attributes;
                    // Extract quantity from the item using regular expressions
                    $attribute = $all_attribute->where('name', 'تعداد')->first();
                    $quantity =  $cartItem[$attribute->id]['تعداد'] ?? 1;
                    $cartCount += $quantity;
                    // Extract attribute items for the product
                    $productAttributeItems = $all_attribute->pluck('items', 'id')->toArray();

                    $attr=null;
                    foreach($cartItem as $keyItem=>$vItem){
                        if (!is_array($vItem) && is_numeric($keyItem)) {
                            if (isset($productAttributeItems[$keyItem]) && is_array($productAttributeItems[$keyItem])) {
                                //log::info(collect($productAttributeItems[$keyItem])->where('name', $vItem)->first());
                                $attr = (object)collect($productAttributeItems[$keyItem])->where('name', $vItem)->first();
                                // $total_items=$all_attribute->where('id',$keyItem)->first();
                                // $attr = $total_items->findItemByName($vItem);

                                if($attr){
                                    $priceAttr = $attr->sale_price ?? $attr->price ;
                                    if (!is_null($priceAttr)){
                                        $attributeNames[] = $attr->name;
                                        $totalAttributePrice += $priceAttr * $quantity;
                                        //log::info($attr->name);
                                    }
                                }

                            }

                        }

                    }

                    // Check if the product has a sale price
                    $price = $product->sale_price ?? $product->price;

                    $totalPrice += $price * $quantity + $totalAttributePrice ;
                    // Add product details to the items array
                    $items[] = [
                        "id" => $key,
                        "name" => $product->title,
                        "img" => $product->img,
                        "link" => $product->link,
                        "quantity" => $quantity,
                        "total" => number_format( ($product->sale_price ?? $product->price ) * $quantity + $totalAttributePrice), // Calculate total price for each item
                    ];
                }

            }

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

            // Check if the item with the specified ID exists in the cart
            if (isset($cartItems[$id])) {

                // add installer id to exist parent order
                if(isset($cartItems[$id]['installer']))
                    $this->editCartArray($cartItems,$cartItems[$id]['installer'],'installer',null);
                // add sewing id to exist parent order
                if (isset($cartItems[$id]['sewing']))
                    $this->editCartArray($cartItems,$cartItems[$id]['sewing'],'sewing',null);
                // add design id to exist parent order
                if  (isset($cartItems[$id]['design']))
                    $this->editCartArray($cartItems,$cartItems[$id]['design'],'design',null);


                // Remove the item with the specified ID from the cart
                unset($cartItems[$id]);


                // Iterate through each cart item to calculate the total price
                foreach ($cartItems as $key => $cartItem) {
                    // Assuming the product ID is provided as 'product'
                    $productId = $cartItem['product'];
                    // Retrieve the product from the database
                    $product = Product::find($productId);

                    $totalAttributePrice = 0;

                    if ($product) {


                        $all_attribute = $product->attributes;
                        // Extract quantity from the item using regular expressions
                        $attribute = $all_attribute->where('name', 'تعداد')->first();
                        $quantity =  $cartItem[$attribute->id]['تعداد'] ?? 1;
                        $cartCount += $quantity;
                        // Extract attribute items for the product
                        $productAttributeItems = $all_attribute->pluck('items', 'id')->toArray();

                        $attr=null;
                        foreach($cartItem as $keyItem=>$vItem){
                            if (!is_array($vItem) && is_numeric($keyItem)) {
                                if (isset($productAttributeItems[$keyItem]) && is_array($productAttributeItems[$keyItem])) {
                                    //log::info(collect($productAttributeItems[$keyItem])->where('name', $vItem)->first());
                                    $attr = (object)collect($productAttributeItems[$keyItem])->where('name', $vItem)->first();
                                    // $total_items=$all_attribute->where('id',$keyItem)->first();
                                    // $attr = $total_items->findItemByName($vItem);

                                    if($attr){
                                        $priceAttr = $attr->sale_price ?? $attr->price ;
                                        if (!is_null($priceAttr)){
                                            $attributeNames[] = $attr->name;
                                            $totalAttributePrice += $priceAttr * $quantity;
                                            //log::info($attr->name);
                                        }
                                    }

                                }

                            }

                        }

                        // Check if the product has a sale price
                        $price = $product->sale_price ?? $product->price;

                        $totalPrice += $price * $quantity + $totalAttributePrice ;
                        // Add product details to the items array
                        $items[] = [
                            "id" => $key,
                            "name" => $product->title,
                            "img" => $product->img,
                            "link" => $product->link,
                            "quantity" => $quantity,
                            "total" => number_format( ($product->sale_price ?? $product->price ) * $quantity + $totalAttributePrice), // Calculate total price for each item
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

    public function removeAllCart(Request $request) {
        $response = [
            "status" => "success",
            "message" => "همه محصولات با موفقیت از سبد خرید حذف شد.",
        ];

        // Check if the cart cookie exists
        if ($request->cookie('cart')) {
            // Remove the cart cookie by setting it to null
            return response()->json($response)->cookie('cart', null);
        }

        return response()->json($response);
    }

    public function updateCart(Request  $request){
        // استخراج اطلاعات محصول از درخواست
        $id = $request->input('id');
        $count = $request->input('count');

        $cartCount = 0; // Initialize cart count
        $totalPrice = 0; // Initialize total price
        $items = []; // Initialize cart items array
        $attributeNames = [];

        // استخراج اطلاعات کوکی سبد خرید از درخواست
        $cookieData = json_decode($request->cookie('cart'), true);

        // بررسی و به‌روزرسانی تعداد محصول در سبد خرید
        if (isset($cookieData[$id])) {
            $cartItem = $cookieData[$id];
            // Assuming the product ID is provided as 'product'
            $productId = $cartItem['product'];
            // Retrieve the product from the database
            $product = Product::find($productId);

            if ($product) {


                $all_attribute = $product->attributes;
                // Extract quantity from the item using regular expressions
                $attribute = $all_attribute->where('name', 'تعداد')->first();
                $quantity =  $cartItem[$attribute->id]['تعداد'] ?? 1;

                $cookieData[$id][$attribute->id]['تعداد'] = $count;

                // add installer id to exist parent order
                if($cookieData[$id]['installer']){
                    unset($cookieData[$cookieData[$id]['installer']]);
                    unset( $cookieData[$id]['installer']);
                }

                // add sewing id to exist parent order
                if (isset($cookieData[$id]['sewing'])){
                    unset($cookieData[$cookieData[$id]['sewing']]);
                    unset($cookieData[$id]['sewing']);
                }

                // add design id to exist parent order
                if  (isset($cookieData[$id]['design'])){
                    unset($cookieData[$cookieData[$id]['design']]);
                    unset($cookieData[$id]['design']);
                }



            }

            $cartItems = $cookieData;

            // Iterate through each cart item to calculate the total price
            foreach ($cartItems as $key => $cartItem) {
                if(!isset($cartItem['product']))
                continue;
                $totalAttributePrice = 0;
                // Assuming the product ID is provided as 'product'
                $productId = $cartItem['product'];
                // Retrieve the product from the database
                $product = Product::find($productId);
                if ($product) {


                    $all_attribute = $product->attributes;
                    // Extract quantity from the item using regular expressions
                    $attribute = $all_attribute->where('name', 'تعداد')->first();
                    $quantity =  $cartItem[$attribute->id]['تعداد'] ?? 1;
                    $cartCount += $quantity;
                    // Extract attribute items for the product
                    $productAttributeItems = $all_attribute->pluck('items', 'id')->toArray();

                    $attr=null;
                    foreach($cartItem as $keyItem=>$vItem){
                        if (!is_array($vItem) && is_numeric($keyItem)) {
                            if (isset($productAttributeItems[$keyItem]) && is_array($productAttributeItems[$keyItem])) {
                                //log::info(collect($productAttributeItems[$keyItem])->where('name', $vItem)->first());
                                $attr = (object)collect($productAttributeItems[$keyItem])->where('name', $vItem)->first();
                                // $total_items=$all_attribute->where('id',$keyItem)->first();
                                // $attr = $total_items->findItemByName($vItem);

                                if($attr){
                                    $priceAttr = $attr->sale_price ?? $attr->price ;
                                    if (!is_null($priceAttr)){
                                        $attributeNames[] = $attr->name;
                                        $totalAttributePrice += $priceAttr * $quantity;
                                        //log::info($attr->name);
                                    }
                                }

                            }

                        }

                    }

                    // Check if the product has a sale price
                    $price = $product->sale_price ?? $product->price;

                    $totalPrice += $price * $quantity + $totalAttributePrice ;
                    // Add product details to the items array
                    $items[] = [
                        "id" => $key,
                        "name" => $product->title,
                        "img" => $product->img,
                        "link" => $product->link,
                        "quantity" => $quantity,
                        "total" => number_format( ($product->sale_price ?? $product->price ) * $quantity + $totalAttributePrice), // Calculate total price for each item
                    ];
                }

            }

        }

        $response = [
            "cart" => [
                "count" => $cartCount,
                "total" => number_format($totalPrice), // Format the total price
            ],
            "items" => $items, // Add items to the response
        ];

        return response()->json($response)->cookie('cart', json_encode($cookieData));

    }

    public function getCartItemCount(Request $request)
    {
        $cartCount = 0;

        if ($request->cookie('cart')) {
            $cartItems = json_decode($request->cookie('cart'), true);
            // Iterate through each cart item to calculate the total price
            foreach ($cartItems as $key => $cartItem) {
                if(!isset($cartItem['product']))
                continue;
                // Assuming the product ID is provided as 'product'
                $productId = $cartItem['product'];
                // Retrieve the product from the database
                $product = Product::find($productId);
                if ($product) {


                    $all_attribute = $product->attributes;
                    // Extract quantity from the item using regular expressions
                    $attribute = $all_attribute->where('name', 'تعداد')->first();
                    $quantity =  $cartItem[$attribute->id]['تعداد'] ?? 1;
                    $cartCount += $quantity;

                }

            }

        }

        return $cartCount;

    }

    public function showCart(Request $request){
        $cartCount = 0; // Initialize cart count
        $totalPrice = 0; // Initialize total price
        $items = []; // Initialize cart items array
        $attributeNames = [];
        $totalDiscountPrice =0;
        // Check if the cart cookie exists
        if ($request->cookie('cart')) {
            // Get the current cart items from the cookie
            $cartItems = json_decode($request->cookie('cart'), true);

            // Iterate through each cart item to calculate the total price
            foreach ($cartItems as $key => $cartItem) {
                if(!isset($cartItem['product']))
                continue;
                $totalAttributePrice = 0;
                $totalAttributeSalePrice =0;

                // Assuming the product ID is provided as 'product'
                $productId = $cartItem['product'];
                // Retrieve the product from the database
                $product = Product::find($productId);


                if ($product) {

                    $all_attribute = $product->attributes;
                    // Extract quantity from the item using regular expressions
                    $attribute = $all_attribute->where('name', 'تعداد')->first();
                    $quantity =  $cartItem[$attribute->id]['تعداد'] ?? 1;
                    $cartCount += $quantity;
                    // Extract attribute items for the product
                    $productAttributeItems = $all_attribute->pluck('items', 'id')->toArray();

                    $attr=null;
                    foreach($cartItem as $keyItem=>$vItem){
                        if (!is_array($vItem) && is_numeric($keyItem)) {
                            if (isset($productAttributeItems[$keyItem]) && is_array($productAttributeItems[$keyItem])) {

                                $attr = (object)collect($productAttributeItems[$keyItem])->where('name', $vItem)->first();


                                if($attr){
                                    $priceAttr = $attr->sale_price ?? $attr->price ;
                                    if (!is_null($priceAttr)){
                                        $attributeNames[] = $attr->name;
                                        $totalAttributeSalePrice += $priceAttr;
                                        $totalAttributePrice += $attr->price ;
                                    }
                                }

                            }

                        }

                    }

                    // Check if the product has a sale price
                    $price = $product->sale_price ?? $product->price;

                    $totalPrice += ($price + $totalAttributeSalePrice ) * $quantity ;
                    // Add product details to the items array
                    $items[] = (object)[
                        "id" => $key,
                        "name" => $product->title,
                        "img" => $product->img,
                        "link" => $product->link,
                        "price" => number_format($product->price + $totalAttributePrice),
                        "sale_price"  => number_format($product->sale_price + $totalAttributeSalePrice),
                        "discountPercentage" => $product->discountPercentage,
                        "quantity" => $quantity,
                        "attribute" => $attributeNames,
                        "service" => $product->service,
                        "services" =>(object) [
                            "sewing" => $product->services()->where('type', 'sewing')->first(),
                            "installer" => $product->services()->where('type', 'installer')->first(),
                            "design" => $product->services()->where('type', 'design')->first(),
                        ],
                        "installer" => $cartItem["installer"] ?? null,
                        "sewing" => $cartItem["sewing"] ?? null,
                        "design" => $cartItem["design"] ?? null,
                        "total" => number_format( ($product->sale_price ?? $product->price + $totalAttributeSalePrice ) * $quantity  ), // Calculate total price for each item
                    ];
                }

            }

        }

        $uuid = Str::uuid();

        $orders =(object) [
            "cart" =>(object) [
                "count" => $cartCount,
                "total" => number_format($totalPrice), // Format the total price

                "totalPayed" => number_format($totalPrice + $totalDiscountPrice),
            ],
            "items" => $items, // Add items to the response
        ];
        //dd($orders);

        return view('cart',compact('uuid','orders'));
    }

    public function cartItemDetail(Request $request,$id){

        $cartCount = 0; // Initialize cart count
        $totalPrice = 0; // Initialize total price
        $data =[]; // Data will be sent back if item is found
        $attributeNames =[];

        // Check if the cart cookie exists
        if ($request->cookie('cart')) {
            // Get the current cart items from the cookie
            $cartItems = json_decode($request->cookie('cart'), true);

            // Check if the item with the specified ID exists in the cart
            if (isset($cartItems[$id])) {
                $cartItem = $cartItems[$id];
                $productId = $cartItem['product'];
                // Retrieve the product from the database
                $product = Product::find($productId);
                if ($product) {

                    $totalAttributePrice = 0;
                    $totalAttributeSalePrice =0;

                    $all_attribute = $product->attributes;
                    // Extract quantity from the item using regular expressions
                    $attribute = $all_attribute->where('name', 'تعداد')->first();
                    $quantity =  $cartItem[$attribute->id]['تعداد'] ?? 1;
                    $cartCount += $quantity;
                    // Extract attribute items for the product
                    $productAttributeItems = $all_attribute->pluck('items', 'id')->toArray();

                    $attr=null;
                    foreach($cartItem as $keyItem=>$vItem){
                        if (!is_array($vItem) && is_numeric($keyItem)) {
                            if (isset($productAttributeItems[$keyItem]) && is_array($productAttributeItems[$keyItem])) {

                                $attr = (object)collect($productAttributeItems[$keyItem])->where('name', $vItem)->first();


                                if($attr){
                                    $priceAttr = $attr->sale_price ?? $attr->price ;
                                    if (!is_null($priceAttr)){
                                        $parentAttribute = $all_attribute->where('id', $keyItem)->first();
                                        $attributeNames[] = [$parentAttribute->name => $attr->name];
                                        $totalAttributeSalePrice += $priceAttr;
                                        $totalAttributePrice += $attr->price ;
                                    }
                                }

                            }

                        }

                    }

                    // Check if the product has a sale price
                    $price = $product->sale_price ?? $product->price;

                    $totalPrice += ($price + $totalAttributeSalePrice ) * $quantity ;
                    // Add product details to the items array

                    $data = [
                        'img' => $product->img,
                        'title' => $product->title,
                        "price" => number_format($product->price + $totalAttributePrice),
                        "sale_price"  => number_format($product->sale_price + $totalAttributeSalePrice),
                        'discounted_price' => number_format($product->sale_price + $totalAttributeSalePrice), // 10.99 - (10.99 * 0.2) = 8.79
                        'discount' => $product->discountPercentage,
                        'options' => $attributeNames,
                    ];


                }

            }
        }



        // Render the Blade view
        $html = View::make('components/cart-details', $data)->render();

        // Return the HTML as an API response
        return response()->json(['html' => $html]);
    }

    public function shipping(Request $request){

        $cartCount = 0; // Initialize cart count
        $totalPrice = 0; // Initialize total price
        $items = []; // Initialize cart items array
        $attributeNames = [];
        $totalDiscountPrice =0;
        // Check if the cart cookie exists
        if ($request->cookie('cart')) {
            // Get the current cart items from the cookie
            $cartItems = json_decode($request->cookie('cart'), true);

            // Iterate through each cart item to calculate the total price
            foreach ($cartItems as $key => $cartItem) {
                if(!isset($cartItem['product']))
                continue;
                $totalAttributePrice = 0;
                $totalAttributeSalePrice =0;

                // Assuming the product ID is provided as 'product'
                $productId = $cartItem['product'];
                // Retrieve the product from the database
                $product = Product::find($productId);


                if ($product) {

                    $all_attribute = $product->attributes;
                    // Extract quantity from the item using regular expressions
                    $attribute = $all_attribute->where('name', 'تعداد')->first();
                    $quantity =  $cartItem[$attribute->id]['تعداد'] ?? 1;
                    $cartCount += $quantity;
                    // Extract attribute items for the product
                    $productAttributeItems = $all_attribute->pluck('items', 'id')->toArray();

                    $attr=null;
                    foreach($cartItem as $keyItem=>$vItem){
                        if (!is_array($vItem) && is_numeric($keyItem)) {
                            if (isset($productAttributeItems[$keyItem]) && is_array($productAttributeItems[$keyItem])) {

                                $attr = (object)collect($productAttributeItems[$keyItem])->where('name', $vItem)->first();


                                if($attr){
                                    $priceAttr = $attr->sale_price ?? $attr->price ;
                                    if (!is_null($priceAttr)){
                                        $attributeNames[] = $attr->name;
                                        $totalAttributeSalePrice += $priceAttr;
                                        $totalAttributePrice += $attr->price ;
                                    }
                                }

                            }

                        }

                    }

                    // Check if the product has a sale price
                    $price = $product->sale_price ?? $product->price;

                    $totalPrice += ($price + $totalAttributeSalePrice ) * $quantity ;
                    // Add product details to the items array
                    $items[] = (object)[
                        "id" => $key,
                        "name" => $product->title,
                        "img" => $product->img,
                        "link" => $product->link,
                        "price" => number_format($product->price + $totalAttributePrice),
                        "sale_price"  => number_format($product->sale_price + $totalAttributeSalePrice),
                        "discountPercentage" => $product->discountPercentage,
                        "quantity" => $quantity,
                        "attribute" => $attributeNames,
                        "service" => $product->service,
                        "services" =>(object) [
                            "sewing" => $product->services()->where('type', 'sewing')->first(),
                            "installer" => $product->services()->where('type', 'installer')->first(),
                            "design" => $product->services()->where('type', 'design')->first(),
                        ],
                        "installer" => $cartItem["installer"] ?? null,
                        "sewing" => $cartItem["sewing"] ?? null,
                        "design" => $cartItem["design"] ?? null,
                        "total" => number_format( ($product->sale_price ?? $product->price + $totalAttributeSalePrice ) * $quantity  ), // Calculate total price for each item
                    ];
                }

            }

        }

        $uuid = Str::uuid();

        $orders =(object) [
            "cart" =>(object) [
                "count" => $cartCount,
                "total" => number_format($totalPrice), // Format the total price

                "totalPayed" => number_format($totalPrice + $totalDiscountPrice),
            ],
            "items" => $items, // Add items to the response
        ];
        //dd($orders);


        $uuid = Str::uuid();
        return view('shipping',compact('uuid','orders'));
    }

    private function editCartArray($cartItems,$id,$newKey,$newValue) : array
    {

        if ($cartItems[$id]) {
            if(!is_null($newValue)){
                // اضافه کردن کلید و مقدار جدید به ردیف فعلی
                $cartItems[$id][$newKey] = $newValue;
            }
            else{
                unset($cartItems[$id][$newKey]);
            }
        }

        return $cartItems;
    }

}
