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
    <!-- breadcrumb-area -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('fe/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Shopping Cart</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    @if (session('cart'))
    <div class="container mt-5 p-3 rounded cart">
        <h6 class="mb-0">Shopping cart</h6>
        <span>You have {{ count((array) session('cart')) }} items in your cart</span>
        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button>Clear All Cart</button>
        </form>
    </div>
    @endif
    @php $total = 0 @endphp
    @if (session('cart'))
    @foreach(session('cart') as $id => $details)
    @php $total += $details['normal_price'] * $details['quantity'] @endphp
    <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex justify-content-between">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img src="" width="50">
                            <div class="ml-2"><span class="font-weight-bold d-block">{{ $details['name'] }}</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">{{ $details['quantity'] }}</span><span class="d-block ml-5 font-weight-bold">{{ $details['normal_price'] }} đ</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                        <div class="del-icon">
                            <a href="#"><i class="far fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-6">
                <div class="cart-detail bg-light p-3 p-md-4" style="width: 360px; z-index: -1;">
                    <h3 class="billing-heading mb-4">Payment Method</h3>
                    <div class="container">
                        <script src="https://www.paypal.com/sdk/js?client-id=AVkFJNDwx4HO4IloZNSeNgDotbwt3pYAu0nqOaYh9uTEHocf9NFuPBkusDBPqjkGD-KyWzMhsfp3K7qp">
                            // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
                        </script>
                        <div id="paypal-button-container" type="submit" style="z-index: -1;"></div>
                        <script>
                            paypal.Buttons({
                                createOrder: function(data, actions) {
                                    // This function sets up the details of the transaction, including the amount and line item details.
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: "{{ $total }}" //truyền tong tiền vào 
                                            }
                                        }]
                                    });
                                },
                                onApprove: function(data, actions) {
                                    // This function captures the funds from the transaction.
                                    return actions.order.capture().then(function(details) {
                                        // This function shows a transaction success message to your buyer.
                                        alert('Transaction completed by you');
                                        document.getElementById('payment').innerHTML = '<input name="payment" value="paypal" hidden>';
                                        document.getElementById('theForm').submit();
                                    });
                                }
                            }).render('#paypal-button-container');
                            //This function displays Smart Payment Buttons on your web page.
                        </script>
                        <div class="cart-content">
                            <h6>Cart total</h6>
                            <ul>
                                <li>Subtotal <span>{{ $total }} $</span></li>
                                <li>Total <span>{{ $total }} $</span></li>
                            </ul>
                            <a href="" class="primary-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else
        <div class="container mt-5 p-3 rounded cart">
            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <div style="text-align: center; height: 150px;">
                        <p style="font-size: 25px; font-weight: 600;">Không có gì trong giỏ hết =((</p>
                        <div style="font-size: 18px; font-weight: 400;">
                            <i class="ti-hand-point-right"></i><a href="{{ Route('home') }}"> Tiếp tục mua hàng</a>
                        </div>
                    </div>
                </table>
            </div>
        </div>
        @endif
    </div>
    <!-- footer-start -->
    @include('fe.layouts.footer')
    <!-- footer-end -->

    <!-- JS here -->
    @include('fe.layouts.master')
    @section('js')
    <script type="text/javascript">
        $(".del-icon a").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
    @endsection
</body>

</html>