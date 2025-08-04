<!doctype html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Real Estate Admin Panel">
    <meta name="keywords" content="real estate, property, admin panel">
    <meta name="author" content="Real Estate">
    <title>@yield('title', 'Admin') | Real Estate Admin</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon2.ico') }}">

    <!-- Google Font -->    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/webfonts/unicode/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/control.css') }}">

    @stack('styles')
</head>
<body class="dashboard-main">

    <div class="preloader">
        <div class="loader"></div>
    </div>

    <div id="page_wrapper" class="bg-light-gray">
        <div class="sidebar-page-wrapper">
            <!-- Admin Sidebar -->
            @include('admin.partials.sidebar')lollol
            
            <div class="right-sidebar-block">
                <!-- Admin Header -->
                @include('admin.partials.header')
                
                <!-- Main Content -->
                @yield('content')
                
                <!-- Admin Footer -->
                @include('admin.partials.footer')
            </div>
        </div>
    </div>

    <!-- JavaScript Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/piechart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/range/tmpl.js') }}"></script>
    <script src="{{ asset('assets/js/range/jquery.dependClass.js') }}"></script>
    <script src="{{ asset('assets/js/range/draggable.js') }}"></script>
    <script src="{{ asset('assets/js/range/jquery.slider.js') }}"></script>
    <script src="{{ asset('assets/js/paraxify.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @stack('scripts')
</body>
</html>