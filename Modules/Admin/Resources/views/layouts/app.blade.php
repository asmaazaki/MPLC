<!DOCTYPE html>
<html lang="en" dir="{{ LaravelLocalization::getCurrentLocaleRegional() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>MPLC DASHBOARD</title>

    <!-- Google Font: Source Sans Pro -->
    {{--    <link rel="stylesheet" --}}
    {{--        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/fontawesome-free/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- Ionicons -->
    {{--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('/') }}admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    @if (App::getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('admin/rtl/bootstrap_v4.2.1_css_bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/rtl/custom.css') }}">
    @endif

    @stack('css-style')
    <link rel="stylesheet" href="{{ asset('/') }}admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('admin/custom-style.css') }}">
    <style>
        .error {
            color: red;
            border-color: red;
            font-weight: 100 !important;
        }

        .nav-sidebar>.nav-item.menu-open>.nav-link,
        .nav-sidebar>.nav-item:hover>.nav-link,
        .nav-sidebar>.nav-item>.nav-link:focus {
            background-color: #CD1F15 !important;
            color: #fff !important;
        }

        .brand-image-xl {
            line-height: .8;
            margin-bottom: -10px;
            margin-top: -10px !important;
            max-height: 46px !important;
            width: 90% !important;
        }

        body {
            font-family: 'Cairo' !important;
        }

        .nav-sidebar .nav-header {
            font-size: 1.1rem !important;
            color: #fff !important;
        }

        [class*=sidebar-light-] .sidebar a {
            color: #30536B;
        }

        .nav-pills .nav-link:not(.active):hover {
            color: #CD1F15;
        }

        .color_scircle {
            width: 12px !important;
            height: 12px !important;
            border-radius: 50%;
            display: inline-block;
        }

        .red {
            background-color: #ce3441;
        }

        .green {
            background-color: #169c16;
        }

        .yellow {
            background-color: #f5e830;
        }

        .blue {
            background-color: #17a2b8;
        }

        .orange {
            background-color: #ff6c1f;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin::partials.header')
        @include('admin::partials.sidebar')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('admin::partials.footer')

        <!-- jQuery -->
        <script src="{{ asset('/') }}admin/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('/') }}admin/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        @if (App::getLocale() == 'ar')
            <script src="{{ asset('admin/rtl/bootstrap_v4.2.1_js_bootstrap.min.js') }}"></script>
        @endif
        <!-- Bootstrap 4 -->
        <script src="{{ asset('/') }}admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('/') }}admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

        <!-- Page specific script -->
        @stack('js')
        <!-- AdminLTE App -->
        <script src="{{ asset('/') }}admin/dist/js/adminlte.js"></script>
    </div>
</body>

</html>
