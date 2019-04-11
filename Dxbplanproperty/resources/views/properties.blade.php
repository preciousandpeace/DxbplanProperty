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
                <h1>Properties Grid</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('property.index')}}">Home</a></li>
                    <li class="active">Properties Grid</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->

    <!-- Properties list rightside start -->
    <div class="properties-list-rightside content-area-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="sidebar mrb">
                        <!-- Categories start -->
                        <div class="widget categories">
                            <h5 class="sidebar-title">Categories</h5>
                            <ul>
                                @foreach($layouts as $layout)
                                    <li><a href="#">{{$layout->name}}<span>{{\App\Property::where('layout_id' ,'=', $layout->id )->count()}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                        <div class="row clearfix">
                            <div class="col-xl-4.5 col-lg-5 col-md-5 col-sm-5">
                                <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-caret-right icon-design"></i>
                                    <i class="fa fa-th-large"></i>
                                </span>
                                    <span class="heading">Properties Grid</span>
                                </h4>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                                <div class="search-area">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>High to Low</option>
                                        <option>Low to High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subtitle">
                        <strong>{{\App\Property::count()}}</strong> Result Found
                    </div>
                    <div class="row">
                        @foreach($properties as $property)
                        <div class="col-lg-6 col-md-6 col-sm-12">
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
                                        <a href="google.com"><img src="{{asset('/assets/img/'.$property->image.'.jpg')}}" alt="property-7" class="img-fluid"></a>
                                    </a>
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-info"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">{{$property->name}}</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
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
                        @endforeach
                        <div class="col-lg-12 pt-5">
                            <div class="pagination-box text-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        {{$properties->links()}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Properties list rightside end -->
@endsection