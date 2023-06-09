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
</head>

<body>
    @include('fe.layouts.loadscroll')
    <!-- header-area -->
    @include('fe.layouts.header')
    <!-- header-area-end -->
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Get Adoption</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Adoption</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- breeder-area -->
        <section class="inner-breeder-area breeder-bg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-4 col-lg-9 col-md-12 col-sm-9">
                        <div class="adoption-content">
                            <h5 class="sub-title">Meet Adoption</h5>
                            <h2 class="title">Work For <span>Adoption</span> Happy Time</h2>

                            <div class="adoption-list">
                                <ul>
                                    <li><i class="flaticon-tick"></i> Embark Breed & Health</li>
                                    <li><i class="flaticon-tick"></i> The domestic dog is a domesticated</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-md-12 col-sm-9">
                        <div class="breeder-info-wrap">
                            <div class="row no-gutters justify-content-center">
                                <div class="col-md-6">
                                    <div class="breeder-active owl-carousel">
                                        <div class="breeder-item">
                                            <a href="breeder-details.html">
                                                <img src="img/images/breeder_img01.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="breeder-item">
                                            <a href="breeder-details.html">
                                                <img src="img/images/breeder_img02.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="breeder-item">
                                            <a href="breeder-details.html">
                                                <img src="img/images/breeder_img03.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="breeder-item">
                                            <a href="breeder-details.html">
                                                <img src="img/images/breeder_img04.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="breeder-item">
                                            <a href="breeder-details.html">
                                                <img src="img/images/breeder_img05.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="breed-services-info" data-background="img/bg/breed_services_bg.jpg">
                                        <h5 class="sub-title">Dog Adoption</h5>
                                        <h3 class="title">Available for Adoption</h3>
                                        <p>The best overall dog DNA test is Embark Breed & Health Kit (view at Chewy),
                                            which
                                            provid dogs</p>
                                        <a href="dog-list.html" class="btn">More Pets <img src="img/icon/w_pawprint.png"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-area mt-70">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h2 class="count"><span class="odometer" data-count="73"></span>%</h2>
                                <p>dogs are first bred</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h2 class="count"><span class="odometer" data-count="259"></span>+</h2>
                                <p>Most dogs are first</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h2 class="count"><span class="odometer" data-count="39"></span>K</h2>
                                <p>Dog Breeding</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item">
                                <h2 class="count"><span class="odometer" data-count="45"></span>+</h2>
                                <p>Years Of History</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breeder-area-end -->

        <!-- adoption-shop-area -->
        <section class="adoption-shop-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-65">
                            <div class="section-icon"><img src="img/icon/pawprint.png" alt=""></div>
                            <h5 class="sub-title">Meet the animals</h5>
                            <h2 class="title">Puppies Waiting for Adoption</h2>
                            <p>Adorable dogs ready to go new homes, please give them a chance to have a family</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="adoption-shop-item">
                            <div class="adoption-shop-thumb">
                                <img src="img/product/adoption_shop_thumb01.jpg" alt="">
                                <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png"
                                        alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="shop-details.html">Mister Tartosh</a></h4>
                                <div class="adoption-meta">
                                    <ul>
                                        <li><i class="fas fa-cog"></i><a href="#">Siberian Husky</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Birth : 2021</li>
                                    </ul>
                                </div>
                                <div class="adoption-rating">
                                    <ul>
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="price">Total Price : <span>Free</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="adoption-shop-item">
                            <div class="adoption-shop-thumb">
                                <img src="img/product/adoption_shop_thumb02.jpg" alt="">
                                <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png"
                                        alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="shop-details.html">Charlie</a></h4>
                                <div class="adoption-meta">
                                    <ul>
                                        <li><i class="fas fa-cog"></i><a href="#">Golden Retriever</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Birth : 2020</li>
                                    </ul>
                                </div>
                                <div class="adoption-rating">
                                    <ul>
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="price">Total Price : <span>$30</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="adoption-shop-item">
                            <div class="adoption-shop-thumb">
                                <img src="img/product/adoption_shop_thumb03.jpg" alt="">
                                <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png"
                                        alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="shop-details.html">Alessia Max</a></h4>
                                <div class="adoption-meta">
                                    <ul>
                                        <li><i class="fas fa-cog"></i><a href="#">German Sherped</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Birth : 2020</li>
                                    </ul>
                                </div>
                                <div class="adoption-rating">
                                    <ul>
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="price">Total Price : <span>$29</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="adoption-shop-item">
                            <div class="adoption-shop-thumb">
                                <img src="img/product/adoption_shop_thumb04.jpg" alt="">
                                <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png"
                                        alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="shop-details.html">Canadian</a></h4>
                                <div class="adoption-meta">
                                    <ul>
                                        <li><i class="fas fa-cog"></i><a href="#">German Sherped</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Birth : 2021</li>
                                    </ul>
                                </div>
                                <div class="adoption-rating">
                                    <ul>
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="price">Total Price : <span>$39</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="adoption-shop-item">
                            <div class="adoption-shop-thumb">
                                <img src="img/product/adoption_shop_thumb05.jpg" alt="">
                                <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png"
                                        alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="shop-details.html">Entertainment</a></h4>
                                <div class="adoption-meta">
                                    <ul>
                                        <li><i class="fas fa-cog"></i><a href="#">Siberian Husky</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Birth : 2021</li>
                                    </ul>
                                </div>
                                <div class="adoption-rating">
                                    <ul>
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="price">Total Price : <span>Free</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="adoption-shop-item">
                            <div class="adoption-shop-thumb">
                                <img src="img/product/adoption_shop_thumb06.jpg" alt="">
                                <a href="shop-details.html" class="btn">Adoption <img src="img/icon/w_pawprint.png"
                                        alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="shop-details.html">Dangerous</a></h4>
                                <div class="adoption-meta">
                                    <ul>
                                        <li><i class="fas fa-cog"></i><a href="#">Golden Retriever</a></li>
                                        <li><i class="far fa-calendar-alt"></i> Birth : 2021</li>
                                    </ul>
                                </div>
                                <div class="adoption-rating">
                                    <ul>
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li class="price">Total Price : <span>Free</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- adoption-shop-area-end -->

        <!-- breeder-gallery-area -->
        <section class="breeder-gallery-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="breeder-gallery-active">
                            <div class="breeder-gallery-item">
                                <img src="img/images/breeder_gallery01.jpg" alt="">
                            </div>
                            <div class="breeder-gallery-item">
                                <img src="img/images/breeder_gallery02.jpg" alt="">
                            </div>
                            <div class="breeder-gallery-item">
                                <img src="img/images/breeder_gallery03.jpg" alt="">
                            </div>
                            <div class="breeder-gallery-item">
                                <img src="img/images/breeder_gallery04.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="adoption-content">
                            <h5 class="sub-title">Meet Adoption</h5>
                            <h2 class="title">Working For <span>Adoption</span> <br> Happy Time</h2>

                            <div class="adoption-list">
                                <ul>
                                    <li><i class="flaticon-tick"></i> Embark Breed & Health</li>
                                    <li><i class="flaticon-tick"></i> The domestic dog is a domesticated</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breeder-gallery-area-end -->
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