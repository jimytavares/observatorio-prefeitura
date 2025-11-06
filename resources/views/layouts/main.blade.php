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

    <script src="{{ URL::asset('js/vue/axios.min.js') }}"></script>
    <script src="{{ URL::asset('js/vue/axios-dev.js') }}"></script>
    <script src="{{ asset('js/vue/vue.min.js') }}"></script>
    <script src="{{ asset('js/vue/vue-dev.js') }}"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}">
      
    <!-- Font Awesome 5.15.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha384-********" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/globals.css') }}" type="text/css" media="all" >
    <link rel="stylesheet" href="{{ asset('assets/css/responsividade.css') }}" type="text/css" media="all" >
      
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

    @yield('styles')

  </head>
  <body style="background-color:# !important;">

    @include('globals.header')

    <div id="base-vue">
      @yield('content')
    </div>


    @include('globals.footer')

  <script src="{{ asset('assets/vendor/js/dropdown-hover.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/mega-dropdown.js') }}"></script>
    
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('assets/js/front-main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('assets/js/front-page-landing.js') }}"></script>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue-apexcharts"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

  @yield('scripts')

    
  </body>
</html>