<!DOCTYPE HTML>
<html>
<head>
    <title>Hosting MikAnt | El mejor lugar para tu sitio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="keywords" content="Hosting, hosting barato, hosting al mejor precio, el mejor lugar para tu web, hosting paginas web, sitios webs" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('styleHosting/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('styleHosting/js/jquery-1.11.1.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('styleHosting/css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!-- webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!-- webfonts -->
    <!-- Add fancyBox main JS and CSS files -->
    <script src="{{ asset('styleHosting/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
    <link href="{{ asset('styleHosting/css/popup.css') }}" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>

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

@include('hosting.layouts.parts.header')


@include('hosting.layouts.parts.banner')


@include('hosting.layouts.parts.searchDomain')


@include('hosting.layouts.parts.service')


@include('hosting.layouts.parts.hot')


@include('hosting.layouts.parts.prices')


@include('hosting.layouts.parts.footer')

<link href="{{ asset('styleHosting/css/flexslider.css') }}" rel='stylesheet' type='text/css' />
<script defer src="{{ asset('styleHosting/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
</body>
</html>