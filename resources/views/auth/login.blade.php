@extends('layouts.backend.main')

@section('title', 'Login')

@section('LogReg')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
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
                    <img src="{{ Vite::asset('resources/backend/assets/images/big/icon.png') }}" alt="Admin Panel Logo">
                </div>
                <h2 class="mt-3 text-center">Sign In</h2>

                <!-- Display Session Error -->
                @if(session('error'))
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
                            <div class="form-check mb-3 text-start">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
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
</div>
@endsection
