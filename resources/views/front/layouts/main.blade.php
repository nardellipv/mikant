<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>&#x26A0;&#xFE0F; MikAnt |  Desarrollo de sistemas web | El mejor precio de Argentina</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css'/>
    <link rel="canonical" href="https://mikant.com"/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset ('css/topStyle.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Custom Theme files -->
    <meta name="title" content="Desarrollo de sistemas web">
    <meta name="description" content="&#x25B7;Nos dedicamos al diseño y desarrollo de paginas y sistemas web autoadministrables.
            Creación de sistemas web a medida para el manejo de empresas&#x25C1;">

    <meta name="robots" content="index, follow">

    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="MikAnt">

    <meta property="og:title" content="MikAnt | Desarrollo de sistemas a medida" />
    <meta property="og:description" content="Empresa de desarrollo web y sistemas a medida autoadministrables. Sitios web con sistema de backend para la
                    carga de contenido. Sistemas para empresas tales control de stock, control de personal." />
    <meta property="og:image" content="https://mikant.com/images/imglogo.png" />
    <meta property="og:url" content="https://mikant.com" />

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

@include('front.external.pixelFace')

@include('front.external.drift')
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="{{ asset('images/arr.png') }}" alt="flecha">
</button>


@include('front.layouts.parts.message_success')
@include('back.layouts.parts.message_parts.message_errors')

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
<script>
    (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
        t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
    })(window, document, '_gscq','script','//widgets.getsitecontrol.com/138231/script.js');
</script>
</body>
</html>