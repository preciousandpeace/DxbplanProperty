@extends('settings.main')

@section('head')
@include('settings.head')
@endsection

@section('title', 'All properties')

@section('header_navbar')
@include('settings.header-navbar')
@endsection


@section('main')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Our Properties</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('property.index')}}">Home</a></li>
                <li class="active">Properties</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->
<br>
<!-- Most popular places start -->
<div class="most-popular-places content-area-3">
    <div class="container">
        <div class="main-title">
            <h1>Our Properties</h1>
            <p>Click to learn more about the fantastic properties we have to offer.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-pad wow fadeInLeft delay-04s">
                    <div class="overview aa overview-box">
                        <img src="{{asset('assets/img/place1.jpg')}}" alt="place1" class="big-img">
                        <div class="mask">
                            <h2>O2 Tower</h2>

                            <a href="{{route('property.propertiesdetails')}}" class="btn btn-border">Learn more</a>
                        </div>
                    </div>
                    <h3>O2 Tower</h3>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-pad wow fadeInUp delay-04s">
                    <div class="overview aa overview-box">
                        <img src="{{asset('assets/img/place2.jpg')}}" alt="place2" class="big-img">
                        <div class="mask">
                            <h2>Regina Tower</h2>

                            <a href="{{route('property.propertiesdetails')}}" class="btn btn-border">Learn more</a>
                        </div>
                    </div>
                    <h3>Regina Tower</h3>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-pad wow fadeInDown delay-04s">
                    <div class="overview aa overview-box">
                        <img src="{{asset('assets/img/place3.jpg')}}" alt="place3" class="big-img">
                        <div class="mask">
                            <h2>Samaya 2 <br>Hotel Apartment</h2>

                            <a href="{{route('property.propertiesdetails')}}" class="btn btn-border">Learn more</a>
                        </div>
                    </div>
                    <h3>Samaya 2 Hotel Apartment</h3>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-pad wow fadeInRight delay-04s">
                    <div class="overview aa overview-box">
                        <img src="{{asset('assets/img/place4.jpg')}}" alt="place4" class="big-img">
                        <div class="mask">
                            <h2>The Square</h2>

                            <a href="{{route('property.propertiesdetails')}}" class="btn btn-border">Learn more</a>
                        </div>
                    </div>
                    <h3>The Square</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Most popular places end -->

{{--Consent forms goes here--}}
@include('cookieConsent::index')
@endsection

@section('footer')
@include('settings.footer')
@endsection


@section('script')
@include('settings.js')
@endsection
