@extends('settings.main')

@section('head')
    @include('settings.head')
@endsection

@section('title', 'Dxb Plan Property')

@section('header_navbar')
    @include('settings.header-navbar')
@endsection


@section('main')
    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="{{asset('assets/img/home3.jpg')}}" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="t-center">
                                <h1 data-animation="animated fadeInDown delay-05s">DxbPlanProperty Makes<br/>Buying Amazing And Simple</h1>
                                <p data-animation="animated fadeInUp delay-10s">
                                    DxbPlanProperty, number 1 for buying real estate in Dubai.
                                </p>
                                <a data-animation="animated fadeInUp delay-10s" href="{{route('property.properties')}}" class="btn btn-lg btn-round btn-theme">View Our Properties</a>
                                <a data-animation="animated fadeInUp delay-10s" href="{{route('property.contactUs')}}" class="btn btn-lg btn-round btn-white-lg-outline">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/img/home4.jpg')}}" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="t-right">
                                <h1 data-animation="animated fadeInDown delay-05s">Find Your Dream Properties<br/> with DxbPlanProperty </h1>
                                <p data-animation="animated fadeInUp delay-10s">
                                    DxbPlanProperty, number 1 for buying real estate in Dubai.
                                </p>
                                <a data-animation="animated fadeInUp delay-10s" href="{{route('property.properties')}}" class="btn btn-lg btn-round btn-theme">View Our Properties</a>
                                <a data-animation="animated fadeInUp delay-10s" href="{{route('property.contactUs')}}" class="btn btn-lg btn-round btn-white-lg-outline">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/img/home5.jpg')}}" alt="banner">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="carousel-content container">
                            <div class="t-left">
                                <h1 data-animation="animated fadeInUp delay-05s">Best Place For <br/> Buying Properties in Dubai</h1>
                                <p data-animation="animated fadeInUp delay-10s">
                                    DxbPlanProperty, number 1 for buying real estate in Dubai.
                                </p>
                                <a data-animation="animated fadeInUp delay-10s" href="{{route('property.properties')}}" class="btn btn-lg btn-round btn-theme">View Our Properties</a>
                                <a data-animation="animated fadeInUp delay-10s" href="{{route('property.contactUs')}}" class="btn btn-lg btn-round btn-white-lg-outline">Contact us</a>
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

    <!-- services start -->
    <div class="services content-area-20 bg-white">
        <div class="container">
            <div class="main-title">
                <h1>What Are you Looking For?</h1>
                <p>DxbPlanProperty can offer you luxury properties in the heart of Dubai at an affordable price.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-2 wow fadeInLeft delay-04s">
                    <i class="flaticon-hotel-building"></i>
                    <h5>Apartments for Rent</h5>
                    <p>We rent out quality apartment blocks at an affordable price.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-1 wow fadeInUp delay-04s">
                    <i class="flaticon-house"></i>
                    <h5>Properties For Sale</h5>
                    <p>We offer affordable properties and real estate to any customers looking for a property in Dubai.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 s-brd-3 wow fadeInDown delay-04s">
                    <i class="flaticon-call-center-agent"></i>
                    <h5>Support 24/7</h5>
                    <p>We are happy to take your call anytime of the day.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 services-info-3 wow fadeInRight delay-04s">
                    <i class="flaticon-office-block"></i>
                    <h5>Commercial</h5>
                    <p>We offer office space with beautiful views to make work life less stressful</p>
                </div>
            </div>
        </div>
    </div>
    <!-- services end -->

    <!-- Recent Properties start -->
    <div class="recent-properties content-area-2">
        <div class="container">
            <div class="main-title">
                <h1>Recent Properties</h1>
                <p>Recently added properties in the heart of Dubai.</p>
            </div>
            <div class="row">

                @foreach($top4 as $top)
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="property-box-8">
                        <div class="property-photo">
                            <a href="{{route('property.property',str_replace(' ', '_',$top->name))}}"><img src="{{asset('app/public/'.$top->image)}}" alt="recent-property" class="img-fluid" style="width: 330px; height: 220px"></a>
                            <div class="date-box">For Sale</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="{{route('property.property',str_replace(' ', '_',$top->name))}}">{{$top->name}}</a>
                                </h3>
                                <div class="location">
                                    <a href="{{route('property.property', $top->name)}}">
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 address pk,
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Recent Properties end -->

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
                        <img src="{{asset('app/public/'. $layout->image)}}" alt="place1" class="big-img">
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

    <!-- intro section start -->
    <div class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <img src="assets/img/logos/logo-white.png" alt="loo">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="intro-text">
                        <h3>Looking To Buy a Property in Dubai?</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <a href="{{route('property.contactUs')}}" class="btn btn-md sn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- intro section end -->
    {{--Consent forms goes here--}}
    @include('cookieConsent::index')
@endsection

@section('footer')
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="footer-item">
                <h4>Contact Us</h4>

                <ul class="contact-info">
                    <li>
                        Address: 20/F Green Road, Dhanmondi, Dhaka
                    </li>
                    <li>
                        Email: <a href="mailto:info@themevessel.com">info@themevessel.com</a>
                    </li>
                    <li>
                        Phone: <a href="tel:+971555396242">+971555396242</a>
                    </li>
                </ul>

                <ul class="social-list clearfix">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="footer-item">
                <h4>
                    Useful Links
                </h4>
                <ul class="links">
                    <li>
                        <a href="{{route('property.index')}}"><i class="fa fa-angle-right"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{route('property.properties')}}"><i class="fa fa-angle-right"></i>Properties</a>
                    </li>
                    <li>
                        <a href="{{route('property.contactUs')}}"><i class="fa fa-angle-right"></i>Contact</a>
                    </li>
                    <li>
                        <a href="{{route('property.aboutUs')}}"><i class="fa fa-angle-right"></i>About</a>
                    </li>
                    <li>
                        <a href="/admin"><i class="fa fa-angle-right"></i>Admin</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="footer-item clearfix">
                <h4>Subscribe</h4>
                <div class="Subscribe-box">
                    <p>Subscribe to get notification about any newly added properties.</p>
                    <form action="{{route('subscribe.store')}}" method="POST" id="subscribeForm">
                        @csrf
                        <div class="form-group email">
                            <input type="text" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" name="email" placeholder="Enter Address">
                            <div class="pt-2 text-danger error-message"></div>
                        </div>
                        <div class="send-btn">
                            <button type="submit" id="subscribe" name="subscribe" class="btn btn-block btn-color subscribe">
                                Subscribe
                            </button>
                        </div>
                    </form>
                    <div class="text-primary success-message pt-2" id="hidden" style="text-align: center"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <p class="copy">&copy;  <script>document.write(new Date().getFullYear());</script> <a href="https://pkspiderweb.com/" target="_blank"> PkSpiderWeb</a>. Trademarks and brands are the property of DxbPlanProperty.</p>
        </div>
    </div>
@endsection


@section('script')
    @include('settings.js')
@endsection
