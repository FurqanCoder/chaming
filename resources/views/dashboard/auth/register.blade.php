@extends('dashboard.auth.authlayout.dash')
@section('content')

<div class="main-content login-panel">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="{{asset('dashboad/assets/images/logo-black.png')}}" alt="Logo">
            </div>
            <a href="dashboard-index.html"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">Registration</h3>
            <form action="{{ route('register') }}" method="POST" autocomplete="off">    
                    @csrf
                <div class="input-group mb-30">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="input-group mb-30">
                    <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email">
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
                <div class="input-group mb-20">
                    <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="d-flex justify-content-between mb-30">
                    <div class="form-check">
                        <input class="form-check-input @error('terms-of-service') is-invalid @enderror" name="terms-of-service" type="checkbox" value="1" id="loginCheckbox">
                        <label class="form-check-label text-white" for="loginCheckbox">
                            I agree <a href="#" class="text-white text-decoration-underline">Terms & Policy</a>
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary w-100 login-btn">Sign up</button>
            </form>
            <div class="other-option">
                <p>Already you have a account? <a href="{{route('login')}}">Login</a></p>
                
            </div>
        </div>
    </div>

    <!-- footer start -->
    <div class="footer">
        <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Sk Developers</span></p>
    </div>
    <!-- footer end -->
</div>
@endsection
