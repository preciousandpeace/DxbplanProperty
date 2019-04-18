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

    <h1>Private Policy goes here</h1>

    {{--Consent forms goes here--}}
    @include('cookieConsent::index')
@endsection

@section('footer')
    @include('settings.footer')
@endsection


@section('script')
    @include('settings.js')
@endsection