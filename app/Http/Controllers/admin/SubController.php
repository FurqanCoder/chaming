<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SubController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'unique:category'],
            'slug' => ['required', 'string', 'unique:category'],
            'main_category' => ['required'],
            'description' => ['required', 'string', 'max:120'],
            
        ]);
        if ($validator->fails()) {
            
            return redirect()->back()->withErrors($validator);
        } else {
            $user = auth()->user();
        $user_id = $user->id;
        $data = [
            'user_id' => $user_id,
            'cate_id' => $request->main_category,
            'name' => $request->name,
            'slug' => $request->slug,
            'des' => $request->description, // Fix the typo here
        ];
        
        DB::beginTransaction();
        try {
            $category = SubCat::create($data);
            if ($category) {
                DB::commit();
                return redirect()->back()->with(['success' => 'SubCategory created successfully']);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            // Reverse the order of throw and redirect
            return redirect()->back()->withErrors('Internal Server Error. Please try later.');
            throw $e;
        }
        }
    }
    public function matchcat($category){
        
        // Retrieve sub-categories based on the selected category
        $subcategories = SubCat::where('cate_id', $category)->get();

        return response()->json(['subcategories' => $subcategories]);
        // return response()->json(['data' => $subcategories]);
    
}
}
