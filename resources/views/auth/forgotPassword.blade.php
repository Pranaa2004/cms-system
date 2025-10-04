@extends('layouts.backend.main')

@section('title', 'Forgot Password')

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
                    <h5 class="mt-3 text-center">Forgot Password</h5>

                    <!-- Login Form -->
                    <form class="mt-4" action="#" method="post">
                        @csrf
                        <div class="row">
                            <!-- Username -->
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label text-dark" for="uname">Email</label>
                                    <input class="form-control" id="uname" type="email" name="email"
                                        placeholder="name@gmail.com" required>
                                </div>
                            </div>

                            <!-- Reset Button -->
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn w-100 btn-dark">Reset Password</button>
                            </div>

                            <!-- Login Link -->
                            <div class="col-lg-12 mt-5">
                                Back to
                                <a href="{{ route('login_show') }}" class="text-danger">Log In</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
