<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Các thẻ meta, title và các file CSS -->
</head>

<body>
    @include('fe.layouts.loadscroll')
    @include('fe.layouts.header')
    <main>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Order</h4>
                    <div style="display: flex">
                        <div class="table-responsive pt-3 col-md-5">
                            <h4>Information Customer</h4>
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td>{{$adoption->name}}</td>
                                </tr>
                                <tr>
                                    <th>Email </th>
                                    <td>{{$adoption->email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$adoption->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$adoption->address}}</td>
                                </tr>

                            </table>
                        </div>
                        <div class="table-responsive pt-3 col-md-7">
                            <h4>Information Order</h4>
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productItems as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td><img src="{{ asset('images/'.$item->image) }}" alt=""></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- footer và các script -->
</body>

</html>