<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rate' => 'required',
            'title' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
        }
        if ($request->hasFile('img')) {
            $images = [];
            foreach ($request->file('img') as  $file) {
                array_push($images, $file->store('uploads/product/review', 'public'));
            }
        } else {
            $images = null;
        }
        $user = auth('customer')->user();

        if ($user) {
            // User is authenticated
            $user_id = $user->id; // Get the user ID directly from $user
            $name = $user->name; // Get the name directly from $user
            $email = $user->email; // Get the email directly from $user
        } else {
            // User is not authenticated
            $name = $request->name; // Get name from the request
            $email = $request->email; // Get email from the request
            $user_id = null; // Set user_id to null
        }
        $data = [
            'user_id' => $user_id,
            'product_id' => $request->product_id,
            'name' => $name,
            'email' => $email,
            'rating' => $request->rate,
            'title' => $request->title,
            'feedback' => $request->message,
            'images' => json_encode($images),
        ];
        $data['created_at'] = Carbon::now(); // Set created_at to current time
        $data['updated_at'] = Carbon::now(); // Set updated_at to current time
        Log::info('Data before saving:', $data);
        DB::beginTransaction();
        try {
            $review = DB::table('reviews')->insert($data);
            DB::commit();
            return response()->json(['status' => true, 'message' => 'Review added successfully']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
    public function show($id) {
        $reviews = Reviews::where('product_id', $id)
                ->orderBy('id', 'DESC')
                ->get(); // Change 5 to your desired number of reviews per page
        $count = Reviews::where('product_id', $id)->count(); // Change 5 to your desired number of reviews per page
        return response()->json(['status' => true, 'data' => $reviews, 'count' => $count]);
    }
    
}
