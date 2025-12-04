    <!-- sign in area start -->

    {{-- <div class="modal-body">
        <div class="account-top">
            <div class="account-top-link">
                <a href="{{ route('register_show') }}">Sign Up</a>
            </div>
            <div class="account-top-current">
                <span>Sign In</span>
            </div>
        </div> --}}

    <!-- Display Session Error -->
    {{-- @if (session('error'))
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
    </div> --}}

    <!-- sign in area end -->

    {{-- ----------------------------------------------------------------------------- --}}

    <!-- sign in area start -->

    <div class="modal-body">
        <div class="account-top">
            <div class="account-top-link">
                <a href="#" id="btn-signup" data-target-content="login-body">Sign Up</a>
            </div>
            <div class="account-top-current">
                <span>Sign In</span>
            </div>
        </div>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="account-main">
            <div id="login-body" class="modal-content-section">
                <h3 class="account-title">Sign in to Your Account 👋</h3>
                <form action="{{ route('login_store') }}" class="account-form" method="POST">
                    @csrf
                    <div class="account-form-item mb-20">
                        <div class="account-form-label">
                            <label>Your Email</label>
                        </div>
                        <div class="account-form-input">
                            <input type="email" placeholder="Enter Your Email" name="email" id="email">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="account-form-item mb-15">
                        <div class="account-form-label">
                            <label>Your Password</label>
                            <a href="{{ route('password.request') }}"><span class="text-primary"><small>Forgot Password
                                        ?</small></span></a>
                        </div>

                        <div class="account-form-input account-form-input-pass">
                            <input type="password" placeholder="*********" name="password">
                            <span><i class="fa-thin fa-eye"></i></span>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="account-form-condition">
                        <label class="condition_label">Remember Me
                            <input type="checkbox" name="remember">
                            <span class="check_mark"></span>
                        </label>
                    </div>

                    <div class="account-form-button">
                        <button type="submit" class="account-btn">Sign In</button>
                    </div>
                </form>
            </div>
            <div id="register-body" class="modal-content-section" style="display: none">
                <h3 class="account-title">Sign in to Your Account </h3>
                <form action="{{ route('register_store') }}" class="account-form" method="POST">
                    @csrf
                    <div class="account-form-item mb-20">
                        <div class="account-form-label">
                            <label>First Name</label>
                        </div>
                        <div class="account-form-input">
                            <input type="text" placeholder="First Name" name="name">
                        </div>
                    </div>

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

                        </div>
                        <div class="account-form-input account-form-input-pass">
                            <input type="text" placeholder="*********" name="password">
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
            </div>

            <div class="account-break"><span>OR</span></div>

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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggle = document.querySelector(".account-form-input-pass span i");
            const input = document.querySelector(".account-form-input-pass input");

            toggle.addEventListener("click", () => {
                if (input.type === "password") {
                    input.type = "text";
                    toggle.classList.remove("fa-eye");
                    toggle.classList.add("fa-eye-slash");
                } else {
                    input.type = "password";
                    toggle.classList.remove("fa-eye-slash");
                    toggle.classList.add("fa-eye");
                }
            });


            //------------------------------------------------------

                // Function to switch content within the modal
                function switchModalContent(targetContentId) {
                    $('.modal-content-section').hide(); // Hide all content sections
                    $('#' + targetContentId).show(); // Show the target content section
                }

                // Event listener for buttons that trigger content switching
                $('#btn-signup').on('click', '.switch-content', function() {
                    const targetContent = $(this).data('target-content');
                    switchModalContent(targetContent);
                });

                // Optional: Reset content to default when modal is hidden
                $('#myDynamicModal').on('hidden.bs.modal', function() {
                    switchModalContent('register-body'); // Show default content (Option 1)
                });

        });
    </script>



    <!-- sign in area end -->

    {{-- ---------------------------------------------------------------------- --}}

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
