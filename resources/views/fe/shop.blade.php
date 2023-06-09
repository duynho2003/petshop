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
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset ('/fe/img/bg/breadcrumb_bg.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Our Shop</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ Route ('home')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-area -->
        <div class="shop-area pt-110 pb-110">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-8 order-2 order-lg-0">
                        <aside class="shop-sidebar">
                            <div class="widget">
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input type="text" placeholder="Search ...">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="sidebar-title">Category</h4>
                                <div class="shop-cat-list">
                                    <ul>
                                        <li><a href="shop.html">Squeaky <span>+</span></a></li>
                                        <li><a href="shop.html">Dog Food <span>+</span></a></li>
                                        <li><a href="shop.html">Dog-Kit <span>+</span></a></li>
                                        <li><a href="shop.html">Dog Home <span>+</span></a></li>
                                        <li><a href="shop.html">Safety-Suits <span>+</span></a></li>
                                        <li><a href="shop.html">Pet Protect <span>+</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="sidebar-title">Top Brand</h4>
                                <div class="shop-brand-list">
                                    <ul>
                                        <li><a href="shop.html">Geco</a></li>
                                        <li><a href="shop.html">Carnation</a></li>
                                        <li><a href="shop.html">Suppke</a></li>
                                        <li><a href="shop.html">WeBeyond</a></li>
                                        <li><a href="shop.html">Edstudy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="sidebar-title">Filter by Price</h4>
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <span>Price :</span>
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        <input type="submit" class="btn" value="Filter">
                                    </div>
                                </div>
                            </div>
                            <div class="widget shop-widget-banner">
                                <a href="shop.html"><img src="img/product/shop_add.jpg" alt=""></a>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-wrap">
                            <h4 class="title">Shop</h4>
                            <div class="shop-page-meta mb-30">
                                <div class="shop-grid-menu">
                                    <ul>
                                        <li class="active"><a href="#"><i class="fas fa-th"></i></a></li>
                                        <li><a href="#"><i class="fas fa-list"></i></a></li>
                                    </ul>
                                </div>
                                <div class="shop-showing-result">
                                    <p>Total Items 1-12 of 13</p>
                                </div>
                                <div class="shop-show-list">
                                    <form action="#">
                                        <label for="show">Show</label>
                                        <select id="show" class="selected">
                                            <option value="">08</option>
                                            <option value="">12</option>
                                            <option value="">16</option>
                                            <option value="">18</option>
                                            <option value="">20</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="shop-short-by">
                                    <form action="#">
                                        <label for="shortBy">Sort By</label>
                                        <select id="shortBy" class="selected">
                                            <option value="">Sort by latest</option>
                                            <option value="">Low to high</option>
                                            <option value="">High to low</option>
                                            <option value="">Popularity</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item mb-55">
                                        <div class="shop-thumb">
                                            <a href="shop-details.html"><img src="img/product/shop_item01.jpg" alt=""></a>
                                        </div>
                                        <div class="shop-content">
                                            <span>Dog toy’s</span>
                                            <h4 class="title"><a href="shop-details.html">Pet Knit Knacks</a></h4>
                                            <div class="shop-content-bottom">
                                                <span class="price">$28.00</span>
                                                <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item mb-55">
                                        <div class="shop-thumb">
                                            <a href="shop-details.html"><img src="img/product/shop_item02.jpg" alt=""></a>
                                        </div>
                                        <div class="shop-content">
                                            <span>Dog toy’s</span>
                                            <h4 class="title"><a href="shop-details.html">Squeaky Dog</a></h4>
                                            <div class="shop-content-bottom">
                                                <span class="price">$19.00</span>
                                                <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item mb-55">
                                        <div class="shop-thumb">
                                            <a href="shop-details.html"><img src="img/product/shop_item03.jpg" alt=""></a>
                                        </div>
                                        <div class="shop-content">
                                            <span>Dog toy’s</span>
                                            <h4 class="title"><a href="shop-details.html">Pet Knit Knacks</a></h4>
                                            <div class="shop-content-bottom">
                                                <span class="price">$29.00</span>
                                                <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item mb-55">
                                        <div class="shop-thumb">
                                            <a href="shop-details.html"><img src="img/product/shop_item04.jpg" alt=""></a>
                                        </div>
                                        <div class="shop-content">
                                            <span>Dog toy’s</span>
                                            <h4 class="title"><a href="shop-details.html">Yoda Carriage</a></h4>
                                            <div class="shop-content-bottom">
                                                <span class="price">$49.00</span>
                                                <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item mb-55">
                                        <div class="shop-thumb">
                                            <a href="shop-details.html"><img src="img/product/shop_item05.jpg" alt=""></a>
                                        </div>
                                        <div class="shop-content">
                                            <span>Dog toy’s</span>
                                            <h4 class="title"><a href="shop-details.html">Pet Carriage</a></h4>
                                            <div class="shop-content-bottom">
                                                <span class="price">$09.00</span>
                                                <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item mb-55">
                                        <div class="shop-thumb">
                                            <a href="shop-details.html"><img src="img/product/shop_item06.jpg" alt=""></a>
                                        </div>
                                        <div class="shop-content">
                                            <span>Dog toy’s</span>
                                            <h4 class="title"><a href="shop-details.html">Squeaky Dog</a></h4>
                                            <div class="shop-content-bottom">
                                                <span class="price">$16.00</span>
                                                <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item mb-55">
                                        <div class="shop-thumb">
                                            <a href="shop-details.html"><img src="img/product/shop_item07.jpg" alt=""></a>
                                        </div>
                                        <div class="shop-content">
                                            <span>Dog toy’s</span>
                                            <h4 class="title"><a href="shop-details.html">Carriage Dog</a></h4>
                                            <div class="shop-content-bottom">
                                                <span class="price">$18.00</span>
                                                <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item mb-55">
                                        <div class="shop-thumb">
                                            <a href="shop-details.html"><img src="img/product/shop_item08.jpg" alt=""></a>
                                        </div>
                                        <div class="shop-content">
                                            <span>Dog toy’s</span>
                                            <h4 class="title"><a href="shop-details.html">Yoda Carriage</a></h4>
                                            <div class="shop-content-bottom">
                                                <span class="price">$12.00</span>
                                                <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item mb-55">
                                        <div class="shop-thumb">
                                            <a href="shop-details.html"><img src="img/product/shop_item09.jpg" alt=""></a>
                                        </div>
                                        <div class="shop-content">
                                            <span>Dog toy’s</span>
                                            <h4 class="title"><a href="shop-details.html">Pet Knit Knacks</a></h4>
                                            <div class="shop-content-bottom">
                                                <span class="price">$32.00</span>
                                                <span class="add-cart"><a href="shop-details.html">ADD +</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-page-meta">
                                <div class="shop-grid-menu">
                                    <ul>
                                        <li class="active"><a href="#"><i class="fas fa-th"></i></a></li>
                                        <li><a href="#"><i class="fas fa-list"></i></a></li>
                                    </ul>
                                </div>
                                <div class="shop-showing-result">
                                    <p>Total Items 1-12 of 13</p>
                                </div>
                                <div class="shop-show-list">
                                    <form action="#">
                                        <label for="bottomShow">Show</label>
                                        <select id="bottomShow" class="selected">
                                            <option value="">08</option>
                                            <option value="">12</option>
                                            <option value="">16</option>
                                            <option value="">18</option>
                                            <option value="">20</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="shop-pagination">
                                    <ul>
                                        <li class="active"><a href="shop.html">1</a></li>
                                        <li><a href="shop.html">2</a></li>
                                        <li><a href="shop.html"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop-area-end -->

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