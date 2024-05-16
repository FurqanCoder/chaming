@extends('dashboard.auth.authlayout.dash')
@section('content')
    <div class="main-content login-panel">
        <div class="login-body p-3">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="dashboad/assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="dashboard-index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-primary-button class="btn btn-primary w-100 login-btn">
                            {{ __('Resend Verification Email') }}
                        </x-primary-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                        class="float-rights text-center mt-3 b-none" style="background-color: gray;color:white;">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright©
                <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">sk Solutions</span>
            </p>
        </div>
        <!-- footer end -->
    </div>
@endsection
