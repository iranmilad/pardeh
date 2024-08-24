<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index($id){
        //return "Product Number: $id";
        if(is_numeric($id))
            $product = Product::where("id",$id)->first();
        else
            $product = Product::where("title",$id)->first();


        return view('product',compact('product'));
    }


    public function getTotalPrice(Request $request)
    {
        $params = $request->input("param");
        $totalPrice = 0; // Initialize total price
        $attributeNames = [];
        $totalDiscountPrice = 0;

        $productId = $params["product"];
        // Retrieve the product from the database
        $product = Product::find($productId);

        if ($product) {
            $quantity = $params['quantity'] ?? 1;
            $selectedAttributes = [];

            // Parse selected attributes from params
            foreach ($params as $keyItem => $vItem) {
                if (!is_array($vItem) && is_numeric($keyItem)) {
                    $selectedAttributes[$keyItem] = $vItem;
                }
            }

            // Get combination details based on selected attributes
            $combination = $product->getCombinationDetails($selectedAttributes);
            $productPrice = $product->sale_price ?? $product->price ;

            if ($combination && $combination->stock_quantity>0) {
                // If combination exists, use its price and stock
                $price = $combination->sale_price ?? $combination->price;
                $totalPrice =($productPrice + $price) * $quantity;

                $response = [
                    "name" => $product->title,
                    "images" => $product->images->pluck('url')->toArray(),
                    "regular_price" => number_format($product->price + $combination->price),
                    "sale_price" => number_format($productPrice + $price),
                    "discount" => $product->discountPercentage,
                    "time_delivery" => 7
                ];
            }
            else {
                // If no combination found, return an unavailable response
                $response = [
                    "name" => $product->title,
                    "images" => $product->images->pluck('url')->toArray(),
                    "discount" => $product->discountPercentage,
                    "time_delivery" => 8,
                    "unavailable_options" => true,
                ];
            }
        } else {
            // If product is not found, return an error response
            $response = [
                "name" => $product->title,
                "images" => $product->images->pluck('url')->toArray(),
            ];
        }

        return response()->json($response);
    }



}
