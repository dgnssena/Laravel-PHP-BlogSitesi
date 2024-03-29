<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets') }}/admin/production/images/favicon.ico" type="image/ico" />

    <title>@yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets') }}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets') }}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets') }}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets') }}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!summernote-->
    <link href="{{asset('assets')}}/admin/vendors/summernote/css/summernote-bs4.css">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets') }}/admin/build/css/custom.min.css" rel="stylesheet">
    @yield('css')
    @yield('javascript')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                @include('admin._header')
                @include('admin._sidebar')
                @yield('content')
                @include('admin._footer')
                @yield('footer')
            </div>
        </div>
    </div>
</div>
</body>
</html>
