<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

use Illuminate\Support\Facades\Log;
use App\Models\OrderItemCombination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Traits\DeliveryTimeTrait;

class OrderController extends Controller
{
    use DeliveryTimeTrait;

    public function index()
    {
        return view('order');
    }
    public function addToCart(Request $request)
    {
        $param = $request->input('param');
        return Auth::check() ? $this->handleAuthenticatedAddToCart($request, $param) : $this->handleGuestAddToCart($request, $param);
    }
    public function showMiniCart(Request $request)
    {
        //$orders = $this->getAuthenticatedMiniCart($request);
        //$orders = $this->getGuestMiniCart($request);
        $orders = Auth::check() ? $this->getAuthenticatedMiniCart($request) : $this->getGuestMiniCart($request);
        return response()->json($orders);
    }
    public function removeItemCart(Request $request)
    {
        $id = $request->input('id');
        return Auth::check() ? $this->removeItemAuthenticated($id) : $this->removeItemGuest($request, $id);
    }
    public function removeAllCart(Request $request)
    {
        $response = ["status" => "success", "message" => "All items removed from cart."];
        return Auth::check() ? $this->removeAllAuthenticatedCart() : $this->removeAllGuestCart($request, $response);
    }
    public function updateCart(Request $request)
    {
        $id = $request->input('id');
        $count = $request->input('count');
        return Auth::check() ? $this->updateCartAuthenticated($id, $count) : $this->updateCartGuest($request, $id, $count);
    }
    public function getCartItemCount(Request $request)
    {
        //return $this->getGuestCartItemCount($request);
        return Auth::check() ? $this->getAuthenticatedCartItemCount() : $this->getGuestCartItemCount($request);
    }
    public function showCart(Request $request)
    {
        $orders = $this->getAuthenticatedOrder();
        return view('cart', compact('orders'));
    }
    public function cartItemDetail(Request $request, $id)
    {
        $user = Auth::user();
        $order = Order::where(['user_id' => $user->id, 'status' => 'basket'])->latest()->first(); // آخرین سفارش سبد خرید کاربر

        // دریافت آیتم‌ها
        $orders = $this->basket($order);

        $data = null;

        foreach($orders->items as $item){
            if($item->id == $id){
                $data = [
                    'name' => $item->name,
                    'price' => $item->price,
                    'sale_price' => $item->sale_price,
                    'discountPercentage' => $item->discountPercentage,
                    'img' => $item->img, // اضافه کردن مقدار img
                    'options' => $item->options
                ];
            }
        }


        if (!$data) {
            return response()->json(['html' => 'Item not found'], 404);
        }

        // رندر ویو و ارسال به صورت API response
        $html = View::make('components/cart-details', $data)->render();

        return response()->json(['html' => $html]);
    }


    public function shipping(Request $request)
    {
        $user = Auth::user();
        $orders = $this->getAuthenticatedOrder();
        return view('shipping', compact('orders', 'user'));
    }

    public function shippingStore(Request $request)
    {
        $validatedData = $request->validate($this->shippingValidationRules());
        $order = $this->getAuthenticatedOrder();
        if ($order) {
            $this->store($order, $validatedData);
            $orders = $order->basket();
            return redirect()->route("delivery", compact('orders'));
        }
        return redirect()->route('shipping');
    }

    public function delivery(Request $request, $deliveryType = null)
    {
        $order = $this->getAuthenticatedOrder();

        if ($order) {
            $order->deliveryType = $deliveryType ?? 'store_delivery';
            $order->save();

            // سبد خرید را دریافت کنید
            $basket = $order->basket();

            // زمان‌های موجود را با توجه به سبد محاسبه کنید
            $availableTime = $this->getAvailableTimeWithBasket($basket);

            $orders = $order;
            return view('delivery', compact('orders', 'availableTime'));
        }

        return view('shipping', compact('user', 'orders'));
    }

    public function storeDelivery(Request $request)
    {
        $fullDate = explode(' ', $request->input('time'));
        $date = $fullDate[0];
        $time = $fullDate[1];
        $order = $this->getAuthenticatedOrder();
        if ($order) {
            $order->deliveryType = $request->input('deliveryType');
            $order->shipping_price = $this->deliveryCost($order);
            $order->delivery_date = Jalalian::fromFormat('Y/m/d', $date)->toCarbon()->toDateString();
            $order->delivery_time = $time;
            $order->save();
            $orders = $order->basket();
            return redirect()->route("payment");
        }
        return view('shipping', compact('user', 'orders'));
    }

    public function payment(Request $request, $paymentMethod = null)
    {
        $user = Auth::user();
        $order = $this->getAuthenticatedOrder();
        if ($order) {
            $order->paymentMethod = $this->determinePaymentMethod($paymentMethod);
            $order->save();
            $orders = $order;
            return view('payment', compact('user', 'orders'));
        }
        return redirect()->route('shipping');
    }
    public function complete(Request $request)
    {
        $order = $this->getAuthenticatedOrder();
        if ($order) { // Handle order completion logic
            return redirect("https://bankmelat.ir");
        }
        return redirect()->route('shipping');
    }
    private function store($order, $validatedData)
    {
        $data = ['customer_name' => $validatedData['first_name'] . ' ' . $validatedData['last_name'], 'customer_email' => $validatedData['email'], 'customer_phone_number' => $validatedData['mobile'], 'shipping_country' => $validatedData['country'], 'shipping_province' => $validatedData['province'], 'shipping_city' => $validatedData['city'], 'shipping_address' => $validatedData['address'], 'shipping_postal_code' => $validatedData['postal_code'], 'shipping_phone' => $validatedData['mobile'],];
        if (isset($validatedData['sendtoanotheraddress']) && $validatedData['sendtoanotheraddress']) {
            $data['customer_name'] = $validatedData['shipping_first_name'] . ' ' . $validatedData['shipping_last_name'];
            $data['shipping_phone'] = $validatedData['shipping_mobile'];
            $order->is_self_delivery = false;
        } else {
            $order->is_self_delivery = true;
        }
        $order->fill($data);
        $order->save();
        return $order->id;
    }
    private function firstStore()
    {

        $order = new Order();
        $user = Auth::user();
        $order->fill(['user_id' => $user->id, 'is_self_delivery' => true, 'customer_phone_number' => $user->mobile, 'customer_name' => $user->first_name . ' ' . $user->last_name,]);
        $order->save();

        return $order->id;
    }
    private function transferCookie(Request $request, $orderId)
    {
        $orders = $this->basketCookie($request);
        $cartCount = 0;
        $totalPrice = 0;
        $totalDiscountPrice = 0;

        // Get the current cookie data
        $cartItems = $request->cookie('cart') ? json_decode($request->cookie('cart'), true) : [];

        foreach ($orders->items as $item) {
            // Check if the item already exists in the database
            if (!OrderItem::where('id', $item->id)->exists()) {
                // Convert formatted strings to plain numbers
                $price = floatval(str_replace(',', '', $item->price));
                $salePrice = floatval(str_replace(',', '', $item->sale_price));
                $total = floatval(str_replace(',', '', $item->total));

                // Create the OrderItem
                $orderItem = OrderItem::create([
                    'id' => $item->id,
                    'order_id' => $orderId,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'installer' => $item->installer ?? null,
                    'designer' => $item->designer ?? null,
                    'sewing' => $item->sewing ?? null,
                    'price' => $price,
                    'sale_price' => $salePrice,
                    'total' => $total,
                ]);

                // Retrieve the product to process attributes
                $product = Product::find($item->product_id);

                if ($product) {
                    // Process product attributes
                    $attributes = $this->processProductAttributes($item->id, $product, $item->attribute);

                    // Update cart count and total prices
                    $cartCount += $item->quantity;
                    $totalPrice += $attributes['independentPriceAdjustment'] + $attributes['dependentPriceAdjustment'];
                    $totalDiscountPrice += $attributes['independentSalePriceAdjustment'] + $attributes['dependentSalePriceAdjustment'];
                }

                // Remove the item from the cookie
                unset($cartItems[$item->id]);
            }
        }

        // Prepare the response
        $response = response()->json(compact('cartCount', 'totalPrice', 'totalDiscountPrice'));

        // Update the cookie with the remaining items
        $response->cookie('cart', json_encode($cartItems), 60);

        return $response;
    }
    private function basket($order)
    {
        return $order->basket();
    }
    private function basketCookie($request)
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
                $basePrice = $product->price;
                $baseSalePrice = $product->sale_price ?? $basePrice;
                $totalAttributePrice = $attributeData['independentPriceAdjustment'] + $attributeData['dependentPriceAdjustment'];
                $totalAttributeSalePrice = $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment'];

                $totalItemPrice = ($baseSalePrice + $totalAttributeSalePrice) * $quantity;
                $totalPrice += $totalItemPrice;
                $items[] = (object)["id" => $key, "product_id" => $product->id, "name" => $product->title, "img" => asset($product->img), "link" => $product->link, "price" => number_format($basePrice + $attributeData['independentPriceAdjustment'] + $attributeData['dependentPriceAdjustment']), "sale_price" => number_format($baseSalePrice + $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment']), "discountPercentage" => $product->discountPercentage, "quantity" => $quantity, "attribute" => $cartItem, "service" => $product->service, "attributeSeries" => $attributeData['selectedAttributes'], "services" => (object)["sewing" => $product->services()->where('type', 'sewing')->first(), "installer" => $product->services()->where('type', 'installer')->first(), "design" => $product->services()->where('type', 'design')->first(),], "installer" => $cartItem["installer"] ?? null, "sewing" => $cartItem["sewing"] ?? null, "design" => $cartItem["design"] ?? null, "total" => number_format($totalItemPrice), "unavailable" => !$attributeData['independentStockAvailable'] || !$attributeData['dependentStockAvailable'],];
            }
        }
        $orders = (object)["cart" => (object)["count" => $cartCount, "total" => number_format($totalPrice), "totalPayed" => number_format($totalPrice + $totalDiscountPrice),], "items" => $items,];
        return $orders;
    }
    private function deliveryCost($order): int
    {
        return $order->deliveryType === 'home_delivery' ? 250000 : 0;
    }
    private function calculateTotalTime($order): int
    {
        $totalTime = 0;
        $cartItems = $order->orderItems;
        foreach ($cartItems as $cartItem) {
            $product = $cartItem->product;
            if ($product) {
                $attributes = $cartItem->orderAttributeItems;
                $quantity = $cartItem->quantity ?? 1;
                foreach ($attributes as $attribute) {
                    $attributeItem = $attribute->attributeItem;
                    if ($attributeItem) {
                        $totalTime += ($attributeItem->unit_factor === "countable") ? $attributeItem->getTotalTime($attribute->value) : $attributeItem->getTotalTime();
                    }
                }
            }
        }
        return $totalTime;
    }
    private function CalculationNearestTime() {}

    private function calculateDueDates(array $summedAmounts): array
    {
        $currentDate = Jalalian::now(); // آرایه‌ای برای نگهداری تاریخ‌های سررسید و مقادیر
        $totalTimeline = [];
        foreach ($summedAmounts as $month => $amount) { // محاسبه تاریخ سررسید بر اساس فاصله ماه و تاریخ فعلی
            $dueDate = $currentDate->addMonths($month); // اضافه کردن تاریخ و مقدار به timeline کلی
            $totalTimeline[$dueDate->format('Y/m/d')] = (object) ['month' => $dueDate->format('Y/m/d'), 'amount' => $amount,];
        }
        return $totalTimeline;
    }
    // Helper Methods
    private function updateCartArray(array $cartItems, array $params, $randomNumber, $remove = false) {
        if (isset($params['installer'])) {
            $cartItems = $this->editCartArray($cartItems, $params['installer'], 'installer', $remove ? null : $randomNumber);
            unset($params["installer"]);
        }

        if (isset($params['sewing'])) {
            $cartItems = $this->editCartArray($cartItems, $params['sewing'], 'sewing', $remove ? null : $randomNumber);
            unset($params["sewing"]);
        }

        if (isset($params['design'])) {
            $cartItems = $this->editCartArray($cartItems, $params['design'], 'design', $remove ? null : $randomNumber);
            unset($params["design"]);
        }

        if (!$remove) {
            $cartItems[$randomNumber] = $params;
        }

        return $cartItems;
    }
    private function processProductAttributes(string $orderItemId=null, Product $product, array $param)
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
        $selectedDependentAttributes = [];


        foreach ($product->attributes as $attribute) {
            if ($attribute->independent) {
                $independentAttributes[] = $attribute;
            } else {
                $dependentAttributes[] = $attribute;
            }
        } // Process independent attributes

        foreach ($independentAttributes as $attribute) {
            $selectedValue = $param[$attribute->id] ?? null;


            if ($selectedValue) {
                $combination = $product->getIndependentCombinationDetails($attribute->id, $selectedValue);

                if ($combination) {

                    $independentPriceAdjustment += $combination->price;
                    $independentSalePriceAdjustment += $combination->sale_price ?? $combination->price;
                    if ($orderItemId) {
                        OrderItemCombination::create(['order_item_id' => $orderItemId, 'combination_id' => $combination->id,]);
                    }
                }
                else {
                    $independentStockAvailable = false;
                    break;
                }
            }
        }

        // Process dependent attributes
        foreach ($dependentAttributes as $attribute) {
            $selectedValue = $param[$attribute->id] ?? null;
            if ($selectedValue) {
                $selectedDependentAttributes[$attribute->id] = $selectedValue;
            }
        }


        if (!empty($selectedDependentAttributes)) {
            $combination = $product->getCombinationDetails($selectedDependentAttributes);


            if ($combination) {
                $dependentPriceAdjustment += $combination->price;
                $dependentSalePriceAdjustment += $combination->sale_price ?? $combination->price;

                if ($orderItemId) {

                    OrderItemCombination::create(['order_item_id' => $orderItemId, 'combination_id' => $combination->id,]);
                }
            }
            else {
                $dependentStockAvailable = false;
            }
        }

        return ['independentPriceAdjustment' => $independentPriceAdjustment, 'independentSalePriceAdjustment' => $independentSalePriceAdjustment, 'independentStockAvailable' => $independentStockAvailable, 'dependentPriceAdjustment' => $dependentPriceAdjustment, 'dependentSalePriceAdjustment' => $dependentSalePriceAdjustment, 'dependentStockAvailable' => $dependentStockAvailable, 'selectedAttributes' => $selectedAttributes];
    }
    private function handleAuthenticatedAddToCart(Request $request, array $param)
    {
        $user = Auth::user();
        $order = Order::where(['user_id' => $user->id, 'status' => 'basket'])->latest()->first() ?: $this->firstStore();
        $product = Product::find($param['product']);
        $randomNumber = rand(1000000, 9999999);
        $orderItem = OrderItem::create(['id' => $randomNumber, 'order_id' => $order->id, 'product_id' => $param['product'], 'quantity' => $param['quantity'] ?? 1, 'price' => $product->price, 'sale_price' => $product->sale_price, 'total' => ($product->sale_price ?? $product->price) * ($param['quantity'] ?? 1),]);
        $this->processProductAttributes($orderItem, $product, $param);
        $this->updateOrderItemAttributes($orderItem, $param);
        $orders = $order->basket();
        return response()->json(["status" => "success", "message" => "محصول با موفقیت به سبد خرید اضافه شد.", "cart" => ["count" => $orders->cart->count],]);
    }
    private function handleGuestAddToCart(Request $request, array $param)
    {
        $param = $request->input('param');
        $cartCount = 0;
        $cartItems = $request->cookie('cart') ? json_decode($request->cookie('cart'), true) : [];
        $randomNumber = rand(1000000, 9999999);

        // Update cart items with provided parameters
        $cartItems = $this->updateCartArray($cartItems, $param, $randomNumber);

        // Update cart count
        $cartCount = count($cartItems);

        // Store the updated cart items in the cookie
        return response()->json([
            "status" => "success",
            "message" => "محصول با موفقیت به سبد خرید اضافه شد.",
            "cart" => ["count" => $cartCount],
        ])->cookie('cart', json_encode($cartItems));

    }
    //Private Methods
    private function getAuthenticatedOrder()
    {
        $user = Auth::user();
        $order = Order::where(['user_id' => $user->id, 'status' => 'basket'])->latest()->first();

        if (!$order) {
            $order = $this->firstStore();
        }
        return $order;
    }
    private function getAuthenticatedMiniCart(Request $request)
    {
        $order = $this->getAuthenticatedOrder();
        if ($request->cookie('cart')) {

            $this->transferCookie($request, $order->id);
        }
        return $order->basket();
    }
    private function getGuestMiniCart(Request $request)
    {
        return $this->basketCookie($request);
    }
    private function removeItemAuthenticated($id) {
        $user = Auth::user();
        $orderItem = OrderItem::find($id);

        if ($orderItem) {
            $orderItem->delete();
        }

        $order = $this->getAuthenticatedOrder();
        $orders = $order->basket();

        $response = [
            "status" => "success",
            "message" => "محصول با موفقیت از سبد خرید حذف شد.",
            "cart" => ["count" => $orders->cart->count, "total" => $orders->cart->total],
            "items" => $orders->items,
        ];

        return response()->json($response);
    }
    private function removeItemGuest(Request $request, $id)
    {
        // Retrieve the cart from the cookie and decode it
        $cartItems = json_decode($request->cookie('cart'), true) ?? [];

        // Initialize variables for total price and item details
        $totalPrice = 0;
        $items = [];

        // Remove the item from the cart if it exists
        if (isset($cartItems[$id])) {
            unset($cartItems[$id]);
        }

        // Process each item in the cart
        foreach ($cartItems as $key => $cartItem) {
            // Fetch the product based on product ID
            $product = Product::find($cartItem['product']);

            if ($product) {
                // Calculate the base price and sale price
                $basePrice = $product->price;
                $baseSalePrice = $product->sale_price ?? $basePrice;

                // Calculate the final price based on attributes
                $attributeData = $this->processProductAttributes(null, $product, $cartItem ?? []);
                $finalPrice = $baseSalePrice + $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment'];

                // Update the item's price and total price
                $totalItemPrice = $finalPrice * $cartItem['quantity'];
                $totalPrice += $totalItemPrice;

                // Prepare the item details object
                $items[] = (object)[
                    "id" => $key,
                    "product_id" => $product->id,
                    "name" => $product->title,
                    "img" => asset($product->img),
                    "link" => $product->link,
                    "price" => number_format($basePrice + $attributeData['independentPriceAdjustment'] + $attributeData['dependentPriceAdjustment']),
                    "sale_price" => number_format($baseSalePrice + $attributeData['independentSalePriceAdjustment'] + $attributeData['dependentSalePriceAdjustment']),
                    "discountPercentage" => $product->discountPercentage,
                    "quantity" => $cartItem['quantity'],
                    "attribute" => array_keys($cartItem),
                    "service" => $product->service,
                    "attributeSeries" => $attributeData['selectedAttributes'],
                    "services" => (object)[
                        "sewing" => $product->services()->where('type', 'sewing')->first(),
                        "installer" => $product->services()->where('type', 'installer')->first(),
                        "design" => $product->services()->where('type', 'design')->first(),
                    ],
                    "installer" => $cartItem["installer"] ?? null,
                    "sewing" => $cartItem["sewing"] ?? null,
                    "design" => $cartItem["design"] ?? null,
                    "total" => number_format($totalItemPrice),
                    "unavailable" => !$attributeData['independentStockAvailable'] || !$attributeData['dependentStockAvailable'],
                ];
            }
        }

        // Recalculate the cart count
        $cartCount = count($cartItems);

        // Prepare the response
        $response = [
            "status" => "success",
            "message" => "محصول با موفقیت از سبد خرید حذف شد.",
            "cart" => [
                "count" => $cartCount,
                "total" => number_format($totalPrice, 2) // Format total price to 2 decimal places
            ],
            "items" => $items, // Return the updated item details
        ];

        // Return the updated cart details in the cookie and as a JSON response
        return response()->json($response)
            ->cookie('cart', json_encode($cartItems), 60 * 24); // Cookie expiry time (1 day)
    }
    private function removeAllAuthenticatedCart()
    {
        Order::where(['user_id' => Auth::id(), 'status' => 'basket'])->delete();
        return response()->json(["status" => "success", "message" => "All items removed from cart."]);
    }
    private function removeAllGuestCart(Request $request, $response)
    {
        if ($request->cookie('cart')) {
            return response()->json($response)->cookie('cart', null);
        }
        return response()->json($response);
    }
    private function updateCartAuthenticated($id, $count)
    {
        $orderItem = OrderItem::find($id);
        if ($orderItem) {
            $orderItem->quantity = $count;
            $orderItem->save();
        }
        $order = $this->getAuthenticatedOrder();
        $orders = $order->basket();
        return response()->json(["cart" => ["count" => $orders->cart->count, "total" => $orders->cart->total], "items" => $orders->items,]);
    }
    private function updateCartGuest(Request $request, $id, $count)
    {
        $cookieData = json_decode($request->cookie('cart'), true);
        if (isset($cookieData[$id])) {
            $this->updateCartArray($cookieData, $cookieData[$id], $count);
            $cartData = $this->calculateCartData($cookieData);
            return response()->json($cartData)->cookie('cart', json_encode($cookieData));
        }
        return response()->json(["status" => "error", "message" => "Item not found in cart."]);
    }
    private function getAuthenticatedCartItemCount()
    {
        $order = $this->getAuthenticatedOrder();
        $count = $order ? $order->basket()->cart->count : 0;
        return $count;
    }
    private function getGuestCartItemCount(Request $request)
    {
        $cookieData = json_decode($request->cookie('cart'), true);
        $count = $cookieData ? array_sum(array_column($cookieData, 'quantity')) : 0;
        return $count;
    }
    private function determinePaymentMethod($paymentMethod)
    {
        return in_array($paymentMethod, ['online', 'cod']) ? $paymentMethod : 'cod';
    }
    private function shippingValidationRules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'country' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string|max:500',
            'postal_code' => 'required|string|size:10', // کد پستی باید دقیقا 10 رقمی باشد
            'note' => 'nullable|string|max:1000', // یادداشت اختیاری است و نباید از 1000 کاراکتر بیشتر شود
            'sendtoanotheraddress' => 'nullable|boolean', // چک‌کردن ارسال به آدرس دیگر

            // اگر کاربر گزینه ارسال به آدرس دیگر را انتخاب کرده باشد:
            'shipping_first_name' => 'nullable|string|max:255',
            'shipping_last_name' => 'nullable|string|max:255',
            'shipping_mobile' => 'nullable|string|max:15',
            'shipping_country' => 'nullable|string',
            'shipping_province' => 'nullable|string',
            'shipping_city' => 'nullable|string',
            'shipping_address' => 'nullable|string|max:500',
            'shipping_postal_code' => 'nullable|string|size:10', // کد پستی باید دقیقا 10 رقمی باشد
        ];
    }

    private function calculateCartData($cartItems)
    {
        $total = 0;
        $count = 0;
        foreach ($cartItems as $item) {
            $count += $item['quantity'];
            $total += $item['price'] * $item['quantity'];
        }
        return ["count" => $count, "total" => $total];
    }



}
