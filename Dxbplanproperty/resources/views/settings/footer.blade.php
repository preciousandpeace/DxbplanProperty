<footer class="footer">
    <div class="container footer-inner">
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
    </div>
</footer>
