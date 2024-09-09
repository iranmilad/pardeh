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

            // دسته‌بندی ویژگی‌ها به مستقل و وابسته
            $independentAttributes = [];
            $dependentAttributes = [];
            $selectedIndependentAttributes = [];
            $selectedDependentAttributes = [];

            foreach ($product->attributes as $attribute) {
                if ($attribute->independent) {
                    $independentAttributes[] = $attribute;
                    if (isset($selectedAttributes[$attribute->id])) {
                        $selectedIndependentAttributes[$attribute->id] = $selectedAttributes[$attribute->id];
                    }
                }
                else {
                    $dependentAttributes[] = $attribute;
                    if (isset($selectedAttributes[$attribute->id])) {
                        $selectedDependentAttributes[$attribute->id] = $selectedAttributes[$attribute->id];
                    }
                }
            }

            $productPrice = $product->sale_price ?? $product->price;
            $independentStockAvailable = true;
            $dependentStockAvailable = true;

            // بررسی ویژگی‌های مستقل
            foreach ($selectedIndependentAttributes as $attributeId => $selectedValue) {
                $combination = $product->getIndependentCombinationDetails($attributeId, $selectedValue);

                if ($combination) {
                    $price = $combination->sale_price ?? $combination->price;
                    $productPrice += $price; // اصلاح علامت اضافه‌کردن
                }

                if (!$combination || $combination->stock_quantity <= 0) {
                    $independentStockAvailable = false;
                    break; // اگر هیچ ترکیب مستقلی موجود نبود، از حلقه خارج می‌شود
                }
            }

            // بررسی ویژگی‌های وابسته
            if (!empty($selectedDependentAttributes)) {
                $combination = $product->getCombinationDetails($selectedDependentAttributes);

                if ($combination) {
                    $price = $combination->sale_price ?? $combination->price;
                    $productPrice += $price; // اصلاح علامت اضافه‌کردن
                }

                if (!$combination || $combination->stock_quantity <= 0) {
                    $dependentStockAvailable = false;
                }
            }

            // چک کردن موجودی نهایی بر اساس مستقل و وابسته
            if ($independentStockAvailable && $dependentStockAvailable) {
                // اگر ترکیب‌ها موجود باشند، قیمت‌ها و موجودی را به‌روز رسانی کنید
                $totalPrice = $productPrice * $quantity;

                $response = [
                    "name" => $product->title,
                    "images" => $product->images->pluck('url')->toArray(),
                    "regular_price" => number_format($product->price),
                    "sale_price" => number_format($totalPrice),
                    "discount" => $product->discountPercentage,
                    "time_delivery" => 7
                ];
            } else {
                // اگر هیچ ترکیب مستقلی یا وابسته‌ای موجود نبود، مقدار ناموجود را برگردانید
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
                "error" => "Product not found"
            ];
        }

        return response()->json($response);
    }





}
