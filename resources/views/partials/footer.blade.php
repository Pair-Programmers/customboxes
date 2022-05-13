<footer class="footer-area pt-20 mt-120" style="background-color: rgb(193, 199, 212)">
    <div class="footer-top border-bottom-4 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget mb-40">
                        {{-- <h3 class="footer-title">Custom Printed Boxes</h3> --}}
                        <img src="{{ asset('assets/website') }}/images/logo/logo.png"
                            style="width: 350px; height: 80px; margin-bottom: 15px;" alt="">
                        <br>
                        <P style="text-align:justify; font-size: 19px">We at CustomBoxesUs pride ourselves on providing the best custom packaging boxes and services
                            in the industry. There are no other manufacturers that can match our quality products, an
                            extensive selection of sizes, and personal attention to detail. We work hard to provide you
                            with a high-quality product at a great price! If you're looking for a reliable company that
                            is dedicated to bringing you the best custom packaging solutions available anywhere then
                            you've come to the right place!</p>

                    </div>
                    <div id="mc_embed_signup" class="subscribe-form-2">
                        <form method="post" action="{{ route('news-subsciber.store') }}" id="mc-embedded-subscribe-form"
                            class="validate subscribe-form-style-2" novalidate="" name="mc-embedded-subscribe-form">
                            @csrf
                            <div id="mc_embed_signup_scroll" class="mc-form-2 mc-form-2-bg-gray">
                                <input class="email" type="email" required
                                    placeholder="Enter your email address" name="email">

                                <div class="clear-2 clear-2-orange">
                                    <input id="mc-embedded-subscribe" class="button" type="submit"
                                        name="subscribe" value="Subscribe">
                                </div>
                            </div>
                            <div id="news-subscriber-message">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget ml-70 mb-40">
                        <h3 class="footer-title">INFORMATION</h3>
                        <div class="footer-info-list" style="">
                            <ul>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ route('term-conditions') }}">Term & Conditions</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('faqs') }}">FAQs</a></li>
                                <li><a href="{{ route('paper-weight') }}">Paper Weight Chart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">Contact Us</h3>
                        <div class="contact-info-2">
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <a href="tel:9256959888"><i class="icon-call-end"></i></a>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>Got a question? Call us 24/7</p>
                                    <a href="tel:9256959888">
                                        <h3 class="orange">(925) 695 9888 </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="single-contact-info-2">
                                <div class="contact-info-2-icon">
                                    <i class="icon-cursor icons"></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>Willow Pass Rd, Concord, CA 94520, United States.</p>
                                </div>
                            </div>
                            <div class="single-contact-info-2">

                                <div class="contact-info-2-icon">
                                    <a href="mailto:info@customboxesus.com"><i class="icon-envelope-open "></i></a>
                                </div>
                                <div class="contact-info-2-content">
                                    <a href="mailto:info@customboxesus.com">
                                        <p style="font-size: 19px" >info@customboxesus.com</p>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="social-style-1 social-style-1-font-inc social-style-1-mrg-2">
                            <a href="https://twitter.com/customboxesus1" target="_blank"><i
                                    class="icon-social-twitter"></i></a>
                            <a href="https://www.facebook.com/customboxesus1/" target="_blank"><i
                                    class="icon-social-facebook"></i></a>
                            <a href="https://www.instagram.com/customboxesus/" target="_blank"><i
                                    class="icon-social-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15 ">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 col-md-6">
                    <div class="payment-img payment-img-right">
                        <a href="#"><img src="{{ asset('assets/website') }}/images/icon-img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="copyright copyright-center">
                        <p style="color: black;  ">Copyright © CustomBoxesUs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
