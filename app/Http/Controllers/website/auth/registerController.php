<?php

namespace App\Http\Controllers\website\auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
    public function index(){
        return view('website.auth.register');
    }
    public function create(Request $request){
        $validator = Validator::make($request->all(),[
              'name' => 'required',
              'email' => 'required|email|unique:customer',
              'password' => 'required|min:8|confirmed',
            //   'terms' => 'required'
          ]);
          if($validator->fails()){
              return redirect()->back()
                  ->withErrors($validator)
                  ->withInput();
          }else{
              //insert data into database
              if($request->hasFile('profile_img')){
                  $profile_img = $request->file('profile_img')->store('uploads/customer/profile', 'public');
              }else{
                  $profile_img = null;
              }
              $data=[
                  "name"=>$request->name,
                  'email'=>$request->email,
                  'password'=>Hash::make($request->password),
                  'customer_img'=>$profile_img,
              ];
              DB::beginTransaction();
              try{
                  $customer = Customer::create($data);
                  if($customer){
                      DB::commit();
                      auth()->guard('customer')->loginUsingId($customer->id,'true');
                     $sessuss = session()->flash("success","User has been created successfully");
                      return redirect('/');
                  }
              }catch(\Exception $e){
                  DB::rollBack();
                  Log::error($e);
                  session()->flash("error",$e->getMessage());
              }
          }
      }
      
}
