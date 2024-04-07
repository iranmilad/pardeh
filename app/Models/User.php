<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

 class User extends Authenticatable
{
	//use SoftDeletes;
    protected $fillable = [
        'password',
        'active',
        'first_name',
        'last_name',
        'mobile',
        'email',
        'email_verified_at',
        // اطلاعات آدرس
        'country',
        'province',
        'city',
        'address',
        'postal_code',
        'phone',
        'check_payment_active',
        'credit_payment_active',
        'credit_limit',
    ];

    protected $casts = [
        'check_payment_active' => 'boolean',
        'credit_payment_active' => 'boolean',
    ];

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}

    public function credits()
    {
        return $this->hasMany(Credit::class);
    }

    public function checks()
    {
        return $this->hasMany(Check::class);
    }

	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}

	public function subscribe()
	{
		return $this->hasOne(UserSubscribe::class)->whereDate('expire_at','>=',now());
	}

	public function questions()
	{
		return $this->hasMany(UserQuestion::class);
	}

	public function memberLists()
	{
		return $this->hasMany(UserMemberList::class);
	}
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function hasRole(string $role): bool
    {
        return $this->role()->where('title', $role)->exists();
    }

    public function isAdmin(): bool
    {
        return $this->role->title === 'admin';
    }
	public function tokens()
	{
		return $this->hasMany(UserToken::class);
	}

	public function getHasSubscribeAttribute(){
		return $this->subscribe()->count() > 0;
	}

	public function getFullNameAttribute(){
		return $this->first_name . ' '. $this->last_name;
	}

    // مدل User رابطه‌ی posts را اضافه کنید
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function calculateAvailableCredit()
    {

        $totalCreditLimit = $this->credit_limit;

        $allocatedUnpaidCredits = $this->credits()->where('payment_status', 'unpaid')->sum('amount');

        $availableCredit = $totalCreditLimit - $allocatedUnpaidCredits;

        return $availableCredit;
    }


}
