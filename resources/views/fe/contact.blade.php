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
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset ('fe/img/bg/breadcrumb_bg.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Contact Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area pt-110 pb-110">
            <div class="container">
                <div class="container-inner-wrap">
                    <div class="row justify-content-center justify-content-lg-between">
                        <div class="col-lg-6 col-md-8 order-2 order-lg-0">
                            <div class="contact-title mb-20">
                                <h5 class="sub-title">Contact Us</h5>
                                <h2 class="title">Let's Talk Question<span>.</span></h2>
                            </div>
                            <div class="contact-wrap-content">
                                <form action="#" class="contact-form">
                                    <div class="form-grp">
                                        <label for="name">Your Name <span>*</span></label>
                                        <input type="text" id="name" placeholder="Jon Deo...">
                                    </div>
                                    <div class="form-grp">
                                        <label for="email">Your Email <span>*</span></label>
                                        <input type="text" id="email" placeholder="info.example@.com">
                                    </div>
                                    <div class="form-grp">
                                        <label for="message">Your Message <span>*</span></label>
                                        <textarea name="message" id="message" placeholder="Opinion..."></textarea>
                                    </div>
                                    <div class="form-grp checkbox-grp">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox">Don’t show your email address</label>
                                    </div>
                                    <button type="button" class="btn rounded-btn">Send Now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="contact-info-wrap">
                                <div class="contact-img">
                                    <img src="{{ asset('fe/images/contact_img.png')}}" alt="")}}>
                                </div>
                                <div class="contact-info-list">
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="content">
                                                <p>590 Cach Mang Thang Tam</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                            <div class="content">
                                                <p>0123 456 789</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-envelope-open"></i></div>
                                            <div class="content">
                                                <p>petco@fpt.edu.vn</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- newsletter-area -->
        @include('fe.layouts.newsletter')
        <!-- newsletter-area-end -->
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
</body>

</html>