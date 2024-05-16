@extends('website.layout.app')
@section('web-content')
<main id="content" class="wrapper layout-page">
    <section class="pb-lg-20 pb-16">
        <div class="bg-body-secondary py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Register
                    </li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <div class=" text-center pt-13 mb-12 mb-lg-15">
                <div class="text-center">
                    <h2 class="fs-36px mb-11 mb-lg-14">Register</h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-8 mx-auto">
                <form class action="{{ route('web-register') }}" method="POST" enctype="multipart/form-data">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="mb-6">
                        <label for="first_name" class="visually-hidden">User Name</label>
                        <input name="name" id="first_name" type="text" class="form-control" placeholder="Name"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="visually-hidden">Email address</label>
                        <input name="email" id="email" type="email" class="form-control"
                            placeholder="Your email" required>
                    </div>
                    <div class="mb-7">
                        <label for="password" class="visually-hidden">Password</label>
                        <input name="password" id="password" type="password" class="form-control"
                            placeholder="Password" required>
                    </div>
                    <div class="mb-6">
                        <label for="last_name" class="visually-hidden">Password Confirmation</label>
                        <input name="password_confirmation" id="last_name" type="password" class="form-control"
                            placeholder="Confirm Password" required>
                    </div>
                    <div class="mb-6">
                        <label for="last_name" class="">Profile Image (optional)</label>
                        <input name="profile_img" id="last_name" type="file" class="form-control" placeholder="">
                    </div>
                    <div class="form-check mb-7">
                        <input name="agree" type="checkbox" name="terms" class="form-check-input rounded-0" id="agree_terms"
                            required>
                        <label class="form-check-label text-secondary" for="agree_terms">
                            Yes, I agree with Grace <a href="#" class="text-decoration-underline">Privacy
                                Policy</a> and <a href="#" class="text-decoration-underline">Terms of
                                Use</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    <div class="border-bottom mt-10"></div>
                    <div class="text-center mt-n4 lh-1 mb-7">
                        <span class="fs-14 bg-body lh-1 px-4">or Sign Up with</span>
                    </div>
                    <div class="d-flex">
                        <a href="{{route('facebook-login')}}" class="btn btn-outline-primary w-100 px-2 font-weight-500 me-5"><i
                                class="fab fa-facebook-f me-4" style="color: #2E58B2"></i>Facebook</a>
                        <a href="{{route('google-login')}}" class="btn btn-outline-primary w-100 px-2 font-weight-500 mt-0"><i
                                class="fab fa-google me-4" style="color: #DD4B39"></i>Google</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection