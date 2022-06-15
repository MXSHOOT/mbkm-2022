<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title -->
        <title>Aplikasi Peminjaman Ruangan</title>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('img/core-img/logoSTTNF.jpg') }}">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="{{ asset('style.css') }}">
    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->
        <!-- Header Area Start -->
        @include('landingpage/header')
        <br />
        <!-- Header Area End -->
        <!-----------awal area link internal----------------->
        @yield('content')
        <!-----------akhir area link internal----------------->
        <br />
        <!-- Contact Us Area Start -->
        @include('landingpage/contact')
        <!-- Contact Us Area End -->
        <br />
        <!-- Footer Area Start -->
        @include('landingpage/footer')
        <!-- Footer Area End -->
        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Popper -->
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- All Plugins -->
        <script src="{{ asset('js/roberto.bundle.js') }}"></script>
        <!-- Active -->
        <script src="{{ asset('js/default-assets/active.js') }}"></script>
    </body>

</html>