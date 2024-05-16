<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCat;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('category')->get();
        $subcategoriesCount = SubCat::select('cate_id', DB::raw('count(*) as count'))
        ->groupBy('cate_id')
        ->get();
        return view("dashboard.category.category", ['data' => $categories, 'subcate' => $subcategoriesCount]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'unique:category'],
        'slug' => ['required', 'string', 'unique:category'],
        'description' => ['required', 'string', 'max:120'],
        'image' => ['required', 'image', 'mimes:jpeg,jpg,png'],
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator);
    } else {
        $imagePath = $request->file('image')->store('uploads/category', 'public');
        $user = auth()->user();
        $user_id = $user->id;
        $data = [
            'user_id' => $user_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'des' => $request->description, // Fix the typo here
            'category_image' => $imagePath,
        ];

        DB::beginTransaction();
        try {
            $category = Category::create($data);
            if ($category) {
                DB::commit();
                return redirect()->back()->with(['success' => 'Category created successfully']);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            // Reverse the order of throw and redirect
            return redirect()->back()->withErrors('Internal Server Error. Please try later.');
            throw $e;
        }
    }
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = (int)$id;
        $category = Category::find($id);
        if (!$category || empty($category
        )) {
            abort(404);
        }
        return view('dashboard.category.update-category', ['data' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = (int)$id;
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'slug' => ['required'],
            'description' => ['required', 'string', 'max:120'],
            'image' => ['image', 'mimes:jpeg,jpg,png'], // Allow image field to be nullable
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = auth()->user();
        $user_id = $user->id;
        $category = Category::findOrFail($id);
    
        // Check if there is an image uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/category', 'public');
            $data['image'] = $imagePath;
        }
    
        $data = [
            'user_id' => $user_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ];
    
        DB::beginTransaction();
    
        try {
            $category->update($data);
            DB::commit();
            return redirect()->route('dash-category')->with('success', 'Category updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Internal Server Error. Please try later.')->withInput();
            // Ensure old input is retained in case of failure
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
