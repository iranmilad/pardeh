<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone_number',
        'user_id',
        'is_self_delivery',
        'warehouse',
        'payment_id',
        'tax',
        'cart',
        'shipping_price',
        // اضافه کردن فیلدهای آدرس
        'shipping_country',
        'shipping_province',
        'shipping_city',
        'shipping_address',
        'shipping_postal_code',
        'shipping_phone',
        // اضافه کردن فیلد کد تخفیف
        'discount_code_id',
        'deliveryType',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function discountCode()
    {
        return $this->belongsTo(DiscountCode::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // تعریف ارتباط یک به چند با مدل Check
    public function checks()
    {
        return $this->hasMany(Check::class);
    }

    /**
     * Get the total amount of unpaid checks for the user.
     *
     * @param int $userId
     * @return float
     */
    public static function getTotalUnpaidUserChecksAmount($userId)
    {
        return self::where('user_id', $userId)
            ->whereHas('checks', function ($query) {
                $query->where('payment_status', 'unpaid');
            })
            ->withSum('checks', 'amount')
            ->sum('checks.sum_amount');
    }


    /**
     * Get the total amount of unpaid checks for the order.
     *
     * @return float
     */
    public function getTotalUnpaidChecksAmount()
    {
        return $this->checks()
            ->where('payment_status', 'unpaid')
            ->sum('amount');
    }
}
