<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petco - Register</title>
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
    <link rel="stylesheet" href="{{ asset('/fe/css/register.css') }}">
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
                    <div class="breadcrumb-content">
                        <h2 class="title">Register</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!--Sign up-->
    <!-- contact-area -->
    <section class="container">
        @if($errors->has('errors_confirm_password'))
        <div class="alert alert-danger">
            {{ $errors->first('errors_confirm_password') }}
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            <li>&#9888 Error, something went wrong!</li>
                @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ Route ('processRegister') }}" class="form" method="POST">
            @csrf

            <div class="column">
                <div class="input-box">
                    <label>First Name</label>
                    <input type="text" placeholder="Enter Your First Name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" />
                </div>
                <div class="input-box">
                    <label>Last Name</label>
                    <input type="text" placeholder="Enter Your Last Name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" />
                </div>
            </div>

            <div class="input-box">
                <label>Email</label>
                <input type="email" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror" name="email" />
            </div>
            <div class="input-box">
                <label>Password<span></span></label>
                <input type="password" placeholder="Enter Your Password" class="form-control @error('password') is-invalid @enderror" name="password"  />
            </div>

            <div class="input-box">
                <label>Confirm Password<span></span></label>
                <input type="password" placeholder="Enter Your Confirm Password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter your Phone Number" class="form-control @error('phone') is-invalid @enderror" name="phone"  />
                </div>
                <div class="input-box">
                    <label>Date of Birth</label>
                    <input type="date" placeholder="Enter your Date of Birth" class="form-control @error('birthday') is-invalid @enderror" name="birthday" max="<?php echo date('Y-m-d'); ?>" />
                </div>
            </div>
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender" value="male" checked />
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender" value="female" />
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="gender" value="other" />
                        <label for="check-other">Prefer not to say</label>
                    </div>
                </div>
            </div>

            <div class="input-box">
                <label>Address<span></span></label>
                <input type="text" placeholder="Enter Your Address" class="form-control @error('address') is-invalid @enderror" name="address" />
            </div>

            <div class="container-button">
                <div class="vertical-center">
                    <button type="submit" class="btn rounded-btn">Register</button>
                </div>
            </div>
            </div>
        </form>
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