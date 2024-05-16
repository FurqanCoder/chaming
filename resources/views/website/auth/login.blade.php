@extends('website.layout.app')
@section('web-content')
<main id="content" class="wrapper layout-page">
    <section class="pb-lg-20 pb-16">
        <div class="container">
            <div class=" text-center pt-13 mb-12 mb-lg-15">
                <div class="text-center">
                    <h2 class="fs-36px mb-11 mb-lg-14">My Account</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-10 mx-auto">
                    <div class="row no-gutters">
                        <div class="col-lg-6 mb-15 mb-lg-0 pe-xl-2">
                            <h3 class="fs-4 mb-10">Log In</h3>
                            <form class method="post" action="{{route('web-login')}}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="list-style: none">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (isset($success) && $success->any())
                                    <div class="alert alert-success">
                                        <ul>
                                            @foreach ($success->all() as $suc)
                                                <li>{{ $suc }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group mb-6">
                                    <label for="user_login_email" class="visually-hidden">Email address</label>
                                    <input type="email" class="form-control" id="user_login_email" name="email"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="form-group mb-6">
                                    <label for="user_login_password" class="visually-hidden">Password</label>
                                    <input type="password" class="form-control" id="user_login_password"
                                        placeholder="Password" name="password" required>
                                </div>
                                <a href="#" class="d-inline-block fs-15 lh-12 mb-7">Forgot your
                                    password?</a>
                                <button type="submit" class="btn btn-primary w-100 mb-7">Submit</button>
                                <div class="form-check mb-7 d-flex">
                                    <input type="checkbox" class="form-check-input rounded-0" id="customCheck1"
                                        name="remember">
                                    <label class="form-check-label fs-15 ps-4 text-body-emphasis"
                                        for="customCheck1">Keep me signed in.</label>
                                </div>
                                <div class="row no-gutters mx-n5">
                                    <div class="col-sm-6 mb-4 mb-sm-0 px-5">
                                        <a href="#" class="btn btn-outline-primary w-100 px-2 fw-500">
                                            <span class="d-inline-block me-4"><i
                                                    class="fab fa-facebook-f"></i></span>Continue with Facebook</a>
                                    </div>
                                    <div class="col-sm-6 mb-4 mb-sm-0 px-5">
                                        <a href="{{url('login/google')}}"
                                            class="btn btn-outline-primary w-100 px-2 fw-500">
                                            <span class="d-inline-block me-4">
                                                <i class="fab fa-google"></i>
                                            </span>Continue with Google</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 ps-lg-6 ps-xl-12">
                            <h3 class="fs-4 mb-8">New Customer</h3>
                            <p class="mb-8">By creating an account with our store, you will be able to move
                                through the
                                checkout process
                                faster, store multiple shipping addresses, view and track your orders in your
                                account and
                                more.</p>
                            <a href="{{route('web-register')}}" class="btn btn-primary">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection