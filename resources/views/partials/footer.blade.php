<!--============== Footer Section Start ==============-->
<footer class="footer-light full-row p-0 footer-two">
    <div class="full-row">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget mb-4">
                        <h3 class="widget-title">Over 10000 Customers Already Connected</h3>
                        <p>Your trusted partner in finding the perfect property. We help you discover your dream home with our extensive listings and expert guidance.</p>
                    </div>
                    <div class="widget footer-widget social-widget">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row row-cols-1 row-cols-sm-3">
                        <div class="col">
                            <div class="widget footer-widget footer-nav mb-5">
                                <h4 class="widget-title mb-4">Quick Links</h4>
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('properties.index') }}">Properties</a></li>
                                    <li><a href="{{ route('agents.index') }}">Our Agents</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget footer-widget footer-nav mb-5">
                                <h4 class="widget-title mb-4">Property Types</h4>
                                <ul>
                                    @foreach(\App\Models\PropertyType::take(4)->get() as $type)
                                        <li><a href="{{ route('properties.index', ['type' => $type->id]) }}">{{ $type->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="widget footer-widget footer-nav mb-5">
                                <h4 class="widget-title mb-4">Contact Info</h4>
                                <ul>
                                    <li><a href="tel:+1234567890">+1 (234) 567-890</a></li>
                                    <li><a href="mailto:info@realestate.com">info@realestate.com</a></li>
                                    <li><a href="#">123 Real Estate St.<br>City, State 12345</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--============== Copyright Section Start ==============-->
    <div class="copyright font-primary color-dark border-top bg-transparent">
        <div class="container py-4">
            <div class="row row-cols-lg-2 row-cols-1">
                <div class="col">
                    <span class="d-table me-lg-auto ms-lg-0 mx-auto">Copyright © {{ date('Y') }} Real Estate. All rights reserved</span>
                </div>
                <div class="col">
                    <ul class="d-flex gap-2 justify-content-lg-end justify-content-center list-color-dark">
                        <li><a href="#">Privacy Policy</a></li>
                        <li>|</li>
                        <li><a href="#">Terms of Service</a></li>
                        <li>|</li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--============== Copyright Section End ==============-->
</footer>
<!--============== Footer Section End ==============-->