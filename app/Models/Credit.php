<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'due_date', 'payment_status', 'order_id', 'product_id', 'user_id', 'payment_id'];
    // ارتباط اعتبار با یک کاربر
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // ارتباط اعتبار با یک سفارش
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }



}
