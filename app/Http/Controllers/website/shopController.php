<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class shopController extends Controller
{
    public function index($slug = null, $subslug = null, $highlights = null, $price = null) {
        // Initialize variables
        $categories = Category::get();
        $subcategories = SubCat::get();
        $productQuery = Product::query();
    
        // Filter by category if $slug is provided
        if (!empty($slug)) {
            $category = Category::where('slug', $slug)->first();
            if ($category) {
                $productQuery->where('cate_id', $category->id);
            }
        }
    
        // Filter by subcategory if $subslug is provided
        if (!empty($subslug)) {
            $subcategory = SubCat::where('slug', $subslug)->first();
            if ($subcategory) {
                $productQuery->where('subcate_id', $subcategory->id);
            }
        }
    
        // Apply highlight filter
        if (!empty($highlights)) {
            if ($highlights == 'bestseller') {
                $productQuery->join('order_items', 'products.id', '=', 'order_items.product_id')
                             ->select('products.*', DB::raw('COUNT(order_items.product_id) as total_orders'))
                             ->groupBy('products.id')
                             ->orderByDesc('total_orders');
            } elseif ($highlights == 'newarrivals') {
                // Assuming 'newarrivals' refers to products added recently
                $productQuery->orderByDesc('created_at'); // Or whatever field indicates the product's arrival
            } elseif ($highlights == 'sale') {
                $productQuery->where('offer', '1');
            }
        }
    
        // Get the final list of products
        $products = $productQuery->get();
    
        return view('website.shop.shop', [
            'category' => $categories,
            'subcate' => $subcategories,
            'slug' => $slug,
            'product' => $products
        ]);
    }
    
    
    
}
