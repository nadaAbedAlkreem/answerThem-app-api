<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MobileNumber implements Rule
{
    protected $countryPrefix;

    public function __construct($countryPrefix)
    {
        $this->countryPrefix = $countryPrefix;
    }

    public function passes($attribute, $value)
    {
        // Regular expression for validating mobile number with dynamic country prefix
         $pattern = "/^" . preg_quote($this->countryPrefix, '/') . "\d{9,14}$/";
        
        return preg_match($pattern, $value);
    }

    public function message()
    {
        return __('messages.phone.mobile_number', ['prefix' => $this->countryPrefix]);
    }
}
