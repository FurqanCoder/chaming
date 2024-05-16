<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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
    return view("dashboard.product.add", ['categories' => $categories]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'thumb_image' => 'required|image|mimes:png,jpg,jpeg',
            'gallary.*' => 'required|image|mimes:jpeg,jpg,png',
            'sku' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'category' => 'required',
            'tags' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }else{
            $thumb_Path = $request->file('thumb_image')->store('uploads/product/thumbnails', 'public');
            $imagesPath = [];
            foreach ($request->file('gallary') as  $file) {
                array_push($imagesPath, $file->store('uploads/product/gallery', 'public'));
                }
                if (isset($request->details_image)) {
                    $details_image = $request->file('details_image')->store('uploads/product/details', 'public');
                } else {
                    $details_image = null;
                }
                if ($request->hasFile('product_video')) {
                    // Create directories if they don't exist
                    Storage::makeDirectory('public/uploads/product/videos');
                
                    // Store the video file
                    $video_path = $request->file('product_video')->store('uploads/product/videos', 'public');
                }
            $user = auth()->user();
            $user_id = $user->id;
            $data =[
                'user_id' => $user_id,
                'cate_id' => $request->category,
                'subcate_id' => $request->sub_category,
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'thumbnail'=> $thumb_Path,
                'gallery' =>json_encode($imagesPath),
                'video' =>  isset($video_path)?$video_path :null ,
                'sku' => $request->sku,
                'stock' => $request->stock,
                'price' => $request->price,
                'discount' => $request->discount_price,
                'start_date' => Carbon::parse($request->start_date),
                'end_date' => Carbon::parse($request->end_date),
                'offer' => $request->offer,
                'details' => $request->product_details,
                'detail_img' => $details_image,
                'how' => $request->use,
                'ing_name' => json_encode($request->Ing_name),
                'ing_weight' => json_encode($request->Ing_weight),
                'status' => $request->status,
                'tags' => json_encode($request->tags)
            ];
            DB::beginTransaction();
            try{
                $product = Product::create($data);
                if($product){
                    DB::commit();
                    return redirect('/dashboard/products')->withSuccess("Product Created Successfully");
                }
            }catch(\Exception $e){
                DB::rollBack();
                Log::error($e);
                $error = "Internal Server Error";
                return redirect()->back()->withErrors($error);
            }
        }
    }
    // to show all products
    public function products(){
        $products = Product::get(); 
    
        foreach ($products as $data) {
            $category = Category::find($data->cate_id);
            $data->category_name = $category->name; // Assuming $category is always found
            
            $subcategory = SubCat::find($data->subcate_id);
            if ($subcategory) { // Check if subcategory exists
                $data->subcate_name = $subcategory->name;
            } else {
                $data->subcate_name = null;
            }
        }
        
    
        return view('dashboard.product.all', ['products' => $products]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    // Convert the provided ID to an integer
    $id = (int)$id;

    // Find the product by its ID
    $product = Product::find($id);

    // Check if the product exists
    if ($product) {
        // Find the category of the product
        $category = Category::find($product->cate_id);

        // Check if the category exists
        if ($category) {
            $product->category_name = $category->name;
        } else {
            // Handle the case where the category does not exist
            $product->category_name = 'Unknown Category';
        }

        // Find the subcategory of the product
        $subcategory = SubCat::find($product->subcate_id);

        // Check if the subcategory exists
        if ($subcategory) {
            $product->subcate_name = $subcategory->name;
        } else {
            // Handle the case where the subcategory does not exist
            $product->subcate_name = 'Unknown Subcategory';
        }
        $categories = Category::get();
        // Return the view for updating the product with product information
        return view('dashboard.product.update', ['data' => $product, 'categories' => $categories]);
    } else {
        // Set an error message if the product does not exist
        $error = "Product not Exist!";
        return redirect()->back()->withErrors($error);
    }
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = (int)$id;
        // Validate the input data
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'sku' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'category' => 'required',
            'tags' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }else{
            $user = auth()->user();
            $user_id = $user->id;
            $product = Product::findOrFail($id);
            $product->user_id = $user_id;
            $product->cate_id = $request->category;
            $product->subcate_id = $request->sub_category;
            $product->title = $request->title;
            $product->slug = $request->slug;
            $product->description = $request->description;
            if($request->hasFile('thumb_image')){
                 Storage::delete('public/' . $product->thumbnail);
            $thumb_Path = $request->file('thumb_image')->store('uploads/product/thumbnails', 'public');
            $product->thumbnail = $thumb_Path;
            }
            if($request->hasFile('gallery')){
                foreach (json_decode($product->gallery, true) as  $img) {
                    Storage::delete('public/' . $img);
                }
                $imagesPath = [];
            foreach ($request->file('gallary') as  $file) {
                array_push($imagesPath, $file->store('uploads/product/gallery', 'public'));
                }
                $product->gallery=json_encode($imagesPath);
            }
            if($request->hasFile('product_video')){
                Storage::delete('public/' . $product->video);
                $video_path = $request->file('product_video')->store('uploads/product/videos', 'public');
                $product->video=$video_path;
            }
            if ($request->hasFile('details_image')) {
                Storage::delete('public/' . $product->details_image);
                $details_image = $request->file('details_image')->store('uploads/product/details', 'public');
                $product->detail_image=$details_image;
            }
            $product->sku = $request->sku;
            $product->stock = $request->stock;
            $product->price = $request->price;
            $product->discount = $request->discount;
            $product->start_date = Carbon::parse($request->start_date);
            $product->end_date = Carbon::parse($request->end_date);
            $product->offer = $request->offer;
            $product->details = $request->product_details;
            $product->how = $request->use;
            $product->ing_name = json_encode($request->Ing_name);
            $product->ing_weight = json_encode($request->Ing_weight);
            $product->status = $request->status;
            $product->tags = json_encode($request->tags);
            $product->save();
            if($product->save()){
                return redirect('/dashboard/products')->withSuccess("Product Updated Successfully");
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = (int)$id;
        $product = Product::findOrFail($id);
        // Delete Images From Server
        foreach (json_decode($product->gallery, true) as $img) {
            Storage::delete('public/' .$img);
            }
            Storage::delete('public/' .$product->detail_image);
            Storage::delete('public/' . $product->thumbnail);
          $delete = $product->delete();
            if($delete){
                return redirect()->back()->with(['success' => "Your Product is deleted"]);
            }else{
                return redirect()->back()->withErrors(['errors'=>"There was a problem deleting your product,
                please try again later."]);
            }
    }
    public function generate(Request $request){
        $name = $request->input('name');
        $description = 'product description';

        // Make the request to the external API
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => '45677d07eemsh57cb38b143b54a7p148bedjsnc16e0bb0d800',
            'X-RapidAPI-Host' => 'ecommerce-product-description.p.rapidapi.com'
        ])->get('https://ecommerce-product-description.p.rapidapi.com/product-description', [
            'name' => $name,
            'description' => $description
        ]);
        return $response->json();
    }
}
