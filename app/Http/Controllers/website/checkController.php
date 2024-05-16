<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\CustomerAddress;
use App\Models\Order;
use App\Models\order_items;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\FuncCall;
use App\Rules\PakistaniPhoneNumber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class checkController extends Controller
{
    public function checkout()
{
    if (Cart::count() == 0) {
        return redirect()->route('web-cart');
    }

    // Check if the user is not authenticated
    if (Auth::guard('customer')->guest()) {
        session(['url.intended' => route('web-checkout')]); // Store intended URL
        return redirect()->route('web-login');
    }

    session()->forget('url.intended'); // Clear intended URL after successful login
    $user_id = Auth::guard('customer')->user()->id;
    $customer_address = CustomerAddress::where('user_id', $user_id)->first();
    $country = Country::orderBy('name', 'ASC')->get();
    $cart = Cart::content();
    
    // Pass customer address, country list, and cart data to the view
    return view('website.cart.checkout', ['add' => $customer_address, 'country' => $country, 'cart' => $cart]);
}

    public function processCheckout(Request $request)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'phone' => ['required', new PakistaniPhoneNumber],
        'address' => 'required',
        'country' => 'required',
        'city' => 'required',
        'zip' => 'required',
        'state' => 'required',
    ]);

    // If validation fails, redirect back with errors
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Start database transaction
    DB::beginTransaction();

    try {
        // Retrieve user's ID
        $userId = Auth::guard('customer')->user()->id;

        // Check if the user already has an address
        $existingAddress = CustomerAddress::where('user_id', $userId)->first();

        // If the user already has an address, update it
        if ($existingAddress) {
            $existingAddress->update($request->only(['name', 'email', 'phone', 'address', 'country', 'city', 'zip', 'state']));
            $checkoutId = $existingAddress->id;
        } else {
            // Otherwise, create a new address
            $newAddressData = $request->only(['name', 'email', 'phone', 'address', 'country', 'city', 'zip', 'state']);
            $newAddressData['user_id'] = $userId;
            $custinfo = CustomerAddress::create($newAddressData);
            $checkoutId = $custinfo->id;
        }

        // Create the order
        $order = new Order();
        $order->user_id = $userId;
        $order->checkout_id = $checkoutId;
        $order->suntotal = (float) str_replace(',', '', Cart::subtotal());
        $order->shipping = 0;
        $order->grand_total = (float) str_replace(',', '', Cart::subtotal());
        $order->payment_method = 'cod'; //$request->input('paymnt')
        $order->save();

        // Create order items
        foreach (Cart::content() as $item) {
            $orderItem = new order_items();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->id;
            $orderItem->product_title = $item->name;
            $orderItem->qty = $item->qty;
            $orderItem->price = $item->price;
            $orderItem->total = $orderItem->price * $orderItem->qty;
            $orderItem->save();
        }

        // If all operations were successful, commit the transactions
        DB::commit();
        Cart::destroy();
        return redirect()->route('web-cart')->with('success', 'Order Placed Successfully');
    } catch (\Exception $e) {
        // If any error occurs, rollback the transaction
        DB::rollBack();
        return redirect()->back()->withErrors($e->getMessage());
    }
}

    
}
