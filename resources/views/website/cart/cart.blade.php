@extends('website.layout.app')
@section('web-content')
<main id="content" class="wrapper layout-page">
    <section class="z-index-2 position-relative pb-2 mb-12">
        <div class="bg-body-secondary mb-3">
            <div class="container">
                <nav class="py-4 lh-30px" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center py-1 mb-0">
                        <li class="breadcrumb-item"><a title="Home" href="../index-2.html">Home</a></li>
                        <li class="breadcrumb-item"><a title="Shop" href="shop-layout-v2.html">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="shopping-cart">
            <h2 class="text-center fs-2 mt-12 mb-13">Shopping Cart</h2>
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulation!</strong> {{Session::get('success')}}.
              </div>    
            @endif
            @if ($cart->count() > 0)
            <form class="table-responsive-md pb-8 pb-lg-10">
                <table class="table border">
                    <thead class="bg-body-secondary">
                        <tr class="fs-15px letter-spacing-01 fw-semibold text-uppercase text-body-emphasis">
                            <th scope="col" class="fw-semibold border-1 ps-11">products</th>
                            <th scope="col" class="fw-semibold border-1">quantity</th>
                            <th colspan="2" class="fw-semibold border-1">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach ($cart as $data)
                        <tr class="position-relative">
                            <th scope="row" class="pe-5 ps-8 py-7 shop-product">
                                <div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-0" type="checkbox"
                                            name="check-product" value="checkbox">
                                    </div>
                                    <div class="ms-6 me-7">
                                        <img src="#" data-src="{{asset('storage/'.$data->options->thumnail)}}"
                                            class="lazy-image" width="75" height="100"
                                            alt="{{$data->name}}">
                                    </div>
                                    <div class>
                                        <p class="fw-500 mb-1 text-body-emphasis">{{$data->name}}</p>
                                        <p class="card-text">
                                            {{-- <span
                                                class="fs-13px fw-500 text-decoration-line-through pe-3">${{$data->rowId}}</span> --}}
                                            <span class="fs-15px fw-bold text-body-emphasis">Rs.{{$data->price}}</span>
                                        </p>
                                    </div>
                                </div>
                            </th>
                            <td class="align-middle">
                                <input type="hidden" class="rowid" value="{{$data->rowId}}">
                                <div class="input-group position-relative shop-quantity">
                                    <a href="#" class="shop-down position-absolute z-index-2 sub"><i class="far fa-minus"></i></a>
                                    <input name="number[]" id="quantityInput" type="number" class="form-control qty-input form-control-sm px-10 py-4 fs-6 text-center border-0" value="{{$data->qty}}" min="1" max="10" required>
                                    <a href="#" class="shop-up position-absolute z-index-2 add"><i class="far fa-plus"></i></a>
                                </div>                                
                                
                            </td>
                            <td class="align-middle">
                                <p class="mb-0 text-body-emphasis fw-bold mr-xl-11">Rs.{{$data->price * $data->qty}}</p>
                            </td>
                            <td class="align-middle text-end pe-8">
                                <a href="javascript:(0);" onclick="deleteitem()" class="d-block text-secondary">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="pt-5 pb-10 position-relative bg-body ps-0 left">
                                <a href="shop-layout-v1.html" title="Countinue Shopping"
                                    class="btn btn-outline-dark me-8 text-nowrap my-5">
                                    Countinue Shopping
                                </a>
                                <button type="submit" value="Clear Shopping Cart"
                                    class="btn btn-link p-0 border-0 border-bottom border-secondary text-decoration-none rounded-0 my-5 fw-semibold ">
                                    <i class="fa fa-times me-3"></i>
                                    Clear Shopping Cart
                                </button>
                            </td>
                            <td colspan="3" class="text-end pt-5 pb-10 position-relative bg-body right pe-0">
                                <a href="javascript:(0);" onclick="updatecart()" value="Update Cart" class="btn btn-outline-dark my-5">Update
                                    Cart
                                </a>
                            </td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </form>
            
            <div class="row pt-8 pt-lg-11 pb-16 pb-lg-18">
                {{-- <div class="col-lg-4 pt-2">
                    <h4 class="fs-24 mb-6">Coupon Discount</h4>
                    <p class="mb-7">Enter you coupon code if you have one.</p>
                    <form>
                        <input type="text" class="form-control mb-7" placeholder="Enter coupon code here">
                        <button type="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary">
                            Apply coupon
                        </button>
                    </form>
                </div> --}}
                {{-- <div class="col-lg-4 pt-lg-2 pt-10">
                    <h4 class="fs-24 mb-6">Shipping Caculator</h4>
                    <form>
                        <div class="d-flex mb-5">
                            <div class="form-check me-6 me-lg-9">
                                <input class="form-check-input form-check-input-body-emphasis" type="radio"
                                    name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Free shipping
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input form-check-input-body-emphasis" type="radio"
                                    name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Flat rate: $75
                                </label>
                            </div>
                        </div>
                        <div class="dropdown bg-body-secondary rounded mb-7">
                            <a href="#"
                                class="form-select text-body-emphasis dropdown-toggle d-flex justify-content-between align-items-center text-decoration-none text-secondary position-relative d-block"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Viet Nam
                            </a>
                            <div class="dropdown-menu w-100 px-0 py-4">
                                <a class="dropdown-item px-6 py-4" href="#">Andorra</a>
                                <a class="dropdown-item px-6 py-4" href="#">San Marino</a>
                                <a class="dropdown-item px-6 py-4" href="#">Tunisia</a>
                                <a class="dropdown-item px-6 py-4" href="#">Micronesia</a>
                                <a class="dropdown-item px-6 py-4" href="#">Solomon Islands</a>
                                <a class="dropdown-item px-6 py-4" href="#">Macedonia</a>
                            </div>
                        </div>
                        <input type="text" class="form-control mb-7" placeholder="State / County" required>
                        <input type="text" class="form-control mb-7" placeholder="City" required>
                        <input type="text" class="form-control mb-7" placeholder="Postcode / Zip">
                        <button type="submit" class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary">
                            Update total
                        </button>
                    </form>
                </div> --}}
                <div class="col-lg-4 pt-lg-0 pt-11 float-right" >
                </div>
                <div class="col-lg-4 pt-lg-0 pt-11 float-right" >
                </div>
                <div class="col-lg-4 pt-lg-0 pt-11 float-right" >
                    <div class="card border-0" style="box-shadow: 0 0 10px 0 rgba(0,0,0,0.1)">
                        <div class="card-body px-9 pt-6">
                            <h4>Cart Summary</h4>
                        </div>
                        <div class="card-footer bg-transparent px-0 pt-5 pb-7 mx-9">
                            <div class="d-flex align-items-center justify-content-between fw-bold mb-7">
                                <span class="text-secondary text-body-emphasis">Subtotal:</span>
                                <span class="d-block ml-auto text-body-emphasis fs-4 fw-bold">Rs.{{Cart::subtotal();}}</span>
                            </div>
                            <a href="{{route('web-checkout')}}"
                                class="btn w-100 btn-dark btn-hover-bg-primary btn-hover-border-primary"
                                title="Check Out">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
            @else
                           <h4 class="mb-5 border p-5 bg-primary text-white" style="margin-bottom: 50px; text-align:center;">You cart is empty at this moment</h4>
                           {{-- <a href="/" class="btn btn-primary mb-5 align-item-center">Return to Home</a> --}}
                        @endif
        </div>
    </section>
</main>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
   document.addEventListener('DOMContentLoaded', function () {
    // Set the CSRF token for AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
    function updatecart(){
        var rowId = $('.rowid').val();
    var qty = $('.qty-input').val();
        
        $.ajax({
            url: '{{route("web-cart-update")}}',
            type: 'post',
            data: {
                rowId: rowId,
                qty: qty
            }, 
            dataType: 'json',
            success: function(response){
                window.location.href='{{route("web-cart")}}';
            }
        })
    }
    function deleteitem(){
        var rowId = $('.rowid').val();
        $.ajax({
            url: '{{route("web-cart-remove")}}',
            type: 'post',
            data: {
                rowId: rowId
            }, 
            dataType: 'json',
            success: function(response){
                window.location.href='{{route("web-cart")}}';
            }
        })    
    }
</script>
@endsection
