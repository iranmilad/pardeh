<?php

namespace App\Rules;

use Closure;
use Illuminate\Support\Facades\Lang;
use Illuminate\Contracts\Validation\Rule; // تغییر در این خط

class MobileNumber implements Rule // تغییر در این خط
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Validate that the mobile number starts with 0 and has a total of 11 digits
        return preg_match('/^0[0-9]{10}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return Lang::get('validation.iranian_mobile_number');
    }
}
