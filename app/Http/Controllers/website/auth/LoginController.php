<?php

namespace App\Http\Controllers\website\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        if (auth()->guard('customer')->check()) {
            return redirect('/');
        } else {
            return view('website.auth.login');
        }
    }
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            if (Auth::guard('customer')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                $user = Auth::guard('customer')->user();

                // The authentication attempt was successful
                if ($user) {
                    session()->put('id', $user->id);
                    session()->put('email', $user->email);
                    session()->put('name', $user->name);
                    // return response()->json(['success' => 'You are logged in']);
                    if (session()->has('url.intended')) {
                        return redirect(session()->get('url.intended'));
                    } else {
                        return redirect('/');
                    }
                } else {

                    return redirect('/login')->withErrors(['error' => 'User not found']);
                }
            } else {
                // Authentication attempt failed
                return redirect('/login')->withErrors(['error' => 'Invalid Credintials']);
            }
        }
    }
}
