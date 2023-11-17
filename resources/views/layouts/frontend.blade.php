<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Online Ecommerce Shopping Store</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/mega-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    @include('frontend.partials.header')

    <!-- ========================================HERO SECTION START:=======================
    =====================================================================================-->
    @yield('content')
    <!-- ========================================HERO SECTION END:=======================
    =====================================================================================-->

    <!-- ========================================FOOTER SECTION:==========================
    =====================================================================================-->
    @include('frontend.partials.footer')
    <!-- ========================================FOOTER SECTION END:======================
    =====================================================================================-->

    <!-- go to top button start -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i
            class="las la-angle-double-up"></i></button>
    <!-- go to top button end -->

    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/js/megamenu.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

</body>

</html>
