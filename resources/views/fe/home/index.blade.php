<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petco - Pet Breeder & Adoption</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fe/img/favicon.png') }}">

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
        <!-- slider-area -->
        <section class="slider-area">
            <div class="slider-active">
                <div class="single-slider slider-bg d-flex align-items-center" data-background="{{ asset('fe/img/slider/s_slider_bg01.jpg') }}">
                    <div class="container custom-container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-7 col-md-10">
                                <div class="slider-content">
                                    <div class="slider-title">
                                        <h2 class="title" data-animation="fadeInUpBig" data-delay=".2s" data-duration="1.2s">Best Friend <span>with</span> Happy Time</h2>
                                    </div>
                                    <div class="slider-desc">
                                    </div>
                                    <a href="{{ Route('doglist') }}" class="btn" data-animation="fadeInUpBig" data-delay=".6s" data-duration="1.2s">View More <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-bg d-flex align-items-center" data-background="{{ asset('fe/img/slider/s_slider_bg01.jpg') }}">
                    <div class="container custom-container">
                        <div class="row">
                            <div class="col-xl-5 col-lg-7 col-md-10">
                                <div class="slider-content">
                                    <div class="slider-title">
                                        <h2 class="title" data-animation="fadeInUpBig" data-delay=".2s" data-duration="1.2s">Best Friend <span>with</span> Happy Time</h2>
                                    </div>
                                    <div class="slider-desc">
                                        <p class="desc" data-animation="fadeInUpBig" data-delay=".4s" data-duration="1.2s">Human Shampoo on Dogs After six days of delirat, the jury found Hernandez guilty of first-degree murder</p>
                                    </div>
                                    <a href="dog-list.html" class="btn" data-animation="fadeInUpBig" data-delay=".6s" data-duration="1.2s">View More <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-shape"><img src="{{ asset ('fe/img/slider/slider_shape01.png') }}" alt=""></div>
            <div class="slider-shape shape-two"><img src="{{ asset ('fe/img/slider/slider_shape02.png') }}" alt=""></div>
        </section>
        <!-- slider-area-end -->

        <!-- counter-area -->
        <section class="counter-area counter-bg" data-background="{{ asset ('fe/img/bg/counter_bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="counter-title text-center mb-65">
                            <h6 class="sub-title">Why Choose Us?</h6>
                            <h2 class="title">Best Service to Breeds Your Loved Dog Explore</h2>
                        </div>
                    </div>
                </div>
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
                            <h2 class="count"><span class="odometer" data-count="5"></span>+</h2>
                            <p>Years Of History</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter-area-end -->

        <!-- adoption-area -->
        <section class="adoption-area">
            <div class="container">
                <div class="row align-items-center align-items-xl-end justify-content-center">
                    <div class="col-xl-7 col-lg-6 col-md-10 order-0 order-lg-2">
                        <div class="adoption-img">
                            <img src="{{ asset ('fe/img/images/adoption_img.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="adoption-content">
                            <h2 class="title">Working For <br> Dog <span>Adoption</span> Free, Happy Time</h2>
                            <p>Adopting dogs is giving them a new life.</p>
                            <a href="{{ Route ('adoption') }}" class="btn">Adoption <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adoption-shape"><img src="{{ asset ('fe/img/images/adoption_shape.png') }}" alt=""></div>
        </section>
        <!-- adoption-area-end -->

        <!-- faq-area -->
        @include('fe.layouts.faq')
        <!-- faq-area-end -->

        <!-- adoption-shop-area -->
        <section class="adoption-shop-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-65">
                            <div class="section-icon"><img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></div>
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
                                <img src="{{ asset('fe/img/product/adoption_shop_thumb01.jpg') }}" alt="">
                                <a href="{{Route('adoption')}}" class="btn">Adoption <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="{{Route('adoption')}}">Mister Tartosh</a></h4>
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
                                <img src="{{ asset('fe/img/product/adoption_shop_thumb02.jpg') }}" alt="">
                                <a href="{{Route('adoption')}}" class="btn">Adoption <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="{{Route('adoption')}}">Charlie</a></h4>
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
                                <img src="{{ asset('fe/img/product/adoption_shop_thumb03.jpg') }}" alt="">
                                <a href="{{Route('adoption')}}" class="btn">Adoption <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="{{Route('adoption')}}">Alessia Max</a></h4>
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
                                <img src="{{ asset('fe/img/product/adoption_shop_thumb04.jpg') }}" alt="">
                                <a href="{{Route('adoption')}}" class="btn">Adoption <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="{{Route('adoption')}}">Canadian</a></h4>
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
                                <img src="{{ asset('fe/img/product/adoption_shop_thumb05.jpg') }}" alt="">
                                <a href="{{Route('adoption')}}" class="btn">Adoption <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="{{Route('adoption')}}">Entertainment</a></h4>
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
                                <img src="{{ asset ('fe/img/product/adoption_shop_thumb06.jpg') }}" alt="">
                                <a href="{{Route('adoption')}}" class="btn">Adoption <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a>
                            </div>
                            <div class="adoption-shop-content">
                                <h4 class="title"><a href="{{Route('adoption')}}">Dangerous</a></h4>
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

        <!-- testimonial-area -->
        <section class="testimonial-area testimonial-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-65">
                            <div class="section-icon"><img src="{{ asset ('fe/img/icon/pawprint.png') }}" alt=""></div>
                            <h5 class="sub-title">Testimonials</h5>
                            <h2 class="title">Our Happy Customers</h2>

                        </div>
                    </div>
                </div>
                <div class="row testimonial-active">
                    <div class="col-lg-6">
                        <div class="testimonial-item">
                            <div class="testi-avatar-thumb">
                                <img src="{{ asset ('fe/img/images/testi_avatar01.png') }}" alt="">
                            </div>
                            <div class="testi-content">
                                <p>“ The world would be a nicer place if everyone had the ability to love as unconditionally as a dog.”</p>
                                <div class="testi-avatar-info">
                                    <h5 class="title">Alessia Cara</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-item">
                            <div class="testi-avatar-thumb">
                                <img src="{{ asset ('fe/img/images/testi_avatar02.png') }}" alt="">
                            </div>
                            <div class="testi-content">
                                <p>“ A dog will teach you unconditional love. If you can have that in your life, things will not be too bad. ”</p>
                                <div class="testi-avatar-info">
                                    <h5 class="title">Bella Wagner</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-item">
                            <div class="testi-avatar-thumb">
                                <img src="{{ asset ('fe/img/images/testi_avatar03.png') }}" alt="">
                            </div>
                            <div class="testi-content">
                                <p>“ Dogs are not our whole life, but they make our lives whole. ”</p>
                                <div class="testi-avatar-info">
                                    <h5 class="title">Roger Caras</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-item">
                            <div class="testi-avatar-thumb">
                                <img src="{{ asset ('fe/img/images/testi_avatar04.png') }}" alt="">
                            </div>
                            <div class="testi-content">
                                <p>“ A dog is the only thing on Earth that loves you more than he loves himself. ”</p>
                                <div class="testi-avatar-info">
                                    <h5 class="title">Josh Billings</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        @include('fe.layouts.blog')
        <!-- blog-area-end -->
        <!-- newsletter-area -->
        
        <!-- newsletter-area-end -->
    </main>
    <!-- main-area-end -->

    <!-- footer-start -->
    @include('fe.layouts.footer')
    <!-- footer-end -->
    @include('fe.layouts.master')
</body>
    
</html>