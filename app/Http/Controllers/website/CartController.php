<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $cart = Cart::content();
    //    dd($cart);
    //    die();   
        return view('website.cart.cart',['cart' => $cart]);
    }
    public function indexajax()
    {
        $data =[
            'count' => Cart::count(),
            'products' => Cart::content(),
            'total' =>Cart::subtotal()
        ];  
    return response()->json(['data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return dd('hello butoon can work');
        // die();
        $product = Product::find($request->id);

        if (!$product) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found',
            ], 404);
        }
        if (Cart::count() > 0) {
            $cartcontent = Cart::content();
            foreach ($cartcontent as $_item) {
                if ($_item->id == $product->id) {
                    $status = false;
                    $message = $product->title. "Already added.";
                    $data =[
                        'count' => Cart::count(),
                        'products' => Cart::content(),
                        'total' =>Cart::subtotal()
                    ];
                    return response()->json([
                        'status' => $status,
                        'message' => $message,
                        'data' => $data,
                    ]);
                }
            }

            if (isset($product->discount)) {
                $price = $product->discount;
            } else {
                $price = $product->price;
            }
            Cart::add($product->id, $product->title, 1, $price, ['thumnail' => $product->thumbnail]);
            $status = true;
            $message = $product->title. "Added to cart successfully";
            $data =[
            //     'title' => $product->title,
            // 'thumbnail' => $product->thumbnail,
            'count' => Cart::count(),
            'products' => Cart::content(),
            'total' =>Cart::subtotal()
            // 'price' => $product->price,
            // 'discount' => $product->discount,
            ];
        } else {
            if (isset($product->discount)) {
                $price = $product->discount;
            } else {
                $price = $product->price;
            }
            Cart::add($product->id, $product->title, 1, $price, ['thumnail' => $product->thumbnail]);
            $status = true;
            $message = $product->title. "Added to cart successfully";
            $data =[
            'count' => Cart::count(),
            'products' => Cart::content(),
            'total' =>Cart::subtotal()
            ];
        }
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rowId = $request->rowId;
        $qty = $request->qty;
        try{
            Cart::update($rowId, $qty);
            $status = true;
            $message = 'Cart updated successfully';
        }catch (\Exception $e){
            $status = false;
            $message = $e->getMessage();
        }
        return response()->json([   

           'status' => $status,
          'message' => $message,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $rowid = $request->rowId;
        Cart::remove($rowid);
        $status = true;
            $message = 'Product remove successfully';
        return response()->json([
            'status' => $status,
          'message' => $message,
        ]);
    }
}
