<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;


class DiscountController extends Controller
{
    public function applyDiscount(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        $discountCode = $request->input('discount_code');

        $result = $order->applyDiscountCode($discountCode);

        if ($result['success']) {
            return redirect()->route('cart')->with('success', 'Discount applied! Total discount: ' . number_format($result['total_discount']) . ' Toman');
        }

        return redirect()->back()->with('error', $result['message']);
    }

    public function removeDiscount($orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        // حذف کد تخفیف از سفارش
        $order->discount_code_id = null;
        $order->save();

        return redirect()->back()->with('success', 'Discount code has been removed.');
    }

}
