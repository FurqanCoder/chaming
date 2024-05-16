<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // // selete validator for check the pakistani service number
        // Validator::extend('pakistani_phone', function ($attribute, $value, $parameters, $validator) {
        //     // Check if the phone number is 11 digits long and starts with '03'
        //     return preg_match('/^03\d{9}$/', $value);
        // });

        // Validator::replacer('pakistani_phone', function ($message, $attribute, $rule, $parameters) {
        //     return str_replace(':attribute', $attribute, 'The :attribute must be a valid Pakistani phone number.');
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
