@extends('settings.main')

@section('head')
    @include('settings.head')
@endsection

@section('title', 'About us')

@section('header_navbar')
    @include('settings.header-navbar')
@endsection


@section('main')
    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="{{asset('assets/img/home.png')}}" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="t-center">
                                <h1 data-animation="animated fadeInDown delay-05s">We love make things <br/>amazing and simple</h1>
                                <p data-animation="animated fadeInUp delay-10s">
                                    This is real estate website template based on Bootstrap 4 framework.
                                </p>
                                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-round btn-theme">Get Started Now</a>
                                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://placehold.it/1920x1050" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="t-right">
                                <h1 data-animation="animated fadeInDown delay-05s">Find Your <br/> Dream Properties</h1>
                                <p data-animation="animated fadeInUp delay-10s">
                                    This is real estate website template based on Bootstrap 4 framework.
                                </p>
                                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-round btn-theme">Get Started Now</a>
                                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="http://placehold.it/1920x1050" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="t-left">
                                <h1 data-animation="animated fadeInUp delay-05s">Best Place For <br/> Sell Properties</h1>
                                <p data-animation="animated fadeInUp delay-10s">
                                    This is real estate website template based on Bootstrap 4 framework.
                                </p>
                                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-round btn-theme">Get Started Now</a>
                                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-round btn-white-lg-outline">Free Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
            </a>
        </div>
    </div>
    <!-- banner end -->
    <h1>Add the content here</h1>
@endsection