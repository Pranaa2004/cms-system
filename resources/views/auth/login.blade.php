@extends('layouts.frontend.main')

@section('title', 'Sing In')

@section('brd_crm_list', 'Sign In')

@section('content')
    <!-- sign in area start -->
    <div class="account-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="account-wrap">
                        <div class="account-top">
                            <div class="account-top-link">
                                <a href="{{ route('register_show') }}">Sign Up</a>
                            </div>
                            <div class="account-top-current">
                                <span>Sign In</span>
                            </div>
                        </div>

                        <!-- Display Session Error -->
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="account-main">
                            <h3 class="account-title">Sign in to Your Account 👋</h3>
                            <form action="{{ route('login_store') }}" class="account-form" method="POST">
                                @csrf
                                <div class="account-form-item mb-20">
                                    <div class="account-form-label">
                                        <label>Your Email</label>
                                    </div>
                                    <div class="account-form-input">
                                        <input type="email" placeholder="Enter Your Email" name="email">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="account-form-item mb-15">
                                    <div class="account-form-label">
                                        <label>Your Password</label>
                                        <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                    </div>
                                    <div class="account-form-input account-form-input-pass">
                                        <input type="text" placeholder="*********" name="password">
                                        <span><i class="fa-thin fa-eye"></i></span>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="account-form-condition">
                                    <label class="condition_label">Remember Me
                                        <input type="checkbox">
                                        <span class="check_mark"></span>
                                    </label>
                                </div>
                                <div class="account-form-button">
                                    <button type="submit" class="account-btn">Sign In</button>
                                </div>
                            </form>
                            <div class="account-break">
                                <span>OR</span>
                            </div>
                            <div class="account-bottom">
                                <div class="account-option">
                                    <a href="#" class="account-option-account">
                                        <img src="{{ Vite::asset('resources/frontend/assets/img/bg/google.png') }}" alt="">
                                        <span>Google</span>
                                    </a>
                                    <a href="#" class="account-option-account">
                                        <img src="{{ Vite::asset('resources/frontend/assets/img/bg/apple.png') }}" alt="">
                                        <span>Apple</span>
                                    </a>
                                    <a href="#" class="account-option-account">
                                        <img src="{{ Vite::asset('resources/frontend/assets/img/bg/facebook.png') }}" alt="">
                                        <span>Facebook</span>
                                    </a>
                                </div>
                                <div class="account-bottom-text">
                                    <p>Don’t have an account ? <a href="{{ route('register_show') }}">Sign Up for free</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sign in area end -->

    <!-- cta area start -->
    <div class="cta-area">
        <div class="container">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="cta-content mb-30 mb-lg-0">
                            <span class="cta-subtitle">Download App</span>
                            <h2 class="cta-title">Are you Ready to Start your
                                Online Course?</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="cta-button">
                            <a href="#" class="cta-btn"><i class="fa-brands fa-apple"></i>Apple Store</a>
                            <a href="#" class="cta-btn"><i class="fa-brands fa-google-play"></i>Play Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end -->
@endsection


{{-- <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="repeat center center;">
            <div class="auth-box row">
                <!-- Left Image Column -->
                <div class="col-lg-7 col-md-5 modal-bg-img"
                    style="background-image: url({{ Vite::asset('resources/backend/assets/images/logo/1.png') }});">
                </div>

                <!-- Right Form Column -->
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="{{ Vite::asset('resources/backend/assets/images/big/icon.png') }}"
                                alt="Admin Panel Logo">
                        </div>
                        <h2 class="mt-3 text-center">Sign In</h2>

                        <!-- Display Session Error -->
                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <!-- Login Form -->
                        <form class="mt-4" action="{{ route('login_store') }}" method="post">
                            @csrf
                            <div class="row">
                                <!-- Username -->
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="uname">Username</label>
                                        <input class="form-control" id="uname" type="email" name="email"
                                            placeholder="Enter your username" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label text-dark" for="pwd">Password</label>
                                        <input class="form-control" id="pwd" type="password" name="password"
                                            placeholder="Enter your password" required autocomplete="off">
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                <div class="col-lg-12">
                                    <div class="form mb-3">
                                        <a href="{{ route('password.request') }}" class="fs-6 text-start">Forgot
                                            Password</a>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn w-100 btn-dark">Sign In</button>
                                </div>

                                <!-- Register Link -->
                                <div class="col-lg-12 text-center mt-5">
                                    Don't have an account?
                                    <a href="{{ route('register_show') }}" class="text-danger">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
