<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title> 
    @include('backend.layouts.assets.css')
</head>

<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" >
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>
        @include('backend.layouts.sidebar')
        @include('backend.layouts.header')
           @yield('content')
        @include('backend.layouts.footer')
    </div>
    <!-- ./wrapper -->
    @include('backend.layouts.assets.js')
</body>

</html>
