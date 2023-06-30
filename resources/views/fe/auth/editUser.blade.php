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

  <style>
    #form_change_pass{
      margin-left: 16px;
    width: 366px;
    display: inline-block;
    }

    #pass{
      width: 300px;
    }

    #btn_pass{
      margin-left: 110px;
    }
  </style>
</head>

<body>

  <body>
    @include('fe.layouts.loadscroll')
    <!-- header-area -->
    @include('fe.layouts.header')
    <!-- header-area-end -->
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset ('fe/img/bg/breadcrumb_bg.jpg')}}">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="title">Contact Us</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ Route('home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!--Edit information-->
    <div class="container">
      @if(session('success'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('success') }}
      </div>
    </div>
    @endif
    <!-- contact-area -->
    <section class="contact-area pt-110 pb-110">
      <div class="container">
        <div class="container-inner-wrap">
          <div class="row justify-content-center justify-content-lg-center">
            <div class="col-lg-10 col-md-6 order-6 order-lg-2">
              <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
              <div class="container">
                <div class="row flex-lg-nowrap">
                  <div class="col">
                    <div class="row">
                      <div class="col mb-3">
                        <div class="card">
                          <div class="card-body">
                            <div class="e-profile">
                              <div class="row">
                                <div class="col-12 col-sm-auto mb-3">
                                  <div class="mx-auto" style="width: 140px;">
                                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px;     background-color: rgb(233, 236, 239);"><img src="{{ asset ('/fe/img/images/testi_avatar01.png') }}" alt="avatar" width="140" height="140">
                                      {{--<span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>--}}
                                    </div>
                                  </div>
                                </div>
                                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $user->first_name }} {{ $user->last_name }}</h4>
                                    <div class="text-muted"><small>Last seen 2 hours ago</small></div>
                                    <!-- <div class="mt-2">
                                      <input type="file" id="choose file">
                                    </div> -->
                                  </div>
                                  <div class="text-center text-sm-right">
                                    <div class="text-muted"><small>Joined {{ $user->created_at }}</small></div>
                                  </div>
                                </div>
                              </div>
                              <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                              </ul>
                              <div class="tab-content pt-3">
                                <div class="tab-pane active">
                                  <form action="{{ Route ('process_edit_user',['id' => Auth::user()->id]) }}" class="form" method="POST" novalidate="">
                                    @csrf
                                    <div class="row">
                                      <div class="col">
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>First Name</label>
                                              <input class="form-control" type="text" name="first_name" value="{{ $user->first_name }}">
                                            </div>
                                          </div>
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Last Name</label>
                                              <input class="form-control" type="text" name="last_name" value="{{ $user->last_name }}">
                                            </div>
                                          </div>
                                        </div>
                                        <!-- <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Email</label>
                                              <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                                            </div>
                                          </div>
                                        </div> -->

                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Phone</label>
                                              <input class="form-control" type="text" name="phone" value="{{ $user->phone }}">
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Address</label>
                                              <input class="form-control" type="text" placeholder="" name="address" value="{{ $user->address
                                               }}">
                                            </div>
                                          </div>
                                        </div>
                                        <!-- <div class="row">
                                          <div class="col mb-3">
                                            <div class="form-group">
                                              <label>About</label>
                                              <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                          </div>
                                        </div> -->
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col justify-content-end">
                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                      </div>
                                      <!-- <div class="col d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit">
                                          <i class="fa fa-sign-out"></i>
                                          <span><a href="index.html">Log Out</a></span>
                                        </button>
                                      </div> -->
                                  </form>

                                  <form action="{{Route('change-pass',['id' => Auth::user()->id])}}" id="form_change_pass" method="POST">
                                    @csrf
                                    <div class="">
                                      <div class="col-12 col-sm-6 mb-3">
                                        <div class="mb-2"><b>Change Password</b></div>
                                        <input type="hidden" value="{{$user->id}}">
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Current Password</label>
                                              <input class="form-control" id="pass" type="password" placeholder="••••••" name="current_pass">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>New Password</label>
                                              <input class="form-control"  id="pass" type="password" placeholder="••••••" name="new_pass">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col">
                                            <div class="form-group">
                                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                                              <input class="form-control"  id="pass" type="password" placeholder="••••••" name="confirm_pass">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                        <div class="mb-2"><b>Keeping in Touch</b></div>
                                        <div class="row">
                                          <div class="col">
                                            <label>Email Notifications</label>
                                            <div class="custom-controls-stacked px-2">
                                              <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                                <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                                <label class="custom-control-label" for="notifications-news">Newsletter</label>
                                              </div>
                                              <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                                                <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div> -->
                                      <div class="">
                                        <button class="btn btn-primary" id="btn_pass" type="submit">Submit</button>
                                      </div>
                                    </div>
                                  </form>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </main>
    <!-- main-area-end -->
    <!-- footer-start -->
    @include('fe.layouts.footer')
    <!-- footer-end -->

    <!-- JS here -->
    @include('fe.layouts.master')


  </body>

</html>