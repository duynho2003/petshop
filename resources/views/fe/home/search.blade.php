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
<div class="container product_section_container">
    <div class="row">
        <div class="col product_section clearfix">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>PC</a></li>
                </ul>
            </div>

            <!-- Sidebar -->

            <div class="sidebar">
                <div class="sidebar_section">
                    <div class="sidebar_title">
                        <h5>Product Category</h5>
                    </div>
                    <ul class="sidebar_categories">
                        <li class="">
                            <a href="{{ route('shop') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Laptop</a>
                        </li>
                        <li class="">
                            <a href="{{ route('shop') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>PC</a>
                        </li>
                        <li class="">
                            <a href="{{ route('shop') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Monitor</a>
                        </li>
                        <li class="">
                            <a href="{{ route('shop') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Keyboard</a>
                        </li>
                        <li class="">
                            <a href="{{ route('shop') }}" ><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Mouse</a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Main Content -->

            <div class="main_content">

                <!-- Products -->

                <div class="products_iso">
                    <div class="row">
                        <div class="col">

                            <!-- Product Sorting -->

                            <div class="product_sorting_container product_sorting_container_top">
                                <div class="pages d-flex flex-row align-items-center">
                                    {{-- {{$products->links()}} --}}
                                </div>

                            </div>

                            <!-- Product Grid -->
                            <div class="product-grid">
                                <!-- View Product  -->
                            @if ($products->count())
                                @foreach ($products as $product)
                                    <a href="{{ route('customer.detail', $product->id) }}">
                                        <div class="product-item men">
                                            <div class="product discount product_filter">
                                                <div class="product_image">
                                                    <img src="{{ asset($product->feature_image_path) }}" alt="{{$product->feature_image_name}}">
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
                                                <div class="product_info">
                                                    <h6 class="product_name" style="margin-top: 10px;"><a>{{$product->name}}</a></h6>
                                                    <div class="product_price">{{number_format($product->promotion_price)}} VNĐ
                                                    <p style="font-size: 12px; margin-left: 10px; color: #b5aec4; text-decoration: line-through;">{{number_format($product->normal_price)}} VNĐ</p></div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="{{ route('customer.detail', $product->id) }}">Xem chi tiết</a></div>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div>
                                    <h3>There are no record.</h3>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer-start -->
@include('fe.layouts.footer')
    <!-- footer-end -->
    @include('fe.layouts.master')
</body>
</html>