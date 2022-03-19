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
                <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs" style="background-image:url({{asset('assets/website')}}/images/slider/hm-4-slider-1.jpg);">
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
                <div class="single-hero-slider single-animation-wrap slider-height-2 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs " style="background-image:url({{asset('assets/website')}}/images/slider/hm-4-slider-2.jpg);">
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
                        <h2>Popular Industories</h2>
                    </div>
                    <div class="btn-style-9">
                        <a href="shop.html">All Industories</a>
                    </div>
                </div>
                <div class="section-wrap-1">
                    <div class="product-categories-slider-1 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="{{asset('assets/website')}}/images/product/product-50.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">Fashion</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="{{asset('assets/website')}}/images/product/product-51.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">Electronic</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="{{asset('assets/website')}}/images/product/product-52.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">computer</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="{{asset('assets/website')}}/images/product/product-53.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">beauty</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="{{asset('assets/website')}}/images/product/product-54.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">sport</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="{{asset('assets/website')}}/images/product/product-55.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">baby</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="{{asset('assets/website')}}/images/product/product-52.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">computer</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       x
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
                                        <img src="{{asset('assets/website')}}/images/product/product-41.jpg" alt="">
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
                                        <img src="{{asset('assets/website')}}/images/product/product-42.jpg" alt="">
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
                                        <img src="{{asset('assets/website')}}/images/product/product-43.jpg" alt="">
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
                                        <img src="{{asset('assets/website')}}/images/product/product-44.jpg" alt="">
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
                                        <img src="{{asset('assets/website')}}/images/product/product-45.jpg" alt="">
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
                                        <img src="{{asset('assets/website')}}/images/product/product-42.jpg" alt="">
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
                                    <a href="product-details.html"><img src="{{asset('assets/website')}}/images/industry-banners/small/industry-1-products-theme.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-23 text-center">
                                    <!-- <div class="banner-content-23-top">
                                        <p>cyber<br>monday<br>sale</p>
                                        <h2><span>50%</span> OFF <br>HasTech TV</h2>
                                    </div> -->
                                    <div class="banner-btn-3">
                                        <a href="product-details.html">View Product Industry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="product-area product-area-padding ">
                                <div class="section-title-btn-wrap mb-25">
                                    <div class="section-title-8">
                                        <h2>Industory 1</h2>
                                    </div>
                                </div>

                                <div class="tab-content jump ">

                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ea mollitia consequatur nostrum porro eos iste molestias, eum perferendis velit, nisi nulla? Debitis quia optio recusandae atque porro sequi distinctio.</p>
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
                                    <a href="product-details.html"><img src="{{asset('assets/website')}}/images/industry-banners/small/food-and-beverage-banner-3.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-23 text-center">
                                    <!-- <div class="banner-content-23-top">
                                        <p>cyber<br>monday<br>sale</p>
                                        <h2><span>50%</span> OFF <br>HasTech TV</h2>
                                    </div> -->
                                    <div class="banner-btn-3">
                                        <a href="product-details.html">View Product Industry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="product-area product-area-padding ">
                                <div class="section-title-btn-wrap mb-25">
                                    <div class="section-title-8">
                                        <h2>Industory 1</h2>
                                    </div>
                                </div>

                                <div class="tab-content jump ">

                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ea mollitia consequatur nostrum porro eos iste molestias, eum perferendis velit, nisi nulla? Debitis quia optio recusandae atque porro sequi distinctio.</p>
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
                                    <a href="product-details.html"><img src="{{asset('assets/website')}}/images/industry-banners/small/cbd-boxes-banner-1.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-23 text-center">
                                    <!-- <div class="banner-content-23-top">
                                        <p>cyber<br>monday<br>sale</p>
                                        <h2><span>50%</span> OFF <br>HasTech TV</h2>
                                    </div> -->
                                    <div class="banner-btn-3">
                                        <a href="product-details.html">View Product Industry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="product-area product-area-padding ">
                                <div class="section-title-btn-wrap mb-25">
                                    <div class="section-title-8">
                                        <h2>Industory 1</h2>
                                    </div>
                                </div>

                                <div class="tab-content jump ">

                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ea mollitia consequatur nostrum porro eos iste molestias, eum perferendis velit, nisi nulla? Debitis quia optio recusandae atque porro sequi distinctio.</p>
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
                                    <a href="product-details.html"><img src="{{asset('assets/website')}}/images/industry-banners/small/riged-boxes-banner-5.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-23 text-center">
                                    <!-- <div class="banner-content-23-top">
                                        <p>cyber<br>monday<br>sale</p>
                                        <h2><span>50%</span> OFF <br>HasTech TV</h2>
                                    </div> -->
                                    <div class="banner-btn-3">
                                        <a href="product-details.html">View Product Industry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="product-area product-area-padding ">
                                <div class="section-title-btn-wrap mb-25">
                                    <div class="section-title-8">
                                        <h2>Industory 1</h2>
                                    </div>
                                </div>

                                <div class="tab-content jump ">

                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ea mollitia consequatur nostrum porro eos iste molestias, eum perferendis velit, nisi nulla? Debitis quia optio recusandae atque porro sequi distinctio.</p>
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
                                    <a href="product-details.html"><img src="{{asset('assets/website')}}/images/industry-banners/small/vape-cartridge-banner-4.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-23 text-center">

                                    <div class="banner-btn-3">
                                        <a href="product-details.html">View Product Industry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="product-area product-area-padding ">
                                <div class="section-title-btn-wrap mb-25">
                                    <div class="section-title-8">
                                        <h2>Industory 1</h2>
                                    </div>
                                </div>

                                <div class="tab-content jump ">

                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="">
                                                        <img src="{{ asset('storage') }}/images/products/0a9892b32d3a99e4b41b13cc201642a2.png"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">gfhgfh namw</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                                    <div class="pro-add-to-cart">
                                                        <button title="Get Qoute">Get Qoute</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ea mollitia consequatur nostrum porro eos iste molestias, eum perferendis velit, nisi nulla? Debitis quia optio recusandae atque porro sequi distinctio.</p>
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
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-wrap mb-30">
                                <div class="blog-img mb-20">
                                    <a href="blog-details.html"><img src="{{asset('assets/website')}}/images/blog/blog-6.jpg" alt="blog-img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#">News </a></li>
                                            <li>May 25, 2020</li>
                                        </ul>
                                    </div>
                                    <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg Show</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-wrap mb-30">
                                <div class="blog-img mb-20">
                                    <a href="blog-details.html"><img src="{{asset('assets/website')}}/images/blog/blog-7.jpg" alt="blog-img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#">Inspiration </a></li>
                                            <li>May 25, 2020</li>
                                        </ul>
                                    </div>
                                    <h3><a href="blog-details.html">Basic colord mixed - trendind 2020</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-wrap mb-30">
                                <div class="blog-img mb-20">
                                    <a href="blog-details.html"><img src="{{asset('assets/website')}}/images/blog/blog-8.jpg" alt="blog-img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#">Lookbook </a></li>
                                            <li>May 25, 2020</li>
                                        </ul>
                                    </div>
                                    <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="download-app-area pb-70">
            <div class="container">
                <div class="section-wrap-4">
                    <div class="bg-img" style="background-image:url({{asset('assets/website')}}/images/bg/bg-3.jpg);">
                        <div class="download-app-content">
                            <h2>Download Norda <br>App Now!</h2>
                            <p>Shopping faster with our app.</p>
                            <div class="app-img">
                                <a href="#"><img src="{{asset('assets/website')}}/images/icon-img/app-1.png" alt=""></a>
                                <a href="#"><img src="{{asset('assets/website')}}/images/icon-img/app-2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('custom-script')
@endsection
