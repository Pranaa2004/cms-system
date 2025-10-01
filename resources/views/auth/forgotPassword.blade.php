@extends('layouts.backend.main')

@section('title', '')

@section('LogReg')
    <!-- Login box.scss -->
    <!-- ============================================================== -->
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
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
                                    <input class="form-control" type="email" placeholder="Email Address" name="email">
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
                                        <i class="far fa-eye-slash" id="eyeIcon2"></i> <!-- Font Awesome eye-slash icon -->
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn w-100 btn-dark">Sign Up</button>
                        </div>
                        <div class="col-lg-12 text-center mt-5">
                            Already have an account? <a href="{{ route('login_show') }}" class="text-danger">Sign In</a>
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

@push('script')
    <script>
        // $(document).ready(function() {
        document.addEventListener('DOMContentLoaded', function() {
            const passwordField = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
            const eyeIcon = document.getElementById('eyeIcon');

            const passwordField2 = document.getElementById('confirm_password');
            const togglePassword2 = document.getElementById('togglePassword2');
            const eyeIcon2 = document.getElementById('eyeIcon2');

            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = passwordField.getAttribute('type') === 'password' ? 'text' :
                    'password';
                passwordField.setAttribute('type', type);

                // Toggle the eye icon
                if (type === 'password') {
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');


                } else {
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');

                }
            });

            togglePassword2.addEventListener('click', function() {
                // Toggle the type attribute
                const type = passwordField2.getAttribute('type') === 'password' ? 'text' :
                    'password';
                passwordField2.setAttribute('type', type);

                // Toggle the eye icon
                if (type === 'password') {
                    eyeIcon2.classList.remove('fa-eye');
                    eyeIcon2.classList.add('fa-eye-slash');


                } else {
                    eyeIcon2.classList.remove('fa-eye-slash');
                    eyeIcon2.classList.add('fa-eye');

                }
            });
        });
        // });


        // $(document).ready(function() {
        //     let password = $('#psw').val().trim();
        //     let conpassword = $('#cpsw').val().trim();

        //     if(password == conpassword){
        //         $('msg').val("Hello");
        //     }

        //     $('#frm_register').submit(function(){
        //         alert("jiii")
        //        $('msg').val("Hello");
        //     })


        // });
    </script>
@endpush
