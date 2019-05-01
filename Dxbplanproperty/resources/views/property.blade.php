@extends('settings.main')

@section('head')
    @include('settings.head')
@endsection

@section('title', $propertyDetails->name)

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
                    <li><a href="{{route('property.properties')}}">Property</a></li>
                    <li class="active">{{$propertyDetails->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->

    <!-- Properties details page start -->
    <div class="properties-details-page content-area-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                        <div class="heading-properties">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h3>{{$propertyDetails->name}}</h3>
                                        <p><i class="fa fa-map-marker"></i> {{$propertyDetails->address}}</p>
                                    </div>
                                    <div class="p-r">
                                        <h3>{{$propertyDetails->convertPrice()}}</h3>
                                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">

                            @foreach (json_decode($properties->images) as $image)
                                <div class="{{$count == 0 ? 'active' : ''}} item carousel-item" data-slide-number="{{$count++}}">
                                    <img src="{{asset('app/public/'.$image)}}" class="img-fluid" alt="properties-photo" style="width: 1110px; height: 587px">
                                </div>
                            @endforeach
                            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators smail-properties list-inline nav nav-justified ">
                            @foreach (json_decode($properties->images) as $image)
                                <li class="list-inline-item">
                                    <a id="carousel-selector-{{$count1++}}" data-slide-to="{{$count1sub++}}" data-target="#propertiesDetailsSlider">
                                        <img src="{{asset('app/public/'.$image)}}" class="img-fluid" alt="properties-photo-smale" style="width: 200px; height: 117px">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 slider">
                    <!-- Search area start -->

                    <!-- Tabbing box start -->
                    <div class="tabbing tabbing-box mb-60">
                        <ul class="nav nav-tabs" id="carTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Location</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="carTabContent">
                            <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                <h3 class="heading">Property Description</h3>
                                <p>{!! $properties->description !!}</p>
                                <p></p>
                            </div>


                            <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">
                                <div class="property-video">
                                    <h3 class="heading">Property Vedio</h3>
                                    <iframe src="https://www.youtube.com/embed/m5_AKjDdqaU"></iframe>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
                                <div class="section location">
                                    <h3 class="heading">Property Location</h3>
                                    <div class="map">
                                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q={{str_replace(',', '%2C', str_replace('/', '%2F', str_replace(' ', '%20', $propertyDetails->address)))}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Features opions start -->
                    <div class="features-opions mb-60">
                        <h3 class="heading">Features</h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-air-conditioner"></i>
                                        Air conditioning
                                    </li>
                                    <li>
                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                        Wifi
                                    </li>
                                    <li>
                                        <i class="flaticon-swimmer"></i>
                                        Swimming Pool
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        Double Bed
                                    </li>
                                    <li>
                                        <i class="flaticon-balcony-and-door"></i>
                                        Balcony
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-old-typical-phone"></i>
                                        Telephone
                                    </li>
                                    <li>
                                        <i class="flaticon-car-repair"></i>
                                        Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-parking"></i>
                                        Parking
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        TV
                                    </li>
                                    <li>
                                        <i class="flaticon-theatre-masks"></i>
                                        Home Theater
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        Alarm
                                    </li>
                                    <li>
                                        <i class="flaticon-padlock"></i>
                                        Security
                                    </li>
                                    <li>
                                        <i class="flaticon-weightlifting"></i>
                                        Gym
                                    </li>
                                    <li>
                                        <i class="flaticon-idea"></i>
                                        Electric Range
                                    </li>
                                    <li>
                                        <i class="flaticon-green-park-city-space"></i>
                                        Private space
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Contact 1 start -->
                    <div class="contact-3 mb-60">
                        <h3 class="heading">Leave a Comment</h3>
                        <div class="container">
                            <div class="row">
                                <form action="{{route('contact.store') }}" method="POST" enctype="multipart/form-data" id="userForm">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group name">
                                                <input type="text" id="name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : ''}}" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group email">
                                                <input type="email" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group subject">
                                                <input type="text" id="subject" name="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : ''}}" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group number">
                                                <input type="text" id="phone" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : ''}}" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group message">
                                                <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : ''}}" id="message" name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pb-3">
                                            <div class="send-btn">
                                                <button type="submit" id="button" class="btn btn-color btn-md btn-message">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Properties details page start -->

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
