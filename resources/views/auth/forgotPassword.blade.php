@extends('layouts.backend.main')

@section('title', 'Forgotten Password')

@section('LogReg')
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
        style="background:url({{ Vite::asset('resources/backend/assets/image/big/auth-bg.jpg') }}) no-repeat center center;">
        <div class="auth-box row text-center">
            <div class="col-lg-7 col-md-5 modal-bg-img"
                style="background-image: url({{ Vite::asset('resources/backend/assets/images/logo/1.png') }});">
            </div>
            <div class="col-lg-5 col-md-7 bg-white">
                <div class="p-3">
                    <img src="{{ Vite::asset('resources/backend/assets/images/big/icon.png') }}" alt="wrapkit">
                    <h2 class="mt-3 text-center">Sign Up for Free</h2>
                    <form class="mt-4" action="{{ }}" method="post" id="frm_forgot_pw">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input class="form-control" type="email" placeholder="Email Address" name="email">
                                </div>
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
