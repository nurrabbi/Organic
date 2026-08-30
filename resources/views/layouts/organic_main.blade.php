<!DOCTYPE html>
<html lang="en">

<head>
    <title>Organic - Grocery Store Website</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="Organic" />
    <meta name="keywords" content="organic grocery, food, e-commerce" />
    <meta name="description" content="Organic grocery e-commerce frontend template" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/vendor.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" />
</head>

<body>
    <!-- svgs -->
    @include('frontend.partials.svgs')
    <!-- /svgs -->

    <div class="preloader-wrapper">
        <div class="preloader"></div>
    </div>

    <!-- Cart offcanvas -->
    @include('frontend.partials.cart')
    <!-- /Cart offcanvas -->

    <!-- Menu offcanvas -->
    @include('frontend.partials.menu')
    <!-- /Menu offcanvas -->

    <!-- navbar -->
    @include('frontend.partials.navbar')
    <!-- navbar -->

    
    @yield ("content")


    <!-- footer -->
    @include('frontend.partials.footer')
    <!-- End Footer -->

    <script src="{{ asset('frontend') }}/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/js/script.js"></script>
    <script src="{{ asset('frontend') }}/js/frontend-pages.js"></script>


</body>

</html>
