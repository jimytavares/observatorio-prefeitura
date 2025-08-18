<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="front-pages">
<html lang="en" class="light-style layout-navbar-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="front-pages">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Prefeitura - @yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('img/logos/fv-2024-site-visite.png') }}" type="image/x-icon"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}">
      
    <!-- Font Awesome 5.15.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-********" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" >
    <link rel="stylesheet" href="{{ asset('css/responsividade.css') }}" >
      
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page.css') }}">
      
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}">

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/front-config.js') }}"></script>

    <!-- Imports Nosso CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/title-page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/black-and-white.css') }}">

    <style>
        .back-to-top {
          border: none;
          position: fixed;
          display: none;
          right: 30px;
          bottom: 30px;
          z-index: 11;
          animation: action 1s infinite alternate;
        }
      </style>
      
    <script>
        // Back to top button
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });
        $('.back-to-top').click(function () {
            $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
            return false;
        });
      </script>
      
  </head>
  <body style="background-color:# !important;">

    @include('globals.header')

    @yield('content')
   
    @include('globals.footer')
    
  </body>
</html>