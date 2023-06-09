<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petco - Pet Breeder & Adoption HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
        <form action="#" class="form">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter Full Name" required />
            </div>
            <div class="input-box">
                <label>Email Address</label>
                <input type="text" placeholder="Enter Email Address" required />
            </div>
            <div class="input-box">
                <label>Password<span></span></label>
                <input type="password" placeholder="Enter Your Password" />
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter phone number" required />
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input type="date" placeholder="Enter birth date" required />
                </div>
            </div>
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender" checked />
                        <label for="check-male">male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender" />
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="gender" />
                        <label for="check-other">prefer not to say</label>
                    </div>
                </div>
            </div>
            <div class="input-box address">
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
                </div>
                <div class="container-button">
            <div class="vertical-center">
            <button type="button" class="btn rounded-btn"><a href="acc.html">Register</a></button>
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
    <script src="{{ asset ('/fe/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset ('/fe/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('/fe/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset ('/fe/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset ('/fe/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset ('/fe/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('/fe/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset ('/fe/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset ('/fe/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset ('/fe/js/jquery.appear.js')}}"></script>
    <script src="{{ asset ('/fe/js/slick.min.js')}}"></script>
    <script src="{{ asset ('/fe/js/wow.min.js')}}"></script>
    <script src="{{ asset ('/fe/js/plugins.js')}}"></script>
    <script src="{{ asset ('/fe/js/main.js')}}"></script>
    <script src="{{ asset ('/fe/js/signin.js')}}"></script>
</body>

</html>