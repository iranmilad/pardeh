<?php

namespace App\Models;

use Auth;
use AutoKit\Components\Cart\Calculator;
use AutoKit\Components\Delivery\Address;
use AutoKit\Components\Money\Currency;
use AutoKit\Components\Money\Exchanger;
use AutoKit\Components\Money\Money;
use AutoKit\Events\NewOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Stripe\ApiResource;

/**
 * AutoKit\Order
 *
 * @property int $id
 * @property string $customer_name
 * @property string $customer_email
 * @property string $customer_phone_number
 * @property int|null $user_id
 * @property int $is_self_delivery
 * @property string|null $payment_id
 * @property mixed $cart
 * @property int $shipping_price
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereCart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereCustomerEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereCustomerPhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereIsSelfDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereShippingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereUserId($value)
 * @mixin \Eloquent
 * @property string|null $warehouse_id
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereWarehouseId($value)
 * @property-read \AutoKit\User|null $user
 * @property string|null $warehouse
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Order whereWarehouse($value)
 * @property-read float $total_dimensions
 * @property-read Money|null $total_price
 * @property-read float $total_weight
 */
class Order extends Model
{
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
}
