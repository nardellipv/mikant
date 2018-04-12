<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>MikAnt | Desarrollo de software</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset ('css/topStyle.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="United Comms Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="text/javascript" src="{{ asset('js/top.js') }}"></script>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    @include('front.external.analytics')

    @include('front.external.drift')

    @include('front.external.onesignal')

</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="{{ asset('images/arr.png') }}"></button>

@include('front.layouts.parts.message_success')

<!-- header-section-starts -->
@include('front.layouts.parts.header')
<!-- header-section-ends -->

{{--banner--}}
@include('front.layouts.parts.banner')
{{--banner--}}

{{-- our services--}}
@include('front.layouts.parts.services')
{{-- our services--}}

{{-- our services--}}
@include('front.layouts.parts.about')
{{-- our services--}}

{{-- last news--}}
@include('front.layouts.parts.last_news')
{{-- last news--}}

{{-- contact--}}
@include('front.layouts.parts.contact')
{{-- contact--}}

{{-- footer--}}
@include('front.layouts.parts.footer')
{{-- footer--}}

{{--desplazamiento al hacer click en el menu--}}
<script>
    $(function(){

        $('a[href*=#]').click(function() {

            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                && location.hostname == this.hostname) {

                var $target = $(this.hash);

                $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

                if ($target.length) {

                    var targetOffset = $target.offset().top;

                    $('html,body').animate({scrollTop: targetOffset}, 1000);

                    return false;

                }

            }

        });

    });
</script>
{{--desplazamiento al hacer click en el menu--}}

</body>
</html>