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

                            <h4>Reset Password</h4>

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="pt-3" action="{{ route('admin.postEmail') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" id="exampleInputEmail1" placeholder="Email Address"  autofocus
                                            class="form-control form-control-lg" @error('email') is-invalid @enderror value="{{ old('email') }}"
                                    >
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SEND PASSWORD RESET LINK</button>
                                </div>

                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <a href="{{ route('admin.login') }}" class="auth-link text-black">Login</a>
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