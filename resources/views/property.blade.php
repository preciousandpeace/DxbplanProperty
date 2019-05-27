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
        @if(json_decode($properties->images) && json_decode($propertyDetails->video))
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
                                        <img src="{{asset('app/public/'.$image)}}" class="img-fluid" alt="properties-photo">
                                    </div>
                                @endforeach
                                <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <!-- main slider carousel nav controls -->
                            <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                                @foreach (json_decode($properties->images) as $image)
                                    <li class="list-inline-item" style="width: 72px; height: 42px">
                                        <a id="carousel-selector-{{$count1++}}" data-slide-to="{{$count1sub++}}" data-target="#propertiesDetailsSlider">
                                            <img src="{{asset('app/public/'.$image)}}" class="img-fluid" alt="properties-photo-smale" style="width: 70px; height: 40px">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 slider">
                        <!-- Tabbing box start -->
                        <div class="tabbing tabbing-box mb-60">
                            <ul class="nav nav-tabs" id="carTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="4-tab" data-toggle="tab" href="#3" role="tab" aria-controls="3" aria-selected="true">Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true">Floor Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="6" aria-selected="true">Brochure</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="carTabContent">
                                <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <h3 class="heading">Property Description</h3>
                                    <p>{!! $properties->description !!}</p>
                                    <p></p>
                                </div>


                                <div class="tab-pane fade" id="3" role="tabpanel" aria-labelledby="3-tab">
                                    <div class="property-video text-center embed-responsive
                embed-responsive-21by9">

                                        <h3 class="heading">Property Video</h3>
                                        <video width="800" class="embed-responsive-item" controls>
                                            @foreach (json_decode($propertyDetails->video) as $pk)
                                                <source src="{{asset('app/public/'.$pk->download_link)}}" type="video/mp4">
                                            <source src="{{asset('app/public/'.$pk->download_link)}}" type="video/ogg">
                                            @endforeach
                                            Your browser does not support HTML5 video.
                                        </video>

                                    </div>
                                </div>

                                <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="propertiesDetailsSliderpk" class="carousel properties-details-sliders slide mb-60">

                                                <!-- main slider carousel items -->
                                                <div class="carousel-inner">

                                                    @foreach (json_decode($properties->floor_plan) as $floor_plan)
                                                        <div class="{{$countpk == 0 ? 'active' : ''}} item carousel-item" data-slide-number="{{$countpk++}}">
                                                            <img src="{{asset('app/public/'.$floor_plan)}}" class="img-fluid" alt="properties-photo">
                                                        </div>
                                                    @endforeach
                                                    <a class="carousel-control left" href="#propertiesDetailsSliderpk" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                                    <a class="carousel-control right" href="#propertiesDetailsSliderpk" data-slide="next"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                                <!-- main slider carousel nav controls -->
                                                <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                                                    @foreach (json_decode($properties->floor_plan) as $floor_plan)
                                                        <li class="list-inline-item" style="width: 72px; height: 42px">
                                                            <a id="carousel-selector-{{$count1pk++}}" data-slide-to="{{$count1subpk++}}" data-target="#propertiesDetailsSliderpk">
                                                                <img src="{{asset('app/public/'.$floor_plan)}}" class="img-fluid" alt="properties-photo-smale" style="width: 70px; height: 40px">
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
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
                                <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
                                    @foreach (json_decode($properties->brochure) as $pk1)
                                    <button><a href="{{asset('app/public/'.$pk1->download_link)}}" download="Brochure">Click to Download Brochure</a></button>
                                    @endforeach
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
                                            <i class="flaticon-swimmer"></i>
                                            Temperature controlled swimming pool
                                        </li>
                                        <li>
                                            <i class="flaticon-bed"></i>
                                            Clubhouse
                                        </li>
                                        <li>
                                            <i class="flaticon-balcony-and-door"></i>
                                            Cafe and restaurants
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <ul>

                                        <li>
                                            <i class="flaticon-parking"></i>
                                            Parking
                                        </li>

                                        <li>
                                            <i class="flaticon-padlock"></i>
                                            Security
                                        </li>
                                        <li>
                                            <i class="flaticon-theatre-masks"></i>
                                            Recreational centre
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <ul>
                                        <li>
                                            <i class="flaticon-weightlifting"></i>
                                            Well equipped health club and gymnasium
                                        </li>

                                        <li>
                                            <i class="flaticon-green-park-city-space"></i>
                                            Lush green park
                                        </li>
                                        <li>
                                            <i class="flaticon-idea"></i>
                                            Kids play area
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Contact 1 start -->
                        <div class="contact-3 mb-60">
                            <h3 class="heading">Leave a Comment</h3>
                            <div class="container">

                                {{--
                                <div class="col-lg-7 col-md-7 col-md-7">--}}
                                    {{--@if(session('success_message'))--}}
                                    {{--
                                    <div class="alert alert-success">--}}
                                        {{--{{ session('success_message') }}--}}
                                        {{--
                                    </div>
                                    --}}
                                    {{--@endif--}}
                                    {{--
                                </div>
                                --}}


                                <div class="row" id="pkstyle">

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <form method="POST" action="{{route('contact.store') }}" id="userForm" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group name">
                                                    <input type="text" id="name" name="name"
                                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : ''}}"
                                                           placeholder="Name" autofocus>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group email">
                                                    <input id="email" type="email" name="email"
                                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}"
                                                           placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group subject">
                                                    <input id="subject" type="text" name="subject"
                                                           class="form-control{{ $errors->has('subject') ? ' is-invalid' : ''}}"
                                                           placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group number">
                                                    <input type="tel" id="phone" name="phone"
                                                           class="form-control{{ $errors->has('phone') ? ' is-invalid' : ''}}"
                                                           placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group message">
                                    <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : ''}}"
                                              id="message" name="message" placeholder="Write message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pb-3">
                                                <div class="send-btn">
                                                    <button type="submit" id="formButton" class="btn btn-color btn-md btn-message">Send
                                                        Message
                                                    </button>
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
        @else
            <div class="container text-center">
                <h1>Coming soon please come back later</h1>
            </div>
        @endif
    </div>
    <!-- Properties details page start -->

    {{--Consent forms goes here--}}
    @include('cookieConsent::index')
@endsection

@section('footer')
@include('settings.footer')
@endsection



@section('script')
    @include('settings.js')
@endsection
