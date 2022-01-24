<footer class="footer footer-dark">
    <div class="cta bg-image bg-dark pt-4 pb-5 mb-0" style="background-image: url({{asset('/')}}assets/images/demos/demo-10/bg-2.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-6">
                    <div class="cta-heading text-center">
                        <h3 class="cta-title text-white">Subscribe for Our Newsletter</h3><!-- End .cta-title -->
                        <p class="cta-desc text-white">and receive <span class="font-weight-normal">৳ 200 coupon</span> for first shopping</p><!-- End .cta-desc -->
                    </div><!-- End .text-center -->

                    <form action="#">
                        <div class="input-group input-group-round">
                            <input type="email" class="form-control form-control-white" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                            <div class="input-group-append">
                                <button class="btn btn-white" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                            </div><!-- .End .input-group-append -->
                        </div><!-- .End .input-group -->
                    </form>
                </div><!-- End .col-sm-10 col-md-8 col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cta -->
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <div class="widget widget-about">
                        <img src="{{asset('/images/ecom_logo/ecom-logo.png')}}" class="footer-logo" alt="Footer Logo" width="105" height="25"/>
                        <p>Sunday - Thursday: 09.00am to 07.00pm</p>
                        <p>Saturday: 10.00am to 08.00pm</p>
                        <p>Friday: Closed</p>

                        <figure class="footer-payments">
                            <img src="{{asset('/')}}assets/images/payments.png" alt="Payment methods" width="272" height="20"/>
                        </figure><!-- End .footer-payments -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-md-5 -->

                <div class="col-md-5">
                    <div class="widget">
                        <h4 class="widget-title">Contact us</h4><!-- End .widget-title -->

                        <div class="widget widget-about">
                            <p>Address: Bashundhara city park,</p>
                            <p>Bashundhara, Dhaka, Bangladesh.</p>
                            <p>Phone: +880-187-9272-291</p>
                            <p>Email: support@ecom.com</p>
                        </div><!-- End .widget about-widget -->

                        <div class="social-icons">
                            <a href="https://www.facebook.com/" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="https://twitter.com/" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="https://www.instagram.com/" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="https://www.youtube.com/" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            <a href="https://www.pinterest.com/" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .widget -->
                </div><!-- End .col-md-5 -->

                <div class="col-md-2">
                    <div class="widget">
                        <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="{{route('story')}}">Our story</a></li>
                            <li><a href="{{route('team')}}">Our team</a></li>
                            <li><a href="{{route('gallery')}}">Our gallery</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-md-2 -->

            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © 2022 ecom store. All Rights Reserved.</p><!-- End .footer-copyright -->
            <figure class="footer-payments">
                <p>Made by <a href="https://github.com/Shaikot007">Shaikot</a></p>
            </figure><!-- End .footer-payments -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
