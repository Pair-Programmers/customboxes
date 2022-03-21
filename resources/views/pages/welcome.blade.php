@extends('layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Product Create</title>
    <meta name="description" content="this is description">
@endsection

@section('custom-css')
@endsection

@section('content')
    <div class="slider-area">
        <div class="hero-slider-active-1 nav-style-1 dot-style-2 dot-style-2-position-2 dot-style-2-active-black">
            <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs"
                style="background-image:url({{ asset('assets/website') }}/images/slider/custom-printed-boxes-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                <h4 class="animated">Lookbook</h4>
                                <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                                <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/custom-cbd-boxes-2.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                <h4 class="animated">Lookbook</h4>
                                <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                                <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/custom-cosmetics-boxes-3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                <h4 class="animated">Lookbook</h4>
                                <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                                <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/custom-mailer-boxes-4.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                <h4 class="animated">Lookbook</h4>
                                <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                                <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/vape-cartridge-packaging-boxes-5.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                <h4 class="animated">Lookbook</h4>
                                <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                                <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/rigid-boxes-6.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                <h4 class="animated">Lookbook</h4>
                                <h1 class="animated">Denim Mixed <br>Layering Combine <br>collect</h1>
                                <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="product-details.html">Explore Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-categories-area pt-70 pb-70">
        <div class="container">
            <div class="section-title-btn-wrap mb-25">
                <div class="section-title-8">
                    <h2>Quality Terms</h2>
                </div>
                {{-- <div class="btn-style-9">
                    <a href="shop.html">All Industories</a>
                </div> --}}
            </div>
            <div class="section-wrap-1">
                <div class="product-categories-slider-1 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/free-shipping-1.png" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a href="#">Free Shipping</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/free-design-support-2.png"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a href="#">Free Design Support</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/competitive-pricing-3.png"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a href="#">Competitive Pricing</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/high-quality-boxes-4.png"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a href="#">High Quality Boxes</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/Quick-Turn-Arround-time-5.png"
                                        alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a href="#">Quick Turn Arround</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="product-area pb-70">
                    <div class="container">
                        <div class="section-wrap-1">
                            <div class="section-title-deal-wrap mb-30">
                                <div class="section-title-8">
                                    <h2>Recent orders</h2>
                                </div>
                                <div class="timer-wrap-2 timer-wrap-2-hm10">
                                    <h4><i class="icon-speedometer"></i> Inprocess</h4>
                                </div>
                            </div>
                            <div class="product-slider-active-8 dot-style-2 dot-style-2-position-static dot-style-2-mrg-3 nav-style-5 nav-style-5-modify">
                                <div class="product-plr-1">
                                    <div class="single-product-wrap">
                                        <div class="product-img product-img-zoom mb-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/website') }}/images/icons/product-41.jpg" alt="">
                                            </a>
                                            <span class="pro-badge left bg-red">-40%</span>
                                            <div class="product-action-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Advantage Baby Milk</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(4)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width70 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Advantage Baby Milk</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                </div>
                                                <span>(4)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width70 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                            <div class="pro-add-to-cart-2">
                                                <button title="Add to Cart">Get Qoute</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-plr-1">
                                    <div class="single-product-wrap">
                                        <div class="product-img product-img-zoom mb-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/website') }}/images/product/product-42.jpg" alt="">
                                            </a>
                                            <span class="pro-badge left bg-red">-20%</span>
                                            <div class="product-action-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Herchoe Backpack</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width50 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Herchoe Backpack</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width50 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                            <div class="pro-add-to-cart-2">
                                                <button title="Add to Cart">Get Qoute</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-plr-1">
                                    <div class="single-product-wrap">
                                        <div class="product-img product-img-zoom mb-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/website') }}/images/product/product-43.jpg" alt="">
                                            </a>
                                            <span class="pro-badge left bg-red">-15%</span>
                                            <div class="product-action-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(6)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width30 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(6)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width30 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                            <div class="pro-add-to-cart-2">
                                                <button title="Add to Cart">Get Qoute</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-plr-1">
                                    <div class="single-product-wrap">
                                        <div class="product-img product-img-zoom mb-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/website') }}/images/product/product-44.jpg" alt="">
                                            </a>
                                            <span class="pro-badge left bg-red">-10%</span>
                                            <div class="product-action-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">White Plastic Chair</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width90 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">White Plastic Chair</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(3)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width90 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                            <div class="pro-add-to-cart-2">
                                                <button title="Add to Cart">Get Qoute</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-plr-1">
                                    <div class="single-product-wrap">
                                        <div class="product-img product-img-zoom mb-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/website') }}/images/product/product-45.jpg" alt="">
                                            </a>
                                            <span class="pro-badge left bg-red">-35%</span>
                                            <div class="product-action-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Ciate London Makeup</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star "></i>
                                                </div>
                                                <span>(1)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width60 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Ciate London Makeup</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star "></i>
                                                </div>
                                                <span>(1)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width60 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                            <div class="pro-add-to-cart-2">
                                                <button title="Add to Cart">Get Qoute</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-plr-1">
                                    <div class="single-product-wrap">
                                        <div class="product-img product-img-zoom mb-20">
                                            <a href="product-details.html">
                                                <img src="{{ asset('assets/website') }}/images/product/product-42.jpg" alt="">
                                            </a>
                                            <span class="pro-badge left bg-red">-20%</span>
                                            <div class="product-action-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                <button title="Compare"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Herchoe Backpack</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width50 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                            <h3 class="mrg-none"><a class="orange" href="product-details.html">Herchoe Backpack</a></h3>
                                            <div class="product-rating-wrap-2">
                                                <div class="product-rating-4">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div>

                                            <div class="product-author">
                                                <span>Category: <a  class="orange" href="#">olabear.com</a></span>
                                            </div>
                                            <div class="product-sold">
                                                <div class="single-product-sold">
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-width50 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                        </div>
                                                    </div>
                                                    <span>Orders: 30 </span>
                                                </div>
                                            </div>
                                            <div class="pro-add-to-cart-2">
                                                <button title="Add to Cart">Get Qoute</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

    <div class="banner-product-wrap pb-70">
        <div class="container">
            <div class="section-wrap-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-wrap">
                            <div class="banner-img banner-img-zoom">
                                <a href="{{ route('industry.show', $industries[0]) }}"><img
                                        src="{{ asset('assets/website') }}/images/industry/small/cbd-boxes-banner-1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="banner-content-23 text-center">
                                <!-- <div class="banner-content-23-top">
                                                <p>cyber<br>monday<br>sale</p>
                                                <h2><span>50%</span> OFF <br>HasTech TV</h2>
                                            </div> -->
                                <div class="banner-btn-3">
                                    <a href="{{ route('industry.show', $industries[0]) }}">View Product Industry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="product-area product-area-padding ">
                            <div class="section-title-btn-wrap mb-25">
                                <div class="section-title-8">
                                    <h2>{{ $industries[0]->name }}</h2>
                                </div>
                            </div>

                            <div class="tab-content jump ">

                                <div class="row">
                                    @foreach ($industries[0]->products3 as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $product->summary }}</p>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-product-wrap pb-70">
        <div class="container">
            <div class="section-wrap-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-wrap">
                            <div class="banner-img banner-img-zoom">
                                <a href="{{ route('industry.show', $industries[1]) }}"><img
                                        src="{{ asset('assets/website') }}/images/industry/small/cosmetic-packaging-banner-2.jpg"
                                        alt=""></a>
                            </div>
                            <div class="banner-content-23 text-center">
                                <!-- <div class="banner-content-23-top">
                                                <p>cyber<br>monday<br>sale</p>
                                                <h2><span>50%</span> OFF <br>HasTech TV</h2>
                                            </div> -->
                                <div class="banner-btn-3">
                                    <a href="{{ route('industry.show', $industries[1]) }}">View Product Industry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="product-area product-area-padding ">
                            <div class="section-title-btn-wrap mb-25">
                                <div class="section-title-8">
                                    <h2>{{ $industries[1]->name }}</h2>
                                </div>
                            </div>

                            <div class="tab-content jump ">

                                <div class="row">
                                    @foreach ($industries[0]->products3 as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $product->summary }}</p>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-product-wrap pb-70">
        <div class="container">
            <div class="section-wrap-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-wrap">
                            <div class="banner-img banner-img-zoom">
                                <a href="{{ route('industry.show', $industries[3]) }}"><img
                                        src="{{ asset('assets/website') }}/images/industry/small/food-and-beverage-banner-3.jpg"
                                        alt=""></a>
                            </div>
                            <div class="banner-content-23 text-center">
                                <!-- <div class="banner-content-23-top">
                                                <p>cyber<br>monday<br>sale</p>
                                                <h2><span>50%</span> OFF <br>HasTech TV</h2>
                                            </div> -->
                                <div class="banner-btn-3">
                                    <a href="{{ route('industry.show', $industries[3]) }}">View Product Industry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="product-area product-area-padding ">
                            <div class="section-title-btn-wrap mb-25">
                                <div class="section-title-8">
                                    <h2>{{ $industries[3]->name }}</h2>
                                </div>
                            </div>

                            <div class="tab-content jump ">

                                <div class="row">
                                    @foreach ($industries[0]->products3 as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $product->summary }}</p>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-product-wrap pb-70">
        <div class="container">
            <div class="section-wrap-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-wrap">
                            <div class="banner-img banner-img-zoom">
                                <a href="{{ route('industry.show', $industries[4]) }}"><img
                                        src="{{ asset('assets/website') }}/images/industry/small/vape-cartridge-banner-4.jpg"
                                        alt=""></a>
                            </div>
                            <div class="banner-content-23 text-center">
                                <!-- <div class="banner-content-23-top">
                                                <p>cyber<br>monday<br>sale</p>
                                                <h2><span>50%</span> OFF <br>HasTech TV</h2>
                                            </div> -->
                                <div class="banner-btn-3">
                                    <a href="{{ route('industry.show', $industries[4]) }}">View Product Industry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="product-area product-area-padding ">
                            <div class="section-title-btn-wrap mb-25">
                                <div class="section-title-8">
                                    <h2>{{ $industries[4]->name }}</h2>
                                </div>
                            </div>

                            <div class="tab-content jump ">

                                <div class="row">
                                    @foreach ($industries[0]->products3 as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $product->summary }}</p>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-product-wrap pb-70">
        <div class="container">
            <div class="section-wrap-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-wrap">
                            <div class="banner-img banner-img-zoom">
                                <a href="{{ route('industry.show', $industries[6]) }}"><img
                                        src="{{ asset('assets/website') }}/images/industry/small/riged-boxes-banner-5.jpg"
                                        alt=""></a>
                            </div>
                            <div class="banner-content-23 text-center">

                                <div class="banner-btn-3">
                                    <a href="{{ route('industry.show', $industries[6]) }}">View Product Industry</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="product-area product-area-padding ">
                            <div class="section-title-btn-wrap mb-25">
                                <div class="section-title-8">
                                    <h2>{{ $industries[6]->name }}</h2>
                                </div>
                            </div>

                            <div class="tab-content jump ">

                                <div class="row">
                                    @foreach ($industries[0]->products3 as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $product->summary }}</p>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <div class="blog-area pb-70">
        <div class="container">
            <div class="section-title-btn-wrap mb-25">
                <div class="section-title-8">
                    <h2>latest from our blog</h2>
                </div>
                <div class="btn-style-9">
                    <a href="blog.html">all articles</a>
                </div>
            </div>
            <div class="section-wrap-2">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-wrap mb-30">
                                <div class="blog-img mb-20">
                                    <a href="blog-details.html"><img
                                            src="{{ asset('storage') }}/images/blogs/thumbnail/{{ $blog->thumbnail }}"
                                            alt="blog-img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#">{{ $blog->category->name }} </a></li>
                                            <li>{{ date('d-M-Y', strtotime($blog->created_at)) }}</li>
                                        </ul>
                                    </div>
                                    <h3><a href="{{ route('blog.show', $blog) }}">{{ $blog->summary }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <div class="download-app-area pb-70">
        <div class="container">
            <div class="section-wrap-4">
                <div class="bg-img"
                    style="background-image:url({{ asset('assets/website') }}/images/bg/bg-3.jpg);">
                    <div class="download-app-content">
                        <h2>Download Norda <br>App Now!</h2>
                        <p>Shopping faster with our app.</p>
                        <div class="app-img">
                            <a href="#"><img src="{{ asset('assets/website') }}/images/icon-img/app-1.png" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/website') }}/images/icon-img/app-2.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
@endsection
