@extends('layouts.backend.main')

@section('title', 'Login')

@section('LogReg')

    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
        style="background:url({{ Vite::asset('resources/backend/asets/images/big/auth-bg.jpg') }}) no-repeat center center;">
        <div class="auth-box row">
            <div class="col-lg-7 col-md-5 modal-bg-img"
                style="background-image: url({{ Vite::asset('resources/backend/assets/images/logo/1.png') }});">
            </div>
            <div class="col-lg-5 col-md-7 bg-white">
                <div class="p-3">
                    <div class="text-center">
                        <img src="{{ Vite::asset('resources/backend/assets/images/big/icon.png') }}" alt="wrapkit">
                    </div>
                    <h2 class="mt-3 text-center">Sign In</h2>
                    <p class="text-center">Enter your email address and password to access admin panel.</p>
                    <form class="mt-4" action="/login" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label text-dark" for="uname">Username</label>
                                    <input class="form-control" id="uname" type="text" name="username"
                                        placeholder="enter your username" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label text-dark" for="pwd">Password</label>
                                    <input class="form-control" id="pwd" type="password" name="password"
                                        placeholder="enter your password" required>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn w-100 btn-dark">Sign In</button>
                            </div>
                            <div class="col-lg-12 text-center mt-5">
                                Don't have an account? <a href="{{ route('register_show') }}" class="text-danger">Sign
                                    Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Login box.scss -->

@endsection

{{-- @vite(['resources/backend/assets/libs/jquery/dist/jquery.min.js', 'resources/backend/assets/libs/popper.js/dist/umd/popper.min.js', 'resources/backend/assets/libs/bootstrap/dist/js/bootstrap.min.js']) --}}
{{-- $(".preloader ").fadeOut(); --}}
