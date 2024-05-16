<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PakistaniPhoneNumber implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Check if the phone number matches the Pakistani phone number format
        return preg_match('/^(\+92|0)\d{10}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :Please check your phone number.';
    }
}
