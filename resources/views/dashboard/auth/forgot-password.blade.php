@extends('dashboard.auth.authlayout.dash')
@section('content')
    <!-- main content start -->
    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="dashboad/assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="dashboard-index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Reset Password</h3>
                <form method="POST" action="{{ route('password.email') }}">
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
                    @csrf
                    <div class="input-group mb-30">
                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                        <input type="email" name="email" :value="old('email')" required autofocus  class="form-control" placeholder="Username or email address">
                        @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                    </div>
                    <button class="btn btn-primary w-100 login-btn">Get Link</button>
                </form>
                <div class="other-option">
                    <p class="mb-0">Remember the password? <a href="dashboard-login.html">Login</a></p>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">sK developer</span></p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->
    @endsection
