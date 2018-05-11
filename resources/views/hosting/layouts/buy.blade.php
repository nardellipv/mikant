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
</head>
<body>

@include('hosting.layouts.parts.headerDomain')
<div class="about">
    <div class="container">
        <h1>Registrar<span class="m_1"><br>cuenta</span></h1>
    </div>
</div>
@include('hosting.layouts.parts.buyPlan')

@include('hosting.layouts.parts.footer')
</body>
</html>