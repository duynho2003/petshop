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
                    <h4 class="card-title">Show Adoption</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Adoption Date</th>
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listAdoption as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->address}}</td>
                                    @switch($item->status)
                                    @case("Process")
                                    <td>
                                        <label class="badge badge-warning" style="font-size: 17px;">{{$item->status}}</label>
                                    </td>
                                    @break
                                    @case("Shipping")
                                    <td>
                                        <label class="badge badge-info" style="font-size: 17px;">{{$item->status}}</label>
                                    </td>
                                    @break
                                    @case("Completed")
                                    <td>
                                        <label class="badge badge-success" style="font-size: 17px;">{{$item->status}}</label>
                                    </td>
                                    @break
                                    @case("Cancelled")
                                    <td>
                                        <label class="badge badge-danger" style="font-size: 17px;">{{$item->status}}</label>
                                    </td>
                                    @break
                                    @default
                                    @endswitch
                                    <td>{{($item->created_at)}}</td>

                                    <td>
                                        <a href="{{ route('showAdoption', ['id' => $item->id]) }}">View Details</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('adoption.statusCancelByID_user', ['id' => $item->adoption_id, 'user_id' => auth()->user()->id]) }}">
                                            <button class="btn btn-icon btn-danger"><i class="fas fa-cancel"></i></button>
                                        </a>
                                    </td>



                                    </a></td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 margin-paginate-slider-index">
                        {{$listAdoption->links('pagination::bootstrap-5')}}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer và các script -->
</body>

</html>