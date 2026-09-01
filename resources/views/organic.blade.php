use Illuminate\Http\Request;
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Organic - Grocery Store Website</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/images/icon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    


    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

</head>

<body>

    <!-- svgs -->
    @include('frontend.partials.svgs')
    <!-- /svgs -->

    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>

    <!-- Cart Section -->
    @include('frontend.partials.cart')
    <!-- /Cart Section -->

    <!-- Menu Section -->
    @include('frontend.partials.menu')
    <!-- /Menu Section -->

    <!-- Header/Navbar Section -->
    @include('frontend.partials.navbar')
    <!-- /Header/Navbar Section -->

    <!-- Banner Section -->
    @include('frontend.sections.banner')
    <!-- /Banner Section -->

    <!-- Category Section -->
    @include('frontend.sections.category')
    <!-- /Category Section -->

    <!-- Best selling Section  -->
    @include('frontend.sections.best_selling')
    <!-- /Best Selling Section -->

    <!-- Items on SALE -->
    @include('frontend.sections.items_on_sale')
    <!-- /Items on SALE -->

    <!-- Featured Products Section -->
    @include('frontend.sections.featured_products')
    <!-- /Featured Products Section -->

    <!-- Newsletter Section -->
    @include('frontend.sections.news_letter')
    <!-- /Newsletter Section -->

    <!-- Most Popular Products Section -->
    @include('frontend.sections.most_popular_products')
    <!-- /Most Popular Products Section -->

    <!-- Latest Products Section -->
    @include('frontend.sections.latest_products')
    <!-- /Latest Products Section -->

    <!-- Blog Section -->
    @include('frontend.sections.blog')
    <!-- /Blog Section -->

    <!-- Online App Section -->
    @include('frontend.sections.app_link')
    <!-- /Online App Section -->

    <!-- Related Product Section -->
    @include('frontend.sections.related_products')
    <!-- /Related Product Section -->

    <!-- Features Section -->
    @include('frontend.sections.features')
    <!-- /Features Section -->

    <!-- Footer -->
    @include('frontend.partials.footer')
    <!-- /Footer -->

    <!-- Bottom Signature -->
    <div id="footer-bottom">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4 copyright">
                    <p>© 2024 Organic. All rights reserved.</p>
                </div>
                <div class="col-md-4 credit-link text-start ">
                    <p>Backend Developed by <a href="https://github.com/nurrabbi">Nur Hossain Rabbi</a></p>
                </div>
                <div class="col-md-4 credit-link text-start text-md-end">
                    <p>HTML Template by <a href="https://templatesjungle.com/">TemplatesJungle</a> Distributed By <a
                            href="https://themewagon.com">ThemeWagon</a> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Signature -->


    <script src="{{ asset('frontend') }}/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/js/script.js"></script>
</body>

</html>
