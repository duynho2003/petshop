<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assetBE/vendors/feather/feather.css') }} ">
    <link rel="stylesheet" href="{{ asset('assetBE/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assetBE/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assetBE/vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assetBE/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assetBE/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assetBE/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assetBE/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assetBE/images/favicon.png') }}" />
    @yield('css')
</head>
<body>
    <div class="container-scroller">

        @include('be.layouts.header')

        <div class="container-fluid page-body-wrapper">

            @include('be.layouts.setting_theme')

            @include('be.layouts.sidebar')

            <div class="main-panel">
                @yield('content')
                @include('be.layouts.footer')
            </div>

        </div>   
    </div>

    <!-- plugins:js -->
    <script src="{{ asset('assetBE/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assetBE/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assetBE/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assetBE/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assetBE/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assetBE/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assetBE/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assetBE/js/template.js') }}"></script>
    <script src="{{ asset('assetBE/js/settings.js') }}"></script>
    <script src="{{ asset('assetBE/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assetBE/js/dashboard.js') }}"></script>
    <script src="{{ asset('assetBE/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->
    @yield('js')
</body>

</html>

