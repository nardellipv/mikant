<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>MikAnt | Desarrollo de software</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <link rel="canonical" href="http://www.mikant.com"/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset ('css/topStyle.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Custom Theme files -->
    <meta name="title" content="Desarrollo de sistemas web">
    <meta name="description" content="Nos dedicamos al desarrollo y diseño de sistemas web autoadministrables. Creación de sistemas web para el manejo de
    empresas">
    <meta name="keywords"
          content="diseño web, diseño web argentina, empresa desarrollo web, empresa diseño web, empresa dedicada al desarrollo de paginas web,  empresas desarrollo paginas web, los mejos sistemas webs, aplicaciones web, aplicaciones  administrables web">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="MikAnt">
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

@include('front.external.oneSignal')

<!-- Hotjar Tracking Code for mikant.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:878852,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="{{ asset('images/arr.png') }}" alt="flecha">
</button>

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
    $(function () {

        $('a[href*=#]').click(function () {

            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                && location.hostname == this.hostname) {

                var $target = $(this.hash);

                $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');

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