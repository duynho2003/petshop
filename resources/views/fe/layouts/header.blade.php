<header>
    <div id="sticky-header" class="menu-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo"><a href="{{ Route('home') }}"><img src="{{ asset ('fe/img/logo/logo.png') }}" alt=""></a></div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li><a href="{{ Route('home') }}">Home</a></li>
                                    <li><a href="{{ Route('doglist') }}">Dog List</a></li>
                                    <li><a href="{{ Route('shop') }}">Shop</a></li>
                                    <li><a href="{{ Route('adoption') }}">Adoption</a></li>
                                    <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ Route('contact') }}">Contacts</a></li>
                                    <!-- My Account -->
                                    @if (auth()->check())
                                    <li class="menu-item-has-children">
                                        <a>
                                            @if (auth()->check())
                                            {{ auth()->user()->first_name }}
                                            @endif

                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="menu-item-has-children">
                                        <a>
                                            Account
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in-alt" aria-hidden="true"></i> Sign In</a></li>
                                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign up</a></li>
                                        </ul>
                                    </li>
                                    @endif
                                    <!-- End My Account -->
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                    <li class="header-shop-cart"><a href="#"><i class="flaticon-shopping-bag"></i><span>0</span></a>
                                        {{--
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="{{ asset ('fe/img/product/cart_p01.jpg') }}" alt=""></a>
                            </div>

                            <div class="cart-content">
                                <h4><a href="#">The King Charles Spaniel</a></h4>
                                <div class="cart-price">
                                    <span class="new">$229.9</span>
                                    <span><del>$229.9</del></span>
                                </div>
                            </div>
                            <div class="del-icon">
                                <a href="#"><i class="far fa-trash-alt"></i></a>
                            </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <div class="cart-img">
                                    <a href="#"><img src="{{ asset ('fe/img/product/cart_p02.jpg') }}" alt=""></a>
                                </div>
                                <div class="cart-content">
                                    <h4><a href="#">The Labrador Retriever</a></h4>
                                    <div class="cart-price">
                                        <span class="new">$229.9</span>
                                        <span><del>$229.9</del></span>
                                    </div>
                                </div>
                                <div class="del-icon">
                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </li>
                            <li>
                                <div class="total-price">
                                    <span class="f-left">Total:</span>
                                    <span class="f-right">$239.9</span>
                                </div>
                            </li>
                            <li>
                                <div class="checkout-link">
                                    <a href="#">Shopping Cart</a>
                                    <a class="black-color" href="#">Checkout</a>
                                </div>
                            </li>
                            </ul>
                            </li>
                            --}}
                            <li class="header-btn"><a href="adoption.html" class="btn">Adopt Here <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a></li>
                            </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- header-search -->
    <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="search-close">
            <span><i class="fas fa-times"></i></span>
        </div>
        <div class="search-wrap text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">... Search Here ...</h2>
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Type keywords here">
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-search-end -->
</header>