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
                                        <p><i class="fa fa-map-marker"></i> 20/F Green Road, Dhanmondi, Dhaka</p>
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
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="http://placehold.it/1110x587" class="img-fluid" alt="properties-photo">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="http://placehold.it/1110x587" class="img-fluid" alt="properties-photo">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="http://placehold.it/1110x587" class="img-fluid" alt="properties-photo">
                            </div>
                            <div class="item carousel-item" data-slide-number="4">
                                <img src="http://placehold.it/1110x587" class="img-fluid" alt="properties-photo">
                            </div>
                            <div class="item carousel-item" data-slide-number="5">
                                <img src="http://placehold.it/1110x587" class="img-fluid" alt="properties-photo">
                            </div>
                            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators smail-properties list-inline nav nav-justified ">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                    <img src="http://placehold.it/222x117" class="img-fluid" alt="properties-photo-smale">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                    <img src="http://placehold.it/222x117" class="img-fluid" alt="properties-photo-smale">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                    <img src="http://placehold.it/222x117" class="img-fluid" alt="properties-photo-smale">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                    <img src="http://placehold.it/222x117" class="img-fluid" alt="properties-photo-smale">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                    <img src="http://placehold.it/222x117" class="img-fluid" alt="properties-photo-smale">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 slider">
                    <!-- Search area start -->
                    <div class="widget-2 search-area d-lg-none d-xl-none">
                        <h5 class="sidebar-title">Advanced Search</h5>
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="GET">
                                    <div class="form-group">
                                        <label>Area From</label>
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
                                    <div class="form-group">
                                        <label>Property Status</label>
                                        <select class="selectpicker search-fields" name="Status">
                                            <option>Property Status</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <select class="selectpicker search-fields" name="Location">
                                            <option>Location</option>
                                            <option>United Kingdom</option>
                                            <option>American Samoa</option>
                                            <option>Belgium</option>
                                            <option>Canada</option>
                                            <option>Delaware</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Property Types</label>
                                        <select class="selectpicker search-fields" name="types">
                                            <option>Property Types</option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                            <option>Land</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Bedrooms</label>
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
                                    <div class="form-group">
                                        <label>Bathrooms</label>
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <div class="range-slider">
                                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <br/>
                                    <button class="search-button btn-md btn-color">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Tabbing box start -->
                    <div class="tabbing tabbing-box mb-60">
                        <ul class="nav nav-tabs" id="carTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Floor Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Location</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="6" aria-selected="true">Related Properties</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="carTabContent">
                            <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                <h3 class="heading">Property Description</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed ligula hendrerit condimentum.
                                    Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.</p>
                                <p>Vestibulum vel mauris et odio lobortis laoreet eget eu magna. Proin mauris erat, luctus at nulla ut, lobortis mattis magna. Morbi a arcu lacus. Maecenas tristique velit vitae nisi consectetur, in mattis diam sodales. Mauris sagittis sem mattis justo bibendum, a eleifend dolor facilisis. Mauris
                                    nec pharetra tortor, ac aliquam felis. Nunc pretium erat sed quam consectetur fringilla.</p>
                                <p>Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, sit amet aliquam turpis dignissim ac. In at
                                    tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, felis est pharetra ante, tincidunt feugiat libero enim sed risus.</p>
                                <p>Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. adipiscing elit.</p>
                            </div>
                            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                                <div class="floor-plans mb-60">
                                    <h3 class="heading">Floor Plans</h3>
                                    <table>
                                        <tbody><tr>
                                            <td><strong>Size</strong></td>
                                            <td><strong>Rooms</strong></td>
                                            <td><strong>Bathrooms</strong></td>
                                        </tr>
                                        <tr>
                                            <td>1600</td>
                                            <td>3</td>
                                            <td>2</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <img src="http://placehold.it/730x370" alt="floor-plans" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade " id="three" role="tabpanel" aria-labelledby="three-tab">
                                <div class="property-details">
                                    <h3 class="heading">Property Details</h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                                <li>
                                                    <strong>Property Id:</strong>215
                                                </li>
                                                <li>
                                                    <strong>Price:</strong>$1240/ Month
                                                </li>
                                                <li>
                                                    <strong>Property Type:</strong>House
                                                </li>
                                                <li>
                                                    <strong>Bathrooms:</strong>3
                                                </li>
                                                <li>
                                                    <strong>Bathrooms:</strong>2
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                                <li>
                                                    <strong>Property Lot Size:</strong>800 ft2
                                                </li>
                                                <li>
                                                    <strong>Land area</strong>230 ft2
                                                </li>
                                                <li>
                                                    <strong>Year Built</strong>2018
                                                </li>
                                                <li>
                                                    <strong>Available From</strong>2018
                                                </li>
                                                <li>
                                                    <strong>Garages:</strong>2
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                                <li>
                                                    <strong>Sold:</strong>Yes
                                                </li>
                                                <li>
                                                    <strong>City:</strong>Usa
                                                </li>
                                                <li>
                                                    <strong>Parking:</strong>Yes
                                                </li>
                                                <li>
                                                    <strong>Property Owner:</strong>Sohel Rana
                                                </li>
                                                <li>
                                                    <strong>Zip Code: </strong>2451
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
                                        <div id="contactMap" class="contact-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
                                <div class="related-properties">
                                    <h3 class="heading">Related Properties</h3>
                                    <div class="row">
                                        <div class="col-md-6">
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
                                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                        </a>
                                                    </div>
                                                    <ul class="facilities-list clearfix">
                                                        <li>
                                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> 3 Bedrooms
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
                                        <div class="col-md-6">
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
                                                        <img src="http://placehold.it/350x233" alt="property-7" class="img-fluid">
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
                                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                        </a>
                                                    </div>
                                                    <ul class="facilities-list clearfix">
                                                        <li>
                                                            <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> 3 Bedrooms
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Amenities box start -->
                    <div class="amenities-box mb-60">
                        <h3 class="heading">Condition</h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li><span><i class="flaticon-bed"></i> 3 Beds</span></li>
                                    <li><span><i class="flaticon-bath"></i> 2 Bathroom</span></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li><span><i class="flaticon-car-repair"></i> 1 Garage</span></li>
                                    <li><span><i class="flaticon-balcony-and-door"></i>1 Balcony</span></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <ul>
                                    <li><span><i class="flaticon-square-layouting-with-black-square-in-east-area"></i> 4800 sq ft</span></li>
                                    <li><span><i class="flaticon-monitor"></i> TV</span></li>
                                </ul>
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
                    <!-- Comments section start -->
                    <div class="comments-section">
                        <h3 class="heading">Comments Section</h3>
                        <ul class="comments">
                            <li>
                                <div class="comment">
                                    <div class="comment-author">
                                        <a href="#">
                                            <img src="http://placehold.it/60x60" class="rounded-circle" alt="avatar-13">
                                        </a>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <div class="comment-meta-author">
                                                Jane Doe
                                            </div>
                                            <div class="comment-meta-reply">
                                                <a href="#">Reply</a>
                                            </div>
                                            <div class="comment-meta-date">
                                                <span>8:42 PM 10/3/2018</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="comment-body">
                                            <div class="comment-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante sed.</p>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="comment">
                                            <div class="comment-author">
                                                <a href="#">
                                                    <img src="http://placehold.it/60x60" class="rounded-circle" alt="avatar-13">
                                                </a>
                                            </div>

                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <div class="comment-meta-author">
                                                        Jane Doe
                                                    </div>

                                                    <div class="comment-meta-reply">
                                                        <a href="#">Reply</a>
                                                    </div>

                                                    <div class="comment-meta-date">
                                                        <span>8:42 PM 10/3/2018</span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="comment-body">
                                                    <div class="comment-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment">
                                    <div class="comment-author">
                                        <a href="#">
                                            <img src="http://placehold.it/60x60" class="rounded-circle" alt="avatar-13">
                                        </a>
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <div class="comment-meta-author">
                                                Jane Doe
                                            </div>
                                            <div class="comment-meta-reply">
                                                <a href="#">Reply</a>
                                            </div>
                                            <div class="comment-meta-date">
                                                <span>8:42 PM 10/3/2018</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="comment-body">
                                            <div class="comment-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque.</p>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <!-- Contact 1 start -->
                    <div class="contact-3 mb-60">
                        <h3 class="heading">Leave a Comment</h3>
                        <div class="container">
                            <div class="row">
                                <form action="#" method="GET" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group name">
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group email">
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group subject">
                                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group number">
                                                <input type="text" name="phone" class="form-control" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group message">
                                                <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="send-btn">
                                                <button type="submit" class="btn btn-color btn-md btn-message">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar mbl">
                        <!-- Search area start -->
                        <div class="widget search-area d-none d-xl-block d-lg-block">
                            <h5 class="sidebar-title">Advanced Search</h5>
                            <div class="search-area-inner">
                                <div class="search-contents ">
                                    <form method="GET">
                                        <div class="form-group">
                                            <label>Area From</label>
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
                                        <div class="form-group">
                                            <label>Property Status</label>
                                            <select class="selectpicker search-fields" name="Status">
                                                <option>Property Status</option>
                                                <option>For Sale</option>
                                                <option>For Rent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <select class="selectpicker search-fields" name="Location">
                                                <option>Location</option>
                                                <option>United Kingdom</option>
                                                <option>American Samoa</option>
                                                <option>Belgium</option>
                                                <option>Canada</option>
                                                <option>Delaware</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Property Types</label>
                                            <select class="selectpicker search-fields" name="types">
                                                <option>Property Types</option>
                                                <option>Residential</option>
                                                <option>Commercial</option>
                                                <option>Land</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bedrooms</label>
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
                                        <div class="form-group">
                                            <label>Bathrooms</label>
                                            <select class="selectpicker search-fields" name="bedrooms">
                                                <option>Bathrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <div class="range-slider">
                                                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <br/>
                                        <button class="search-button btn-md btn-color">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Categories start -->
                        <div class="widget categories">
                            <h5 class="sidebar-title">Categories</h5>
                            <ul>
                                <li><a href="#">Apartments<span>(12)</span></a></li>
                                <li><a href="#">Houses<span>(8)</span></a></li>
                                <li><a href="#">Family Houses<span>(23)</span></a></li>
                                <li><a href="#">Offices<span>(5)</span></a></li>
                                <li><a href="#">Villas<span>(63)</span></a></li>
                                <li><a href="#">Other<span>(7)</span></a></li>
                            </ul>
                        </div>

                        <!-- Financing calculator  start -->
                        <div class="contact-1 financing-calculator widget">
                            <h5 class="sidebar-title">Mortgage Calculator</h5>
                            <form action="#" method="GET" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label">Property Price</label>
                                    <input type="text" class="form-control" placeholder="$36.400">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Interest Rate (%)</label>
                                    <input type="text" class="form-control" placeholder="10%">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Period In Months</label>
                                    <input type="text" class="form-control" placeholder="10 Months">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Down PaymenT</label>
                                    <input type="text" class="form-control" placeholder="$21,300">
                                </div>
                                <br>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-color btn-md btn-message btn-block">Cauculate</button>
                                </div>
                            </form>
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
    @include('settings.footer')
@endsection


@section('script')
    @include('settings.js')
@endsection