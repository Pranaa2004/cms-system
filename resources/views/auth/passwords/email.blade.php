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
        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <div class="row w-100 justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card shadow-sm p-4">
                        <div class="card-header text-center bg-primary text-white fs-4 fw-bold rounded">
                            Forgot Password
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary p-2">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </form>

                            <div class="text-center mt-3">
                                <a href="{{ route('login_show') }}" class="btn btn-link">
                                    Back to Login
                                </a>
                            </div>
                        </div>
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>

</html>
