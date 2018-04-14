<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('styleBlog/css/style.css') }}" rel="stylesheet" type="text/css"  media="all" />
    <title>MikAnt | Blog</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
<!-- Start-wrap -->
<!-- Start-Header-->
<div class="header">
    <div class="wrap">
        <!-- Start-logo-->
        <div class="logo">
            <a href="{{ url('post') }}"><img src="{{ asset('images/logo.png') }}" title="logo" /></a>
        </div>
        <!-- End-Logo-->
        <!-- Start-Header-nav-->
        <div class="clear"> </div>
        <!-- End-Header-nav-->
    </div>
</div>
<div class="header-nav1">
    <div class="wrap">
        <ul>
            @include('front.layouts.blog.menu')
        </ul>
        {{--<div class="search-bar">
            <ul>
                <li><input type="text"></li>
                <li><form><input type="submit" value="" /></form></li>
            </ul>
        </div>--}}
    </div>
    <!-- End-Header-->
    <div class="clear"> </div>
    <!-- content-gallery-->
</div>
<div class="wrap">
    <div class="about">
        {{--<div class="services-sidebar">
            <h4>Últimas entradas</h4>
            <ul>
                @include('front.layouts.blog.last_post')
            </ul><br>
        </div>--}}
        <div class="bloder-content">
            @include('front.layouts.blog.news_main')
        </div>
        <div class="clear"> </div>
    </div>
</div>
<div class="clear"> </div>
<!-- End-content-gallery-->
<!-- DC Pagination:C9 Start -->
<div class="wrap">
    <!-- DC Pagination:A3 Start -->
    <ul class="dc_pagination dc_paginationA dc_paginationA03">
        {!! $publications->render() !!}
    </ul>
    <!-- DC Pagination:A3 End -->
    <div class="clear"> </div>
    <!-- DC Pagination:C9 End -->
</div>
<div class="clear"> </div>
@include('front.layouts.blog.footer')
<!-- End-wrap -->

</body>
</html>