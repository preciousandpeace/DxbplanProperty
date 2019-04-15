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

    <!-- Search area start -->
   <!-- <div class="search-area" id="search-area-1">
        <div class="container">
            <div class="search-area-inner">
                <div class="search-contents ">
                    <form action="index.html" method="GET">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="area">
                                        <option>Area From</option>
                                        <option>1500</option>
                                        <option>1200</option>
                                        <option>900</option>
                                        <option>600</option>
                                        <option>300</option>
                                        <option>100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-status">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>Location</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>Delaware</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="category">
                                        <option>Property Types</option>
                                        <option>Residential</option>
                                        <option>Commercial</option>
                                        <option>Land</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <div class="range-slider">
                                        <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <button class="search-button btn-md btn-color" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Search area end -->

    <!-- Featured properties start -->
    <!--<div class="featured-properties content-area-7">
        <div class="container-fluid">
            <div class="main-title">
                <h1>Featured Properties</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row slick-fullwidth">
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Featured</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="http://placehold.it/350x233" alt="property-1" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="http://placehold.it/750x540" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Relaxing Apartment</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Featured</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="http://placehold.it/350x233" alt="property-2" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="http://placehold.it/750x540" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Modern Family Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Featured</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="http://placehold.it/350x233" alt="property-3" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="http://placehold.it/750x540" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Featured</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="http://placehold.it/350x233" alt="property-1" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="http://placehold.it/750x540" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Relaxing Apartment</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Featured</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="http://placehold.it/350x233" alt="property-2" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="http://placehold.it/750x540" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Modern Family Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="tag button alt featured">Featured</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $178,000
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="http://placehold.it/350x233" alt="property-3" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="http://placehold.it/750x540" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                            <i class="fa fa-calendar-o"></i> 2 years ago
                        </span>
                        </div>
                    </div>
                </div>
                <div class="slick-prev slick-arrow-buton">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="slick-next slick-arrow-buton">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Featured properties end -->

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
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="property-box-8">
                        <div class="property-photo">
                            <img src="http://placehold.it/255x170" alt="recent-property" class="img-fluid">
                            <div class="date-box">For Sale</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h3>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                            </div>

                            <div class="properties-listing">
                                <span>3 Beds</span>
                                <span>2 Baths</span>
                                <span>980 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                    <div class="property-box-8">
                        <div class="property-photo">
                            <img src="http://placehold.it/255x170" alt="recent-property" class="img-fluid">
                            <div class="date-box">For Sale</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="properties-details.html">Masons Villas</a>
                                </h3>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>3 Beds</span>
                                <span>2 Baths</span>
                                <span>980 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp delay-04s">
                    <div class="property-box-8">
                        <div class="property-photo">
                            <img src="http://placehold.it/255x170" alt="recent-property" class="img-fluid">
                            <div class="date-box">For Sale</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="properties-details.html">Luxury Villa</a>
                                </h3>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>3 Beds</span>
                                <span>2 Baths</span>
                                <span>980 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                    <div class="property-box-8">
                        <div class="property-photo">
                            <img src="http://placehold.it/255x170" alt="recent-property" class="img-fluid">
                            <div class="date-box">For Sale</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="properties-details.html">Park avenue</a>
                                </h3>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>3 Beds</span>
                                <span>2 Baths</span>
                                <span>980 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-pad wow fadeInLeft delay-04s">
                    <div class="overview aa overview-box">
                        <img src="{{asset('assets/img/place1.jpg')}}" alt="place1" class="big-img">
                        <div class="mask">
                            <h2>O2 Tower</h2>

                            <a href="{{route('property.02Tower')}}" class="btn btn-border">Learn more</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-pad wow fadeInUp delay-04s">
                    <div class="overview aa overview-box">
                        <img src="{{asset('assets/img/place2.jpg')}}" alt="place2" class="big-img">
                        <div class="mask">
                            <h2>Regina Tower</h2>

                            <a href="{{route('property.reginaTower')}}" class="btn btn-border">Learn more</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-pad wow fadeInDown delay-04s">
                    <div class="overview aa overview-box">
                        <img src="{{asset('assets/img/place3.jpg')}}" alt="place3" class="big-img">
                        <div class="mask">
                            <h2>Samaya 2 <br>Hotel Apartment</h2>

                            <a href="{{route('property.samaya2HotelApartment')}}" class="btn btn-border">Learn more</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-pad wow fadeInRight delay-04s">
                    <div class="overview aa overview-box">
                        <img src="{{asset('assets/img/place4.jpg')}}" alt="place4" class="big-img">
                        <div class="mask">
                            <h2>The Square</h2>

                            <a href="{{route('property.theSquare')}}" class="btn btn-border">Learn more</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Most popular places end -->

    <!-- Agent start -->
   <!-- <div class="agent content-area">
        <div class="container">
            <div class="main-title">
                <h1>Meet Our Agents</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="agent-2">
                        <div class="agent-photo">
                            <a href="agent-detail.html">
                                <img src="http://placehold.it/255x276" alt="avatar-5" class="img-fluid">
                            </a>
                        </div>
                        <div class="agent-details">
                            <h5><a href="agent-detail.html">Martin Smith</a></h5>
                            <p>Web Developer</p>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="agent-2">
                        <div class="agent-photo">
                            <a href="agent-detail.html">
                                <img src="http://placehold.it/255x276" alt="avatar-6" class="img-fluid">
                            </a>
                        </div>
                        <div class="agent-details">
                            <h5><a href="agent-detail.html">John Pitarshon</a></h5>
                            <p>Creative Director</p>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                    <div class="agent-2">
                        <div class="agent-photo">
                            <a href="agent-detail.html">
                                <img src="http://placehold.it/255x276" alt="avatar-7" class="img-fluid">
                            </a>
                        </div>
                        <div class="agent-details">
                            <h5><a href="agent-detail.html">Maria Blank</a></h5>
                            <p>Office Manager</p>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                    <div class="agent-2">
                        <div class="agent-photo">
                            <a href="agent-detail.html">
                                <img src="http://placehold.it/255x276" alt="avatar-11" class="img-fluid">
                            </a>
                        </div>
                        <div class="agent-details">
                            <h5><a href="agent-detail.html">Karen Paran</a></h5>
                            <p>Support Manager</p>
                            <ul class="social-list clearfix">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div >-->
    <!-- Agent end -->

    <!-- Testimonial start -->
   <!-- <div class="testimonial overview-bgi wow fadeInUp delay-04s" style="background-image: url(http://placehold.it/1920x541)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="testimonial-inner">
                        <header class="testimonia-header">
                            <h1>Testimonial</h1>
                        </header>
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="avatar">
                                        <img src="http://placehold.it/120x120" alt="avatar" class="img-fluid rounded-circle">
                                    </div>
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <div class="author-name">
                                        Martin Smith
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="avatar">
                                        <img src="http://placehold.it/120x120" alt="avatar-2" class="img-fluid rounded-circle">
                                    </div>
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <div class="author-name">
                                        Emma Connor
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="avatar">
                                        <img src="http://placehold.it/120x120" alt="avatar-3" class="img-fluid rounded-circle">
                                    </div>
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                    </p>
                                    <div class="author-name">
                                        John Antony
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Testimonial end -->

    <!-- Blog start -->
   <!-- <div class="blog content-area-2">
        <div class="container">
            <div class="main-title">
                <h1>Latest Blog</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row wow fadeInUp delay-04s">
                <div class="col-lg-6 col-md-6">
                    <div class="row blog-3">
                        <div class="col-lg-5 col-md-12 col-pad ">
                            <div class="photo">
                                <img src="http://placehold.it/225x280" alt="blog-6" class="img-fluid">
                                <div class="date-box">
                                    <span>03</span>May
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-pad align-self-center">
                            <div class="detail">
                                <h3>
                                    <a href="blog-single-sidebar-right.html">Buying a Home</a>
                                </h3>
                                <div class="post-meta">
                                    <span><a href="#"><i class="fa fa-user"></i>John Antony</a></span>
                                    <span><a href="#"><i class="fa fa-clock-o"></i>7 Comment</a></span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row blog-3">
                        <div class="col-lg-5 col-md-12 col-pad ">
                            <div class="photo">
                                <img src="http://placehold.it/225x280" alt="blog-5" class="img-fluid">
                                <div class="date-box">
                                    <span>03</span>May
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-pad align-self-center">
                            <div class="detail">
                                <h3>
                                    <a href="blog-single-sidebar-right.html">Selling Your Home</a>
                                </h3>
                                <div class="post-meta">
                                    <span><a href="#"><i class="fa fa-user"></i>John Antony</a></span>
                                    <span><a href="#"><i class="fa fa-clock-o"></i>7 Comment</a></span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Blog start -->

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
    @include('settings.footer')
@endsection


@section('script')
    @include('settings.js')
@endsection
