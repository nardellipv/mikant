<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>LimHost Domain &amp; Hosting HTML Template</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{ asset('styleHosting/img/core-img/favicon.ico') }}">

    <!-- ::::::::::::::::::: All CSS Files ::::::::::::::::::: -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('styleHosting/css/style.css') }}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('styleHosting/css/responsive.css') }}">

    <!--[if IE]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="wrapper">
        <div class="cssload-loader"></div>
    </div>
</div>
<!-- /.end preloader -->

<!-- ::::::::::::::::::: Header Start ::::::::::::::::::: -->
<header class="header_area">
    @include('hosting.parts.header')
</header>
<!-- ::::::::::::::::::: Header End ::::::::::::::::::: -->

<!-- ::::::::::::::::::: Welcome Area Start ::::::::::::::::::: -->
<section class="welcome_area">
    <div class="container">
        <div class="row">
            <div class="welcome_text_area">
                <div class="w_table">
                    <div class="table_cell">
                        <div class="col-md-9 col-sm-8">
                            <h3>Web <span>Hosting</span></h3>
                            <h4>Get the best speed for your website. the best web hosting started only $1.99.</h4>
                            <div class="get_started_button">
                                <a class="btn btn-default" href="#" role="button">Get Started Now</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="welcome_img hidden-xs">
                                <img src="{{ asset('styleHosting/img/bg-pattern/special-area-img.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

@include('hosting.parts.domainSearch')

@include('hosting.parts.service')

@include('hosting.parts.factsArea')

@include('hosting.parts.speacialArea')

@include('hosting.parts.whyChoose')

@include('hosting.parts.pricePlan')

@include('hosting.parts.offer')

@include('hosting.parts.partner')

<footer class="footer_area">
    @include('hosting.parts.footer')
</footer>
<!-- ::::::::::::::::::: Footer Area End ::::::::::::::::::: -->

<!-- ::::::::::::::::::: All jQuery Plugins ::::::::::::::::::: -->

<!-- jQuery (necessary for all JavaScript plugins) -->
<script src="{{ asset('styleHosting/js/jquery-2.2.4.min.js') }}"></script>

<!-- Bootstrap 3.3.7 js -->
<script src="{{ asset('styleHosting/js/bootstrap.min.js') }}"></script>

<!-- Owl-carousel js -->
<script src="{{ asset('styleHosting/js/owl.carousel.min.js') }}"></script>

<!-- Ajax Contact js -->
<script src="{{ asset('styleHosting/js/ajax-contact.js') }}"></script>

<!-- Meanmenu js -->
<script src="{{ asset('styleHosting/js/meanmenu.js') }}"></script>

<!-- Waypoint js -->
<script src="{{ asset('styleHosting/js/waypoints.min.js') }}"></script>

<!-- Counterup js -->
<script src="{{ asset('styleHosting/js/counterup.min.js') }}"></script>

<!-- jQuery easing js -->
<script src="{{ asset('styleHosting/js/jquery.easing.1.3.js') }}"></script>

<!-- ScrollUp js -->
<script src="{{ asset('styleHosting/js/jquery.scrollUp.js') }}"></script>

<!-- WoW js -->
<script src="{{ asset('styleHosting/js/wow.min.js') }}"></script>

<!-- Active js -->
<script src="{{ asset('styleHosting/js/active.js') }}"></script>

</body>

</html>