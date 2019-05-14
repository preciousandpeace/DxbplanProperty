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
                    <h5>Apartments for Rent</h5>
                    <p>We rent out quality apartment blocks at an affordable price.</p>
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
                    <i class="flaticon-house"></i>
                    <h5>Properties For Sale</h5>
                    <p>We offer affordable properties and real estate to any customers looking for a property in Dubai.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="services-info-2">
                    <i class="flaticon-call-center-agent"></i>
                    <h5>Support 24/7</h5>
                    <p>We are happy to take your call anytime of the day.</p>
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
                    <i class="flaticon-office-block"></i>
                    <h5>Commercial</h5>
                    <p>We offer office space with beautiful views to make work life less stressful</p>
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
