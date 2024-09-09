<?php

namespace App\Traits;

use App\Models\OrderItem;
use App\Models\Product;
use App\Models\OrderItemCombination;
use Illuminate\Http\Request;

trait CartHelper
{
    private function updateCartArray(array $cartArray, $item, $quantity = null, $remove = false): array
    {
        // Generate a unique key based on product_id and attributes
        $uniqueKey = $this->generateItemKey($item);

        if ($remove) {
            unset($cartArray[$uniqueKey]);
        } else {
            $cartArray[$uniqueKey] = array_merge($item, ['quantity' => $quantity ?? $item['quantity']]);
        }

        return $cartArray;
    }

    private function generateItemKey($item): string
    {
        // Create a unique key using product_id and serialized attributes
        $productId = $item['product_id'] ?? 'unknown';
        $attributes = isset($item['attributes']) ? serialize($item['attributes']) : '';

        return md5($productId . $attributes);
    }

    private function processProductAttributes(?OrderItem $orderItem, Product $product, array $param): array
    {
        $basePrice = $product->price;
        $baseSalePrice = $product->sale_price ?? $basePrice;
        $independentAttributes = [];
        $dependentAttributes = [];
        $independentPriceAdjustment = 0;
        $independentSalePriceAdjustment = 0;
        $independentStockAvailable = true;
        $dependentPriceAdjustment = 0;
        $dependentSalePriceAdjustment = 0;
        $dependentStockAvailable = true;
        $selectedAttributes = [];

        // Check if the product has attributes
        if (empty($product->attributes)) {
            return $this->getDefaultAttributeResponse();
        }

        // دسته‌بندی ویژگی‌ها به مستقل و وابسته
        foreach ($product->attributes as $attribute) {
            if ($attribute->independent) {
                $independentAttributes[] = $attribute;
            } else {
                $dependentAttributes[] = $attribute;
            }
        }

        // پردازش ویژگی‌های مستقل
        foreach ($independentAttributes as $attribute) {
            $selectedValue = $param[$attribute->id] ?? null;
            if ($selectedValue) {
                $combination = $product->getIndependentCombinationDetails($attribute->id, $selectedValue);
                if ($combination) {
                    $independentPriceAdjustment += $combination->price;
                    $independentSalePriceAdjustment += $combination->sale_price ?? $combination->price;
                    $this->attachCombinationToOrderItem($orderItem, $combination);
                } else {
                    $independentStockAvailable = false;
                    break;
                }
            }
        }

        // پردازش ویژگی‌های وابسته
        foreach ($dependentAttributes as $attribute) {
            $selectedValue = $param[$attribute->id] ?? null;
            if ($selectedValue) {
                $selectedAttributes[$attribute->id] = $selectedValue;
            }
        }

        if (!empty($selectedAttributes)) {
            $combination = $product->getCombinationDetails($selectedAttributes);
            if ($combination) {
                $dependentPriceAdjustment += $combination->price;
                $dependentSalePriceAdjustment += $combination->sale_price ?? $combination->price;
                $this->attachCombinationToOrderItem($orderItem, $combination);
            } else {
                $dependentStockAvailable = false;
            }
        }

        return [
            'independentPriceAdjustment' => $independentPriceAdjustment,
            'independentSalePriceAdjustment' => $independentSalePriceAdjustment,
            'independentStockAvailable' => $independentStockAvailable,
            'dependentPriceAdjustment' => $dependentPriceAdjustment,
            'dependentSalePriceAdjustment' => $dependentSalePriceAdjustment,
            'dependentStockAvailable' => $dependentStockAvailable,
            'selectedAttributes' => $selectedAttributes,
        ];
    }

    private function attachCombinationToOrderItem(?OrderItem $orderItem, $combination): void
    {
        if ($orderItem) {
            OrderItemCombination::create([
                'order_item_id' => $orderItem->id,
                'combination_id' => $combination->id,
            ]);
        }
    }

    private function getDefaultAttributeResponse(): array
    {
        return [
            'independentPriceAdjustment' => 0,
            'independentSalePriceAdjustment' => 0,
            'independentStockAvailable' => true,
            'dependentPriceAdjustment' => 0,
            'dependentSalePriceAdjustment' => 0,
            'dependentStockAvailable' => true,
            'selectedAttributes' => [],
        ];
    }

    private function calculateCartData(array $cartItems): array
    {
        $total = 0;
        $count = 0;
        foreach ($cartItems as $item) {
            $count += $item['quantity'];
            $total += $item['price'] * $item['quantity'];
        }
        return ["count" => $count, "total" => $total];
    }

    private function basketCookie(Request $request): object
    {
        $cartCount = 0;
        $totalPrice = 0;
        $items = [];
        $totalDiscountPrice = 0;

        if ($request->cookie('cart')) {
            $cartItems = json_decode($request->cookie('cart'), true);
            foreach ($cartItems as $key => $cartItem) {
                $productId = $cartItem['product'] ?? null;
                if (!$productId) continue;
                $product = Product::find($productId);

                if (!$product) continue;

                $quantity = $cartItem['quantity'] ?? 1;
                $cartCount += $quantity;

                $attributeData = $this->processProductAttributes(null, $product, $cartItem);

                $independentPriceAdjustment = $attributeData['independentPriceAdjustment'] ?? 0;
                $dependentPriceAdjustment = $attributeData['dependentPriceAdjustment'] ?? 0;
                $independentSalePriceAdjustment = $attributeData['independentSalePriceAdjustment'] ?? 0;
                $dependentSalePriceAdjustment = $attributeData['dependentSalePriceAdjustment'] ?? 0;
                $independentStockAvailable = $attributeData['independentStockAvailable'] ?? true;
                $dependentStockAvailable = $attributeData['dependentStockAvailable'] ?? true;

                $basePrice = $product->price;
                $baseSalePrice = $product->sale_price ?? $basePrice;
                $totalAttributePrice = $independentPriceAdjustment + $dependentPriceAdjustment;
                $totalAttributeSalePrice = $independentSalePriceAdjustment + $dependentSalePriceAdjustment;
                $totalItemPrice = ($baseSalePrice + $totalAttributeSalePrice) * $quantity;
                $totalPrice += $totalItemPrice;
                $items[] = (object)[
                    "id" => $key,
                    "product_id" => $product->id,
                    "name" => $product->title,
                    "img" => asset($product->img),
                    "link" => $product->link,
                    "price" => number_format($basePrice + $independentPriceAdjustment + $dependentPriceAdjustment),
                    "sale_price" => number_format($baseSalePrice + $independentSalePriceAdjustment + $dependentSalePriceAdjustment),
                    "discountPercentage" => $product->discountPercentage,
                    "quantity" => $quantity,
                    "attribute" => array_keys($cartItem),
                    "service" => $product->service,
                    "attributeSeries" => $attributeData['selectedAttributes'] ?? [],
                    "services" => (object)[
                        "sewing" => $product->services()->where('type', 'sewing')->first(),
                        "installer" => $product->services()->where('type', 'installer')->first(),
                        "design" => $product->services()->where('type', 'design')->first(),
                    ],
                    "installer" => $cartItem["installer"] ?? null,
                    "sewing" => $cartItem["sewing"] ?? null,
                    "design" => $cartItem["design"] ?? null,
                    "total" => number_format($totalItemPrice),
                    "unavailable" => !$independentStockAvailable || !$dependentStockAvailable,
                ];
            }
        }

        return (object)[
            "cart" => (object)[
                "count" => $cartCount,
                "total" => number_format($totalPrice),
                "totalPayed" => number_format($totalPrice + $totalDiscountPrice),
            ],
            "items" => $items,
        ];
    }
}
