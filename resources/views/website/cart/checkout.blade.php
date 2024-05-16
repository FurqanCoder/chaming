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
                        <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="container pb-14 pb-lg-19">
        <div class="text-center">
            <h2 class="mb-6">Check out</h2>
        </div>
        <form class="pt-12"  action="{{route('web-process-checkout')}}" method="post">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="row">
                <div class="col-lg-4 pb-lg-0 pb-14 order-lg-last">
                    <div class="card border-0 rounded-0 shadow">
                        <div class="card-header px-0 mx-10 bg-transparent py-8">
                            <h4 class="fs-4 mb-8">Order Summary</h4>
                            @if ($cart->count() > 0)
                                @foreach ($cart as $cart)
                                <div class="d-flex w-100 mb-7">
                                    <div class="me-6">
                                        <img src="#" data-src="{{asset('storage/'.$cart->options->thumnail)}}"
                                            class="lazy-image" width="60" height="80"
                                            alt="{{$cart->name}}">
                                    </div>
                                    <div class="d-flex flex-grow-1">
                                        <div class="pe-6">
                                            <a href="#" class>{{$cart->name}}<span class="text-body">
                                                    </span></a>
                                            <p class="fs-14px text-body-emphasis mb-0 mt-1">Qty:
                                                <span class="text-body">{{$cart->qty}}</span>
                                            </p>
                                        </div>
                                        <div class="ms-auto">
                                            <p class="fs-14px text-body-emphasis mb-0 fw-bold">Rs.{{$cart->price}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                
                            @endif
                            
                            {{-- <div class="d-flex w-100 mb-7">
                                <div class="me-6">
                                    <img src="#" data-src="../assets/images/others/shopping-cart-03.jpg"
                                        class="lazy-image" width="60" height="80" alt="Cleansing Balm">
                                </div>
                                <div class="d-flex flex-grow-1">
                                    <div class="pe-6">
                                        <a href="#" class>Cleansing Balm<span class="text-body"> x1</span></a>
                                        <p class="fs-14px text-body-emphasis mb-0 mt-1">Size:
                                            <span class="text-body">Fullsize</span>
                                        </p>
                                        <p class="fs-14px text-body-emphasis mb-0 mt-1">Color:
                                            <span class="text-body">Green - Revitalizing</span>
                                        </p>
                                    </div>
                                    <div class="ms-auto">
                                        <p class="fs-14px text-body-emphasis mb-0 fw-bold">$29.00</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="card-body px-10 py-8">
                            <div class="d-flex align-items-center mb-2">
                                <span>Subtotal:</span>
                                <span class="d-block ms-auto text-body-emphasis fw-bold">Rs.{{Cart::subtotal();}}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span>Shipping:</span>
                                <span class="d-block ms-auto text-body-emphasis fw-bold">Rs.0</span>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent py-5 px-0 mx-10">
                            <div class="d-flex align-items-center fw-bold mb-6">
                                <span class="text-body-emphasis p-0">Total pricre:</span>
                                <span class="d-block ms-auto text-body-emphasis fs-4 fw-bold">Rs.{{Cart::subtotal();}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-first pe-xl-20 pe-lg-6">
                    <div class="checkout">
                        <p class="mb-5">Returning customer?
                            <a href="#" data-bs-toggle="modal" data-bs-target="#signInModal">Click here to login</a>
                        </p>
                        <p>Have a coupon?
                            <a data-bs-toggle="collapse" href="#collapsecoupon" role="button" aria-expanded="false"
                                aria-controls="collapsecoupon">Click here to enter your code</a>
                        </p>
                        <div class="collapse" id="collapsecoupon">
                            <div class="card mw-60 border-0">
                                <div class="card-body py-10 px-8 my-10 border">
                                    <p class="card-text text-body-emphasis mb-8">
                                        If you have a coupon code, please apply it below.</p>
                                    <div class="input-group position-relative">
                                        <input type="email" class="form-control bg-body rounded-end"
                                            placeholder="Your Email*">
                                        <button type="submit"
                                            class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary">
                                            Apply Coupon
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="fs-4 pt-4 mb-7">Shipping Information</h4>
                        <div class="mb-7">
                            
                            <div class="row">
                                <div class="col-md-6 mb-md-0 mb-7">
                                    <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">name</label>
                                    <input type="text" class="form-control is-invalid" id="first-name" name="name" placeholder="Your Name" required value="{{ $add ? $add->name : '' }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">email</label>

                                    <input type="email" class="form-control" id="email" value="{{ $add ? $add->email : '' }}" name="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-7">
                            <div class="row">
                                <div class="col-md-12 mb-md-0 mb-7">
                                    <label for="street-address"
                                        class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Street
                                        Address</label>
                                    <input type="text" class="form-control" value="{{ $add ? $add->address : '' }}" id="street-address" name="address"
                                        required>
                                </div>
                                {{-- <div class="col-md-4">
                                    <label for="apt"
                                        class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">APT/Suite</label>
                                    <input type="text" class="form-control" id="apt" name="apt" required>
                                </div> --}}
                            </div>
                        </div>
                        <div class="mb-7">
                            <div class="row">
                                <div class="col-md-4 mb-md-0 mb-7">
                                    <label for="city"
                                        class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">City</label>
                                    <input type="text" class="form-control" value="{{ $add ? $add->city : '' }}" id="city" name="city" required>
                                </div>
                                <div class="col-md-4 mb-md-0 mb-7">
                                    <label for="state"
                                        class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">State</label>
                                    <input type="text" class="form-control" value="{{ $add ? $add->state : '' }}" id="state" name="state" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="zip"
                                        class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">zip
                                        code</label>
                                    <input type="text" class="form-control" value="{{ $add ? $add->zip : '' }}" id="zip" name="zip" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-7">
                            <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Country</label>
                            <div class="dropdown bg-body-secondary rounded">
                                <select
                                    class="form-select dropdown-toggle d-flex justify-content-between align-items-center text-decoration-none text-secondary p-5 position-relative d-block"
                                    role="button" data-bs-toggle="dropdown" name="country" aria-expanded="false">
                                    
                                
                                    <div class="dropdown-menu w-100 px-0 py-4">
                                        @foreach ($country as $c)
                                            <option class="dropdown-item px-6 py-4" value="{{ $c->code }}" {{ $add && $add->country == $c->code ? 'selected' : '' }}>
                                                {{ $c->name }}
                                            </option>
                                        @endforeach
                                    </div>
                                    
                            </select>
                            </div>
                        </div>
                        <div class="mb-7">
                            <label class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Phone</label>
                            <div class="row">
                                {{-- <div class="col-md-6 mb-md-0 mb-7">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email" required>
                                </div> --}}
                                <div class="col-md-12">
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        placeholder="03000000000" value="{{ $add ? $add->phone : '' }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 mb-5 form-check">
                            <input type="checkbox" class="form-check-input rounded-0 me-4" name="customCheck6"
                                id="customCheck5">
                            <label class="text-body-emphasis" for="customCheck5">
                                <span class="text-body-emphasis">Billing address is the same as shipping</span>
                            </label>
                        </div>
                    </div>
                    <div class="checkout mb-7">
                        <div class="mb-7">
                            <h4 class="fs-4 mb-8 mt-12 pt-lg-1">Payment Infomation</h4>
                            <div class="nav nav-tabs border-0">
                                <a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link" data-bs-toggle="tab"
                                    data-bs-target="#paypal-tab">
                                    <svg class="icon icon-paylay fs-32px text-body-emphasis">
                                        <use xlink:href="#icon-paylay"></use>
                                    </svg>
                                    <span class="ms-3 text-body-emphasis fw-semibold fs-6">Paypal</span>
                                </a>
                                {{-- <a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link active"
                                    data-bs-toggle="tab" data-bs-target="#credit-card-tab">
                                    <svg class="icon icon-paylay fs-32px text-body-emphasis">
                                        <use xlink:href="#icon-card"></use>
                                    </svg>
                                    <span class="ms-3 text-body-emphasis fw-semibold fs-6">Credit Card</span>
                                </a> --}}
                                <a class="btn btn-payment px-12 mx-2 py-6 me-7 my-3 nav-link active"
                                data-bs-toggle="tab" data-bs-target="#credit-card-tab"><i class="fa-regular fa-truck fa-xl"></i><span class="ms-3 text-body-emphasis fw-semibold fs-6"> POD</span></a>
                                
                            </div>
                            <div class="tab-content mt-7">
                                <div class="tab-pane fade" id="paypal-tab">
                                    <div class>
                                        <div class="row">
                                            <div class="col-md-6 mb-7">
                                                <label for="your-email"
                                                    class="mb-5 fs-13px letter-spacing-01 fw-bold text-uppercase">Email</label>
                                                    <input type="hidden" name="payment" value="paypal">
                                                    <input name="paymentEmail" type="email" class="form-control"
                                                    id="your-email" placeholder="Your email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="password"
                                                    class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">Password</label>
                                                <input name="paymentPassword" type="password" class="form-control"
                                                    id="password" placeholder="******">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active show fade" id="credit-card-tab">
                                    <div class>
                                        <div class="mb-7">
                                            <label
                                                class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">CREDIT
                                                CARD
                                                NUMBER</label>
                                            <div class="row align-items-center">
                                                <div class="col-md-6 mb-md-0 mb-7">
                                                    <input type="hidden" name="payment" value="card">
                                                    <input name="creditCardText" type="text" class="form-control"
                                                        placeholder="**** **** **** ****">
                                                </div>
                                                <div class="col-md-6">
                                                    <img src="../assets/images/others/Paypal.jpg" alt="Paypal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-7">
                                            <div class="row align-items-end">
                                                <div class="col-md-8">
                                                    <div class="row align-items-end">
                                                        <div class="col-md-6 mb-md-0 mb-7">
                                                            <label
                                                                class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">EXPIRATION
                                                                DATE</label>
                                                            <select name="inputMonth" id="inputMonth"
                                                                class="form-select px-6 border-0">
                                                                <option selected>Month
                                                                </option>
                                                                <option>January
                                                                </option>
                                                                <option>February
                                                                </option>
                                                                <option>March
                                                                </option>
                                                                <option>April
                                                                </option>
                                                                <option>May
                                                                </option>
                                                                <option>June
                                                                </option>
                                                                <option>July
                                                                </option>
                                                                <option>August
                                                                </option>
                                                                <option>September
                                                                </option>
                                                                <option>October
                                                                </option>
                                                                <option>November
                                                                </option>
                                                                <option>December
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-md-0 mb-7">
                                                            <label
                                                                class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase opacity-0 d-md-block d-none">Year</label>
                                                            <select name="inputYear" id="inputYear"
                                                                class="form-select border-0 px-6">
                                                                <option selected>Year
                                                                </option>
                                                                <option>2010
                                                                </option>
                                                                <option>2011
                                                                </option>
                                                                <option>2012
                                                                </option>
                                                                <option>2013
                                                                </option>
                                                                <option>2014
                                                                </option>
                                                                <option>2015
                                                                </option>
                                                                <option>2016
                                                                </option>
                                                                <option>2017
                                                                </option>
                                                                <option>2018
                                                                </option>
                                                                <option>2019
                                                                </option>
                                                                <option>2020
                                                                </option>
                                                                <option>2021
                                                                </option>
                                                                <option>2022
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-md-4 mb-md-0 mb-7">
                                                    <label
                                                        class="mb-5 fs-13px letter-spacing-01 fw-semibold text-uppercase">SECURITY
                                                        CODE</label>
                                                    <input type="email" class="form-control bg-body-secondary">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary px-11 mt-md-7 mt-4">Place
                            Order</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection