<?php

namespace App\View\Components\home;

use App\Models\Category;
use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class categoryComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $category = Category::get();
        $productCount = Product::select('cate_id', DB::raw('count(*) as count'))
        ->groupBy('cate_id')
        ->get();
        return view('components.home.category-component',['category' => $category, 'pro' => $productCount]);
    }
}
