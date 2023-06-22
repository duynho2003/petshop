@extends('be.auth.layoutAuth')

@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                        <div class="brand-logo">
                            <img src="{{ asset('assetBE/images/logo.svg') }}" alt="logo">
                        </div>

                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        {!! session()->get('error') !!}
                        <form class="pt-3" action="{{ route('admin.processLogin') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" id="exampleInputEmail1" placeholder="Email Address" autofocus class="form-control form-control-lg @error('email') is-invalid @enderror">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="exampleInputPassword1" placeholder="Password" autofocus class="form-control form-control-lg @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" name="remember" class="form-check-input">
                                        Keep me signed in
                                    </label>
                                </div>

                                {{-- <a href="{{ route('admin.getEmail') }}" class="auth-link text-black">Forgot password?</a> --}}
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
</div>
@endsection