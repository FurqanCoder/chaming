@extends('dashboard.auth.authlayout.dash')
@section('content')
<div class="main-content login-panel">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="dashboad/assets/images/logo-black.png" alt="Logo">
            </div>
            <a href="dashboard-index.html"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">Login</h3>
            <form action="{{ route('login') }}" method="POST" autocomplete="off">
                @csrf
               <div class="input-group mb-30">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email address">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="input-group mb-20">
                    <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    <input type="password" class="form-control rounded-end @error('password') is-invalid @enderror" name="password" placeholder="Password">
                    <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between mb-30">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="" id="loginCheckbox">
                        <label class="form-check-label text-white" for="loginCheckbox">
                            Remember Me
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-white fs-14">Forgot Password?</a>
                </div>
                <button class="btn btn-primary w-100 login-btn">Sign in</button>
            </form>
            <div class="text-center text-secondary mt-3">
                Don't have account yet? <a href="{{ route('register') }}" tabindex="-1">
                    Sign up
                </a>
            
                
            </div>
        </div>
    </div>

    <!-- footer start -->
    <div class="footer">
        <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">sk Solutions</span></p>
    </div>
    <!-- footer end -->
</div>
@endsection