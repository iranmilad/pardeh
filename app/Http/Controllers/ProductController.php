<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Traits\DeliveryTimeTrait;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    use DeliveryTimeTrait;
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
        $totalPrice = 0;
        $productId = $params["product"];
        $product = Product::find($productId);

        if ($product) {
            $quantity = $params['quantity'] ?? 1;
            $selectedAttributes = [];

            // استخراج ویژگی‌های انتخاب‌شده
            foreach ($params as $keyItem => $vItem) {
                if (!is_array($vItem) && is_numeric($keyItem)) {
                    $selectedAttributes[$keyItem] = $vItem;
                }
            }

            $independentAttributes = [];
            $dependentAttributes = [];
            $selectedIndependentAttributes = [];
            $selectedDependentAttributes = [];

            // دسته‌بندی ویژگی‌ها به مستقل و وابسته
            foreach ($product->attributes as $attribute) {
                if ($attribute->independent) {
                    $independentAttributes[] = $attribute;
                    if (isset($selectedAttributes[$attribute->id])) {
                        $selectedIndependentAttributes[$attribute->id] = $selectedAttributes[$attribute->id];
                    }
                } else {
                    $dependentAttributes[] = $attribute;
                    if (isset($selectedAttributes[$attribute->id])) {
                        $selectedDependentAttributes[$attribute->id] = $selectedAttributes[$attribute->id];
                    }
                }
            }

            // محاسبه قیمت محصول
            $productPrice = $product->sale_price ?? $product->price;

            // بررسی ویژگی‌های مستقل
            foreach ($selectedIndependentAttributes as $attributeId => $selectedValue) {
                $combination = $product->getIndependentCombinationDetails($attributeId, $selectedValue);
                if ($combination) {
                    $price = $combination->sale_price ?? $combination->price;
                    $productPrice += $price;
                }
            }

            // بررسی ویژگی‌های وابسته
            if (!empty($selectedDependentAttributes)) {
                $combination = $product->getCombinationDetails($selectedDependentAttributes);
                if ($combination) {
                    $price = $combination->sale_price ?? $combination->price;
                    $productPrice += $price;
                }
            }

            // محاسبه قیمت کل
            $totalPrice = $productPrice * $quantity;

            // محاسبه زمان کل انجام کار
            $totalWorkTime = $this->calculateTotalWorkTime($selectedIndependentAttributes, $selectedDependentAttributes, $product);

            // تبدیل زمان انجام کار به روز (هر 24 ساعت = 1 روز)
            $workDays = ceil($totalWorkTime / 24);

            // استفاده از ترايت برای محاسبه تاریخ تحویل
            $deliveryDate = $this->calculateDeliveryDateWithWorkTime(Carbon::now(), $this->baseDeliveryDays, $totalWorkTime);

            // محاسبه تعداد روزهای باقی‌مانده تا زمان تحویل
            $daysUntilDelivery = $this->calculateDaysUntilDelivery($deliveryDate);

            // پاسخ نهایی به همراه تعداد روزهای تکمیل کار
            $response = [
                "name" => $product->title,
                "images" => $product->images->pluck('url')->toArray(),
                "regular_price" => number_format($product->price),
                "sale_price" => number_format($totalPrice),
                "discount" => $product->discountPercentage,
                "delivery_date" => $deliveryDate->toDateString(),
                "time_delivery" => $workDays, // تعداد روزهایی که برای تکمیل کار لازم است
                "days_until_delivery" => $daysUntilDelivery // تعداد روزهای تا زمان تحویل
            ];
        } else {
            $response = ["error" => "Product not found"];
        }

        return response()->json($response);
    }








}
