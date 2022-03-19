<div class="subscribe-area bg-white pt-95 pb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="section-title-3">
                    <h2>Our Newsletter</h2>
                    <p>Get updates by subscribe our weekly newsletter</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div id="mc_embed_signup" class="subscribe-form-2">
                    <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style-2" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                        <div id="mc_embed_signup_scroll" class="mc-form-2 mc-form-2-bg-gray">
                            <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                            <div class="mc-news-2" aria-hidden="true">
                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                            </div>
                            <div class="clear-2 clear-2-orange">
                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-area bg-white">
    <div class="footer-top border-bottom-4 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget mb-40">
                        <h3 class="footer-title">Industries</h3>
                        <div class="footer-info-list info-list-50-parcent">
                            <ul>
                                @foreach(App\Models\Industry::all() as $industry)
                                    <li><a href="shop.html">{{$industry->name}}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget ml-70 mb-40">
                        <h3 class="footer-title">useful links</h3>
                        <div class="footer-info-list">
                            <ul>
                                <li><a href="my-account.html">My Account</a></li>
                                <!-- <li><a href="wishlist.html">My Wishlish</a></li> -->
                                <li><a href="#">Term & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Track Order</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Returns/Exchange</a></li>
                                <li><a href="#">FAQs</a></li>
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
                                    <i class="icon-call-end"></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>Got a question? Call us 24/7</p>
                                    <h3 class="orange">(925) 695 9888 </h3>
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
                                    <i class="icon-envelope-open "></i>
                                </div>
                                <div class="contact-info-2-content">
                                    <p>info@customboxesus.com</p>
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
</footer>
