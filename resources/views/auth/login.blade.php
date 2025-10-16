<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16"
            href="{{ Vite::asset('resources/backend/assets/images/logo/titlelogos.png') }}">
        <title>Login</title>
        <!-- Custom CSS -->
        @vite(['resources/backend/assets/extra-libs/c3/c3.min.css', 'resources/backend/assets/libs/chartist/dist/chartist.min.css', 'resources/backend/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css', 'resources/backend/dist/css/style.min.css'])
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
        <!-- Custom CSS -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->


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
                                        <a href="{{ route('password.request') }}" class="fs-6 text-start">Forgot Password</a>
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
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        @include('layouts.backend.includes.scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </body>

</html>
