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
            <h1>Contact Us</h1>
            <ul class="breadcrumbs">
                <li><a href="{{route('property.index')}}">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
            <p>We look forward to hearing from you.</p>
        </div>

        {{--<div class="col-lg-7 col-md-7 col-md-7">--}}
            {{--@if(session('success_message'))--}}
                {{--<div class="alert alert-success">--}}
                    {{--{{ session('success_message') }}--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}

        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
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
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" id="name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : ''}}" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''}}" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input id="subject" type="text" name="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : ''}}" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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


            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <h3>Contact Info</h3>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Office Address</h5>
                            <p>20/F Green Road, Dhanmondi, Dhaka</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone Number</h5>
                            <p>Office<a href="tel:+971555396242">: +971555396242</a> </p>
                            <p>Mobile<a href="tel:+971555396242">: +971555396242</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <i class="fa fa-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Email Address</h5>
                            <p><a href="#">info@themevessel.com</a></p>
                            <p><a href="#">http://themevessel.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="contactMap" class="contact-map"></div>
    </div>
</div>
<!-- Google map end -->


{{--Consent forms goes here--}}
@include('cookieConsent::index')
@endsection

@section('footer')
@include('settings.footer')
@endsection


@section('script')
@include('settings.js')
<script src="{{asset('/js/app.js')}}"></script>
<script>
    (function () {
        document.querySelector('#userForm').addEventListener('submit', function (e) {
            e.preventDefault();
            $("#button").attr("disabled", true);

            // var bla = $('#name').val();
            // if (bla <= 0) {
            //     console.log('me');
            //     return false
            // }
            axios.post('/contactForm', {
                'name':         document.querySelector('#name').value,
                'email':        document.querySelector('#email').value,
                'subject':      document.querySelector('#subject').value,
                'phone':        document.querySelector('#phone').value,
                'message':      document.querySelector('#message').value,
            })
                .then( (response) => {
                        //remove all error messages
                        const errorMessages = document.querySelectorAll('.text-danger');
                        errorMessages.forEach( (element) => element.textContent = '');

                        // remove all form controls with highlighted text boxes
                        const formControls = document.querySelectorAll('.form-control');
                        formControls.forEach( (element) => element.classList.remove('border', 'border-danger'));

                        // Reset the form and add the success Message at the buttom of the page
                        this.reset();
                        this.insertAdjacentHTML('afterend','<div id="success" class="alert alert-success">Form submitted successfully!</div>');
                    // document.getElementById('success').scrollIntoView();

                    // Enable the button after some seconds
                    $("#button").attr("disabled", false)
                })
                .catch( (error) => {
                    const errors            = error.response.data.errors;
                    const firstItem         = Object.keys(errors)[0];
                    const firstItemDom      = document.getElementById(firstItem);
                    const firstErrorMessage = errors[firstItem][0];

                    // Scroll to the error message
                    // firstItemDom.scrollIntoView({behavior: "smooth"});

                    //remove all error messages
                    const errorMessages = document.querySelectorAll('.text-danger');
                    errorMessages.forEach( (element) => element.textContent = '');

                    // Show the error message
                    firstItemDom.insertAdjacentHTML('afterend', `<div class="text-danger">${firstErrorMessage}</div>`);

                    // remove all form controls with highlighted text boxes
                    const formControls = document.querySelectorAll('.form-control');
                    formControls.forEach( (element) => element.classList.remove('border', 'border-danger'));


                    // Highlight the form control with red backgorund
                    firstItemDom.classList.add('border', 'border-danger');

                    //Enable the button
                    $("#button").attr("disabled", false);
                });
        })
    })();
</script>
@endsection
