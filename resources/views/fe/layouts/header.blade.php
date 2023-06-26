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
                                    <!-- <li><a href="{{ Route('doglist') }}">Dog List</a></li> -->
                                    <li><a href="{{ Route('shop') }}">Shop</a></li>
                                    @if (auth()->check())
                                    <li><a href="{{ Route('adoption') }}">Adoption</a></li>
                                    @endif
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
                                            @if(Auth::check())
                                            <li><a href=" {{ route('edit_user', ['id' => Auth::user()->id]) }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Edit Information</a></li>
                                            @endif

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
                                            <li><strong>Hello, please sign in your account.</strong></li>
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
                                    {{-- <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li> --}}
                                    <li class="header-shop-cart"><a href="{{ route('customer.cart') }}"><i class="flaticon-shopping-bag"></i><span>{{ count((array) session('cart')) }}</span></a>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">

                                                <div class="cart-content">
                                                    @php $total = 0 @endphp
                                                    @foreach((array) session('cart') as $id => $details)
                                                    @php $total += $details['normal_price'] * $details['quantity']@endphp
                                                    @endforeach
                                                    <!-- kiem tra neu co gio hang ko -->
                                                    @if(session('cart'))
                                                    @foreach(session('cart') as $id => $details)
                                                    <div class="cart-img">
                                                        <img src="{{ asset('img') }}/{{ $details['image'] }}">
                                                    </div>
                                                    <h4>{{ $details['name'] }}</h4>
                                                    <div class="cart-price">
                                                        <span class="new">{{ $details['normal_price'] }} đ</span>
                                                        <span class="count"> Quantity: {{ $details['quantity'] }}</span>
                                                        <!-- <span><del>$229.9</del></span> -->
                                                    </div>
                                                    <div class="del-icon">
                                                        <a href="#" data-id="{{ $id }}"><i class="far fa-trash-alt"></i></a>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">{{ $total }} đ</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="{{ Route('customer.cart') }}">Shopping Cart</a>
                                                    <a class="black-color" href="#">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-btn"><a href="{{ Route('adoption')}}" class="btn">Adopt Here <img src="{{ asset ('fe/img/icon/w_pawprint.png') }}" alt=""></a></li>
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

<!-- JS here -->
@include('fe.layouts.master')

<script type="text/javascript">
    $(".del-icon a").click(function(e) {
        e.preventDefault();

        var ele = $(this);
        let id = ele.data("id");

        if (confirm("Do you really want to remove?")) {
            $.ajax({
                url: "{{ route('remove_from_cart') }}",
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });
</script>