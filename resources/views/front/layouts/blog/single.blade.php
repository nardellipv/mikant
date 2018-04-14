<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ asset('styleBlog/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
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
            <img src="{{ asset('images/logo.png') }}" title="logo"/>
        </div>
        <!-- End-Logo-->
        <!-- Start-Header-nav-->
        <div class="clear"></div>
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

    <div class="blog-box1">
        <div class="blog-box-image">
            <img src="{{ asset($post->photo) }}" title="{{ $post->title }}"/>
        </div>
        <div class="blog-box-content">
            <h5>{{ $post->title }}</h5>
            <p>{!! $post->body !!}</p>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div class="clear"></div>
@include('front.layouts.blog.footer')