<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdController extends Controller
{
    public function show($id){
        $product = Product::where('id', $id)->first();
        if(!$product) {
            abort(404);
            }else{
                $category = Category::find($product->cate_id);
                $product->category = $category->name;
                return view('website.product.product', ['data' => $product]);
            }
    }
}
