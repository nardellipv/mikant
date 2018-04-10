<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin MikAnt</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{ asset('styleBack/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('styleBack/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('styleBack/assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('styleBack/assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('styleBack/assets/css/colors.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('styleBack/assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('styleBack/assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('styleBack/assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('styleBack/assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->
@yield('style')
<!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('styleBack/assets/js/core/app.js') }}"></script>

    <script type="text/javascript" src="{{ asset('styleBack/assets/js/plugins/ui/ripple.min.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>
@include('back.layouts.parts.navbar')


<div class="page-container">

    @include('back.layouts.parts.menu')

    <div class="content">
        <br>
        @include('back.layouts.parts.message_parts.message_success')
        @include('back.layouts.parts.message_parts.message_errors')

        @yield('content')
    </div>
</div>

@yield('script')
</body>
</html>