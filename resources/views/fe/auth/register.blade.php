<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petco - Pet Breeder & Adoption HTML Template</title>
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
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="{{ Route ('processRegister') }}" class="form" method="POST">
            @csrf
            <!-- <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter Full Name" required />
            </div> -->

            <div class="column">
                <div class="input-box">
                    <label>First Name</label>
                    <input type="text" placeholder="Enter first name" name="first_name" required />
                </div>
                <div class="input-box">
                    <label>Last Name</label>
                    <input type="text" placeholder="Enter last name " name="last_name" required />
                </div>
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="text" placeholder="Enter Email Address" name="email" required />
            </div>
            <div class="input-box">
                <label>Password<span></span></label>
                <input type="password" placeholder="Enter Your Password" name="password" required />
            </div>

            <div class="input-box">
                <label>Confirm Password<span></span></label>
                <input type="password" placeholder="Enter Your Confirm Password" name="confirm_password" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter phone number" name="phone" required />
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input type="date" placeholder="Enter birth date" name="birthday" max="<?php echo date('Y-m-d',  strtotime('-1 day')); ?>" required />
                </div>
            </div>
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender" value="male" checked />
                        <label for="check-male">male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender" value="female" />
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="gender" value="other" />
                        <label for="check-other">prefer not to say</label>
                    </div>
                </div>
            </div>

            <div class="input-box">
                <label>Address<span></span></label>
                <input type="text" placeholder="Enter Your Address" name="address" required />
            </div>


            <!-- <div class="input-box address">
                <label>Address</label>
                <input type="text" placeholder="Enter street address" required />
                <input type="text" placeholder="Enter street address line 2" required />
                <div class="column">
                    <div class="select-box">
                        <select>
                            <option hidden>Country</option>
                            <option>America</option>
                            <option>VietNam</option>
                            <option>TaiWan</option>
                            <option>China</option>
                        </select>
                    </div>
                    <input type="text" placeholder="Enter your city" required />
                </div>
                <div class="column">
                    <input type="text" placeholder="Enter your region" required />
                    <input type="number" placeholder="Enter postal code" required />
                </div>-->
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