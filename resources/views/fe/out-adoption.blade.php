<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Petco - Thank you</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/fe/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/fe/css/bootstrap.min') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/animate.min') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/magnific-popup') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/fontawesome-all.min') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/owl.carousel.min') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/nice-select') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/flaticon') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/odometer') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/jquery-ui') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/slick') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/default') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/style') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/responsive') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/style') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/cart') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/acc') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/avatar') }}">

</head>

<body>
    @include('fe.layouts.loadscroll')
    <!-- header-area -->
    @include('fe.layouts.header')
    <!-- Scroll-top-end-->
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('/fe/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Adoption</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Adoption</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- adoption-shop-area -->
    <section class="adoption-shop-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-65">
                        <h5 class="sub-title">Adoption Successful <i class="checkmark">✓</i> </h5>
                        <h2 class="title">Puppy is waiting !
                            <div>Please check your email for information.</div>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        </div>
    </section>
    <!-- adoption-shop-area-end -->

    <!-- footer-start -->
    @include('fe.layouts.footer')
    <!-- footer-end -->

    <!-- JS here -->
    @include('fe.layouts.master')

</body>

</html>