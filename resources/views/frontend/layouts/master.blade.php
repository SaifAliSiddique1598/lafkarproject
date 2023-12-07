<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | Lafkar </title>
        <!-- Favicon -->
        <link href="{{ URL::asset('assets/images/favicon.ico') }}" rel="shortcut icon" />
        <link href="{{ URL::asset('assets/images/favicon.ico') }}" rel="apple-touch-icon">
        <!-- Slider -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <!-- Styling -->
        <link href="{{ URL::asset('/frontend_assets/css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('/frontend_assets/css/custom-style.css') }}" rel="stylesheet" type="text/css" />
        @yield('css')
    </head>
    <body>
        <!-- HEADER SECTION -->
        @include('frontend.layouts.header')

        <!-- CONTENT SECTION -->
            <div>
                @yield('content')
            </div>

        <!-- FOOTER SECTION -->
        @include('frontend.layouts.footer')

        <script src="{{ URL::asset('/frontend_assets/js/jquery.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#menuIcon').click(function(){
                    $('#menuBx').toggleClass('active');
                });
                $('#closeMenu').click(function(){
                    $('#menuBx').removeClass('active');
                });
            });
        </script>
        @yield('script')
    </body>

</html>
