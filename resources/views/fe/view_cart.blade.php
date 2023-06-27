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

    <style>
        .input-quantity {
            width: 50px;
        }

        /* .paypal {
            margin-top: -670px;
            margin-left: 53px;
        } */

        .checkout-form {
    max-width: 600px;
    margin: 0 auto;
}

.form-title {
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.payment-method {
    margin-top: 30px;
}

.cart-content {
    margin-top: 20px;
}

.primary-btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
}

.primary-btn:hover {
    background-color: #0056b3;
}

    </style>
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
    @php $cartValue = session('cart') ? 'cart' : ''; @endphp
    @if (session('cart'))
    
    <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            
            <div class="col-md-8">
                @foreach(session('cart') as $id => $details)
                @php $total += $details['normal_price'] * $details['quantity'] @endphp
                <div class="product-details mr-2">
                    <div class="d-flex justify-content-between">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img src="" width="50">
                            <div class="ml-2"><span class="font-weight-bold d-block">{{ $details['name'] }}</span></div>
                        </div>
                        <input type="number" value="{{ $details['quantity'] }}" required data-pid="{{ $id }}" class="input-quantity"/>
                        <!-- <div class="d-flex flex-row align-items-center"><input type="number" value="{{ $details['quantity'] }}" class="d-block"/>
                        </div> -->
                        <span class="d-block ml-5 font-weight-bold">{{ $details['normal_price'] }} USD</span>
                        <div class="del-icon">
                            <a href="#" data-id="{{ $id }}"><i class="far fa-trash-alt"></i></a>
                        </div>

                    </div>
                    
                </div>
                @endforeach
                <div class="continue__btn update__btn">
                    <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                </div>
                
            </div>

            
            <div class="col-md-4">
                <form action="{{ Route('processCheckout')}}" id="theForm" method="post" class="checkout-form">
                    <input type="hidden" name="payment" />
                    <input type="hidden" name="total" value="{{ $total }}" />
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <h3 class="form-title">Check Receipt Information</h3>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{ $user->first_name }} {{ $user->last_name }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" name="address" value="{{ $user->address }}" class="form-control" required>
                    </div>
                    @csrf
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
                                            document.querySelector('input[name="payment"]').value = "{{ $cartValue }}";
                                            document.getElementById('theForm').submit();
                                        });
                                    }
                                }).render('#paypal-button-container');
                                //This function displays Smart Payment Buttons on your web page.
                            </script>
                            <div class="cart-content">
                                <h6>Cart total</h6>
                                <ul>
                                    <li>Total: <span>{{ $total }} $</span></li>
                                </ul>
                                <!-- <a href="" class="primary-btn">Proceed to checkout</a> -->
                            </div>
                        </div>
                    </div>
                </form>

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
                        <i class="ti-hand-point-right"></i><a href="{{ Route('home') }}"> Back to shopping</a>
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

        $(".continue__btn.update__btn a").click(function(e) {
            e.preventDefault();

            let pids = [];
            let qties = [];
            $('.input-quantity').each(function(index, value) {
                pids.push($(value).data('pid'));
                qties.push($(value).val());
            });

            $.ajax({
                url: "{{ Route('update_cart') }}",
                method: "post",
                data: {
                    _token: '{{ csrf_token() }}',
                    pids: pids,
                    qties: qties
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });
    </script>

</body>

</html>