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
                @foreach($layouts as $layout)
                <div class="col-lg-3 col-md-6 col-sm-6 col-pad wow fadeInLeft delay-04s">
                    <div class="overview aa overview-box">
                        <img src="{{asset('assets/img/'. $layout->image. '.jpg')}}" alt="place1" class="big-img">
                        <div class="mask">
                            <h2>{{$layout->name}}</h2>

                            <a href="{{route('property.property', $layout->slug)}}" class="btn btn-border">Learn more</a>
                        </div>
                    </div>
                    <h5>{{$layout->name}}</h5>
                </div>
                @endforeach
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
