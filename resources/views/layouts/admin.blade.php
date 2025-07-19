<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', 'Real Estate Admin Panel')">
    <title>@yield('title', 'Admin') | Real Estate</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon2.ico') }}">

    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 px-0">
                <!-- Admin Sidebar -->
                @include('admin.partials.sidebar')
            </div>
            <div class="col-md-9 col-lg-10">
                <!-- Admin Header -->
                @include('admin.partials.header')
                
                <!-- Main Content -->
                <main class="py-4">
                    @yield('content')
                </main>
                
                <!-- Admin Footer -->
                @include('admin.partials.footer')
            </div>
        </div>
    </div>

    <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    @stack('scripts')
</body>
</html>