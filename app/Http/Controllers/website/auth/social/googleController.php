<?php

namespace App\Http\Controllers\website\auth\social;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class googleController extends Controller
{
    public function redirectToGoogle()
    {
        try {
            return Socialite::driver('google')->redirect();
        } catch (\Exception $e) {
            // Log or display the exception message
            dd($e->getMessage());
        }
    }

    public function handleGoogleCallback()
    {

        $user = Socialite::driver('google')->user();
        if ($user) {
            $existingUser = Customer::where('email', $user->getEmail())->first();

            if ($existingUser) {
                // User already exists, log them in
                auth()->guard('customer')->loginUsingId($existingUser->id, true);
                return redirect('/');
            }
            $data = [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt(Str::random(12)),
                'customer_img' => $user->getAvatar()
            ];
            // check if user already exists in the database
            DB::beginTransaction();
            try {
                $user = Customer::create($data);
                if ($user) {
                    auth()->guard('customer')->loginUsingId($user->id, true);
                    DB::commit();
                    if (session()->has('url.intended')) {
                        return redirect(session()->get('url.intended'));
                    } else {
                        return redirect('/');
                    }
                }
            } catch (\Exception $e) {
                DB::rollBack();
                Log::error($e);
                return redirect('/login')->withErrors(['error' => 'Google login failed']);
            }
        }
    }
    // now for facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        return response()->json(['data' => $user]);
        // Use $user data to login or register the user in your Laravel application
    }
}
