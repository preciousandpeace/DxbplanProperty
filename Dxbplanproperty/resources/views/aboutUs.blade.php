@extends('settings.main')

@section('head')
@include('settings.head')
@endsection

@section('title', 'Contact us')

@section('header_navbar')
@include('settings.header-navbar')
@endsection


@section('main')


<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>About</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('property.index')}}">Home</a></li>
                <li class="active">about</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- services start -->
<div class="services svs content-area-13">
    <div class="container">
        <div class="main-title">
            <h1>About us and our Services</h1>
            <p>Talk to us to see what we can offer.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services-info-2">
                    <i class="flaticon-hotel-building"></i>
                    <h5>Apartments Clean</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services-info-2">
                    <i class="flaticon-padlock"></i>
                    <h5>Security</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services-info-2">
                    <i class="flaticon-air-conditioner"></i>
                    <h5>Air conditioning</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services-info-2">
                    <i class="flaticon-call-center-agent"></i>
                    <h5>Support 24/7</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services-info-2">
                    <i class="flaticon-agreement"></i>
                    <h5>Trusted Agents</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services-info-2">
                    <i class="flaticon-room-service"></i>
                    <h5>Room Service</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services end -->



{{--Consent forms goes here--}}
@include('cookieConsent::index')
@endsection

@section('footer')
@include('settings.footer')
@endsection


@section('script')
@include('settings.js')
@endsection
