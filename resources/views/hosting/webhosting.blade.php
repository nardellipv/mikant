@extends('hosting.layouts.web')
@section('content')
    <section class="breadcumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb_section">
                        <!-- Breadcumb page title start -->
                        <div class="page_title">
                            <h3>Web Hosting</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hosting_intoduce_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="special_area_text">
                        <h3>Get your special web hosting plan for your start-up business</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur laboriosam molestias
                            aliquid impedit excepturi sunt provident quia cum, fuga deleniti assumenda eos officia
                            atque, ratione distinctio labore quasi repudiandae neque.</p>
                        <h5>Auto Backup</h5>
                        <h5>Unlimited Bandwidth</h5>
                        <h5>Super Page Load Speed</h5>
                        <div class="get_started_button">
                            <a class="btn btn-default" href="#" role="button">Get Started Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="special_area_image pull-right">
                        <img src="{{ asset('styleHosting/img/bg-pattern/hosting.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('hosting.parts.pricePlan')

    @include('hosting.parts.offer')

    @include('hosting.parts.partner')

@endsection