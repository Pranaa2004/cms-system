
        {{-- <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url({{ Vite::asset('resources/backend//assets/image/big/auth-bg.jpg') }}) no-repeat center center;">
            <div class="auth-box row text-center">
                <div class="col-lg-7 col-md-5 modal-bg-img"
                    style="background-image: url({{ Vite::asset('resources/backend/assets/images/logo/1.png') }});">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <img src="{{ Vite::asset('resources/backend/assets/images/big/icon.png') }}" alt="wrapkit">
                        <h2 class="mt-3 text-center">Sign Up for Free</h2>
                        <form class="mt-4" action="{{ route('register_store') }}" method="post" id="frm_register">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input class="form-control" type="text" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input class="form-control" type="email" placeholder="Email Address"
                                            name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Enter your password" name="password">
                                            <span class="input-group-text" id="togglePassword">
                                                <i class="far fa-eye-slash" id="eyeIcon"></i>
                                                <!-- Font Awesome eye-slash icon -->
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="confirm_password"
                                            placeholder="Confirm your password" name="password_confirmation">
                                        <span class="input-group-text" id="togglePassword2">
                                            <i class="far fa-eye-slash" id="eyeIcon2"></i>
                                            <!-- Font Awesome eye-slash icon -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn w-100 btn-dark">Sign Up</button>
                            </div>
                            <div class="col-lg-12 text-center mt-5">
                                Already have an account? <a href="{{ route('login_show') }}" class="text-danger">Sign
                                    In</a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div> --}}



@extends('layouts.frontend.main')

@section('title', 'Sign-up')

<!-- breadcrumb area start -->
@section('brd_crm_list', 'Sign Up')
<!-- breadcrumb area end -->

@section('content')
    <!-- sign up area start -->
    <div class="account-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="account-wrap">
                        <div class="account-top sign-up">
                            <div class="account-top-current">
                                <span>Sign Up</span>
                            </div>
                            <div class="account-top-link">
                                <a href="{{ route('login_show') }}">Sign In</a>
                            </div>
                        </div>
                        <div class="account-main">
                            <h3 class="account-title">Sign in to Your Account </h3>
                            <form action="{{ route('register_store') }}" class="account-form" method="POST">
                                <div class="account-form-item mb-20">
                                    <div class="account-form-label">
                                        <label>First Name</label>
                                    </div>
                                    <div class="account-form-input">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="account-form-item mb-20">
                                    <div class="account-form-label">
                                        <label>Last Name</label>
                                    </div>
                                    <div class="account-form-input">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="account-form-item mb-20">
                                    <div class="account-form-label">
                                        <label>Your Email</label>
                                    </div>
                                    <div class="account-form-input">
                                        <input type="email" placeholder="Enter Your Email">
                                    </div>
                                </div>
                                <div class="account-form-item mb-15">
                                    <div class="account-form-label">
                                        <label>Your Password</label>
                                        <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                    </div>
                                    <div class="account-form-input account-form-input-pass">
                                        <input type="text" placeholder="*********">
                                        <span><i class="fa-thin fa-eye"></i></span>
                                    </div>
                                </div>
                                <div class="account-form-condition">
                                    <label class="condition_label">Remember Me
                                        <input type="checkbox">
                                        <span class="check_mark"></span>
                                    </label>
                                </div>
                                <div class="account-form-button">
                                    <button type="submit" class="account-btn">Sign Up</button>
                                </div>
                            </form>
                            <div class="account-break">
                                <span>OR</span>
                            </div>
                            <div class="account-bottom">
                                <div class="account-option">
                                    <a href="#" class="account-option-account">
                                        <img src="assets/img/bg/google.png" alt="">
                                        <span>Google</span>
                                    </a>
                                    <a href="#" class="account-option-account">
                                        <img src="assets/img/bg/apple.png" alt="">
                                        <span>Apple</span>
                                    </a>
                                    <a href="#" class="account-option-account">
                                        <img src="assets/img/bg/facebook.png" alt="">
                                        <span>Facebook</span>
                                    </a>
                                </div>
                                <div class="account-bottom-text">
                                    <p>Already have an account ? <a href="sign-in.html">Sign In for here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up area end -->

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
