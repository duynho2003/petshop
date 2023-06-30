<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petco - Forgot Password</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fe/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/fe/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/cart.css') }}">


</head>

<body>
    @include('fe.layouts.loadscroll')

    <!-- header-area -->
    @include('fe.layouts.header')
    <!-- header-area-end -->
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset ('fe/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{--
                    <div class="breadcrumb-content">
                        <h2 class="title">Log In</h2>
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Log In</li>
                    </ol>
                    </nav>
                </div>
                --}}
            </div>
        </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!--Sign in-->
    <!-- contact-area -->
    <section class="contact-area pt-110 pb-110">
        <div class="container">
            <div class="container-inner-wrap">
                <div class="row justify-content-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-8 order-2 order-lg-0">
                        <div class="contact-title mb-20">
                            <h2 class="title">Reset Password<span>.</span></h2>
                        </div>
                        <div class="contact-wrap-content">
                            <form action="{{ Route ('processForgotPassword') }}" class="contact-form" method="POST" class="form">
                                @csrf
                                @error('email')
                                <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                                @if(session('success'))
                                <p class="alert alert-success">{{ session('success') }}</p>
                                @endif

                                <div class="form-grp">
                                    <label for="name">Enter Your Email <span>*</span></label>
                                    <input type="email" placeholder="Email" name="email" />
                                </div>

                                <!-- <div class="form-grp">
                                    <label for="email">Verification Code<span>*</span></label>
                                    <input type="password" placeholder="Password" name="password" required />
                                </div> -->

                                <div>
                                    <button type="submit" class="btn rounded-btn">Submit</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <!-- main-area-end -->

    <!-- footer-start -->
    @include('fe.layouts.footer')
    <!-- footer-end -->

    <!-- JS here -->
    @include('fe.layouts.master')

</body>

</html>