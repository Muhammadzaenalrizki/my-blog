<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Zaenal</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>

<body>


    <!-- ========== signin-section start ========== -->
    <section class="signin-section">
        <div class="container-fluid">

            <div class="row g-0 auth-row">
                <div class="col-lg-6">
                    <div class="auth-cover-wrapper bg-primary-100">
                        <div class="auth-cover">
                            <div class="title text-center">
                                <h1 class="text-primary mb-10">Welcome Back Zaenal</h1>
                                <p class="text-medium">
                                    I love you ❤️
                                </p>
                            </div>
                            <div class="cover-image">
                                <img src="{{ asset('assets/images/auth/signin-image.svg') }}" alt="" />
                            </div>
                            <div class="shape-image">
                                <img src="{{ asset('assets/images/auth/shape.svg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6">
                    <div class="signin-wrapper">
                        <div class="form-wrapper">
                            <h6>Login</h6>
                            <p class="text-sm mb-25">
                                start your day with a smile {{ ':)' }}
                            </p>
                            <form action="{{ route('auth') }}" method="post">
                                @csrf
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <br>
                                @error('password')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Username</label>
                                            <input type="text" name="email" placeholder="Username" />
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password" />
                                        </div>
                                    </div>


                                    <!-- end col -->
                                    <div class="col-12">
                                        <div
                                            class="
                            button-group
                            d-flex
                            justify-content-center
                            flex-wrap
                          ">
                                            <button
                                                class="
                              main-btn
                              primary-btn
                              btn-hover
                              w-100
                              text-center
                            ">
                                                Sign In
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </section>
    <!-- ========== signin-section end ========== -->



</body>

</html>
