@extends('layouts.master')

@section('title-meta')
    <title>Custom Printed Packaging Boxes With Logo | {{ config('app.name') }} </title>
    <meta name="description" content="Get your custom Printed Packaging boxes with logo from us and attract as many customers you want by having cardboard boxes wholesale for your business!">
    <link rel="canonical" href="{{ config('app.url')}}" />
@endsection

@section('custom-css')
@endsection

@section('content')
    <div id="section1" class="slider-area">
        <div class="hero-slider-active-1 nav-style-4 dot-style-1 dot-style-1-position-1 dot-style-2-active-black">
            <div class="single-hero-slider single-animation-wrap slider-height-3 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs"
                style=" background-image:url({{ asset('assets/website') }}/images/slider/custom-printed-boxes-1.webp);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                {{-- <h4 class="animated">Lookbook</h4> --}}
                                <h1 class="animated ">THE <br> CUSTOM PRINTED<br>PACKAGING BOXES</h1>
                                {{-- <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p> --}}
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1 mt-25" href="{{route('product.index')}}">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-3 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/custom-cbd-boxes-2.webp);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                {{-- <h4 class="animated">Lookbook</h4> --}}
                                <h1 class="animated">CUSTOM CBD BOXES</h1>
                                <p class="animated">We Prepare High-Quality Custom Boxes With The Latest Tools And Techniques.</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1 mt-25" href="{{route('product.index')}}">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-3 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/custom-cosmetics-boxes-3.webp);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                {{-- <h4 class="animated">Lookbook</h4> --}}
                                <h1 class="animated">COSMETIC <br> PACKAGING BOXES</h1>
                                {{-- <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p> --}}
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1 mt-25" href="{{route('product.index')}}">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-3 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/custom-mailer-boxes-4.webp);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                {{-- <h4 class="animated">Lookbook</h4> --}}
                                <h1 class="animated">MAILER CARDBORD <br> PACKAGING BOXES</h1>
                                {{-- <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p> --}}
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1 mt-25" href="{{route('product.index')}}">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-3 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/vape-cartridge-packaging-boxes-5.webp);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                {{-- <h4 class="animated">Lookbook</h4> --}}
                                <h1 class="animated">VAPE CARTRIDGE<br>PRINTING PACKAGING<br>BOXES</h1>
                                {{-- <p class="animated">We love seeing how our Raifa wearers like to wear their Norda</p> --}}
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1 mt-25" href="{{route('product.index')}}">Get A Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slider single-animation-wrap slider-height-3 custom-d-flex custom-align-item-center bg-img hm2-slider-bg res-white-overly-xs "
                style="background-image:url({{ asset('assets/website') }}/images/slider/rigid-boxes-6.webp);">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider-content-4 slider-animated-1">
                                {{-- <h4 class="animated">Lookbook</h4> --}}
                                <h1 class="animated">LUXURY RIGID BOXES</h1>
                                <p class="animated">WE CustomBoxesus strive to give you the best packaging solutions.</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1 mt-25" href="{{route('product.index')}}">Get A Quote</a>
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
                {{-- <div class="section-title-8">
                    <h2>Quality Terms</h2>
                </div> --}}
                {{-- <div class="btn-style-9">
                    <a href="shop.html">All Industories</a>
                </div> --}}
            </div>
            <div class="section-wrap-1">
                <div class="product-categories-slider-1 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a style="pointer-events: none; cursor: default;" href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/free-shipping-1.png"
                                        alt="free-shipping-1.png">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a style="pointer-events: none; cursor: default;" href="#">Free Shipping</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a style="pointer-events: none; cursor: default;" href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/free-design-support-2.png"
                                        alt="free-design-support-2.png">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a style="pointer-events: none; cursor: default;" href="#">Free Design Support</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a style="pointer-events: none; cursor: default;" href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/competitive-pricing-3.png"
                                        alt="competitive-pricing-3.png">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a style="pointer-events: none; cursor: default;" href="#">Competitive Pricing</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a style="pointer-events: none; cursor: default;" href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/high-quality-boxes-4.png"
                                        alt="high-quality-boxes-4.png">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a style="pointer-events: none; cursor: default;" href="#">High Quality Boxes</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border-transparent mb-15">
                                <a style="pointer-events: none; cursor: default;" href="#">
                                    <img src="{{ asset('assets/website') }}/images/icons/Quick-Turn-Arround-time-5.png"
                                        alt="Quick-Turn-Arround-time-5.png">
                                </a>
                            </div>
                            <div class="product-content-categories-2 product-content-orange text-center">
                                <h5 class="font-width-dec"><a style="pointer-events: none; cursor: default;" href="#">Quick Turn Arround</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ml-50 mr-50" style="align-content: center">
                <p>Customboxesus provides your custom packaging boxes with a logo, the way you desire. We believe in quality
                    and deliver what we promise to our customers. Feel free to contact us any time of the day and get your
                    work done within the minimum time frame. Contact us!</p>
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
                                <a href="{{ route('industry.show', $industries[0]) }}"><img
                                        src="{{ asset('assets/website') }}/images/industry/small/cbd-boxes-banner-1.webp"
                                        alt="CBD Boxes Banner"></a>
                            </div>
                            <div class="banner-content-23 text-center">
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
                                                    <a href="{{ route('product.show', [$industries[0], $product]) }}">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="{{ $product->image_alt_1 }}">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3>{{ $product->name }}
                                                    </h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">



                                                    <div class="pro-add-to-cart">
                                                        <a
                                                            href="{{ route('product.show', [$industries[0], $product]) }}">
                                                            <button title="Get Qoute">Get Qoute</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $industries[0]->summary }}</p>
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
                                        src="{{ asset('assets/website') }}/images/industry/small/cosmetic-packaging-banner-2.webp"
                                        alt="Cosmetic Packaging Banner"></a>
                            </div>
                            <div class="banner-content-23 text-center">
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
                                    @foreach ($industries[1]->products3 as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{ route('product.show', [$industries[1], $product]) }}">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="{{ $product->image_alt_1 }}">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3>{{ $product->name }}
                                                    </h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">



                                                    <div class="pro-add-to-cart">
                                                        <a
                                                            href="{{ route('product.show', [$industries[1], $product]) }}">
                                                            <button title="Get Qoute">Get Qoute</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $industries[1]->summary }}</p>
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
                                        src="{{ asset('assets/website') }}/images/industry/small/food-and-beverage-banner-3.webp"
                                        alt="Food And Beverage Banner"></a>
                            </div>
                            <div class="banner-content-23 text-center">
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
                                    @foreach ($industries[3]->products3 as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{ route('product.show', [$industries[3], $product]) }}">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="{{ $product->image_alt_1 }}">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3>{{ $product->name }}
                                                    </h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">



                                                    <div class="pro-add-to-cart">
                                                        <a
                                                            href="{{ route('product.show', [$industries[3], $product]) }}">
                                                            <button title="Get Qoute">Get Qoute</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $industries[3]->summary }}</p>
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
                                        src="{{ asset('assets/website') }}/images/industry/small/vape-cartridge-banner-4.webp"
                                        alt="Vape Cartridge Banner"></a>
                            </div>
                            <div class="banner-content-23 text-center">
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
                                    @foreach ($industries[4]->products3 as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{ route('product.show', [$industries[4], $product]) }}">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="{{ $product->image_alt_1 }}">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3>{{ $product->name }}
                                                    </h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    <div class="pro-add-to-cart">
                                                        <a
                                                            href="{{ route('product.show', [$industries[4], $product]) }}">
                                                            <button title="Get Qoute">Get Qoute</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $industries[4]->summary }}</p>
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
                                        src="{{ asset('assets/website') }}/images/industry/small/riged-boxes-banner-5.webp"
                                        alt="Riged Boxes Banner"></a>
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
                                    @foreach ($industries[6]->products3 as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 ">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{ route('product.show', [$industries[6], $product]) }}">
                                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}"
                                                            alt="{{ $product->image_alt_1 }} Image">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3>{{ $product->name }}</h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">



                                                    <div class="pro-add-to-cart">

                                                        <a
                                                            href="{{ route('product.show', [$industries[6], $product]) }}">
                                                            <button title="Get Qoute">Get Qoute</button>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <p style="text-align:center;">{{ $industries[6]->summary }}</p>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="blog-area pb-70">
        <div class="container">
            <div class="section-title-btn-wrap mb-25">
                <div class="section-title-8">
                    <h2>latest from our blog</h2>
                </div>
                <div class="btn-style-9">
                    <a href="{{ route('blog.index') }}">all articles</a>
                </div>
            </div>
            <div class="section-wrap-2">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-wrap mb-30">
                                <div class="blog-img mb-20">
                                    <a href="{{ route('blog.show', $blog) }}">
                                        <img src="{{ asset('storage') }}/images/blogs/thumbnail/{{ $blog->thumbnail }}"
                                            alt="{{ $blog->title }} blog-img"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="{{ route('blog.index', $blog->category) }}">{{ $blog->category->name }}
                                                </a></li>
                                            <li>{{ date('d-M-Y', strtotime($blog->created_at)) }}</li>
                                        </ul>
                                    </div>
                                    <h3><a href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div> --}}
    <div class="container home-content home-content-psize">
        <h3>Custom Boxes & Packaging Solutions:</h3>
        <p>When it comes to convenient, personalized shopping experiences that provide endless possibilities, there's no better way than with a custom printed box. <a href="{{ route('industry.custom-printed-boxes.show') }}">Custom printed boxes</a> can fit any product requirement, from make-up gift sets to birthday presents. Choose from our wide selection of designs, or ask one of our expert design teams to help you create a playful gift box or fun-filled birthday package.</p>
        <p>It is hard to think of something unique for a special gift that customers will keep forever, but colorful and custom-made boxes are perfect. Custom boxes also make a great addition to any promotional program you have or giveaway. Brands are making use of this marketing tool by giving out gifts that are unique by name or design in creative custom printed boxes.</p>
        <p>At CustomBoxesUs, you can get your packaging in an attractive manner. Our experts know how to design attractive packaging that attracts the attention of customers. We know how to make attractive custom boxes in the best way possible. We have a range of variety while we are designing boxes with different shapes, sizes and features.</p>

        <h3>Get creative packaging solutions as per your needs:</h3>
        <p>With us, you will be able to find a wide range of custom printed boxes that are useful in different ways. Our creative packaging makes it possible for you to incorporate your personal touch when shopping for items.</p>
        <p>Our experts are committed to providing customers with the best quality products and services. We take pride in helping our customers find the best packaging solution to fit their needs.</p>
        <p>Our goal at CustomBoxesUs is to come up with new and unique ways to present your product so that it makes a statement among the competition. One of our ways of doing this is by designing attractive custom-printed boxes that suit your brand name or logo.</p>
        <p>When you choose custom printed boxes, you can show off your brand identity to the world. We have a range of interesting gift boxes that are tailor-made just for fun, and they are perfect as favors or giveaways at events.</p>

        <h3>Our expert staff is ready to help you with all your packaging needs:</h3>
        <p>We know how important it is for your products to arrive at customers' homes in a secure way. That's why we make
            sure that all the packaging materials we use are carefully selected and meet security standards set by the most
            reputable firms worldwide. We will ensure that your products arrive at the customer's home safely. But we will
            also make sure that all shipping materials are completely safe for transit.</p>


        <h3>Here's a glimpse of what we deal in:</h3>
        <p>We deal in manufacturing all kinds of boxes, from apparel to food boxes, you can have it all with us! Here's what
            we use to manufacture our boxes.</p>

        <h3>Cardboard boxes:</h3>
        <p>We use premium quality cardboard boxes for all our products. These boxes come in different shapes and sizes. Each
            of these boxes is tailor-made from quality material and suits best for the product inside. These cardboard boxes
            help protect your product, making it possible for you to ship your products quickly and safely.</p>

        <h3>Corrugated boxes:</h3>
        <p>We use corrugated boxes to protect your products while they are in transit. These boxes are tailor-made from
            high-quality material and suits best to protect your product. The corrugated boxes are available in a range of
            colors to suit the product you are marketing.</p>
        <p>Furthermore, we provide custom printed casings, trays, and containers in different colors and styles.</p>
        <p>All our boxes make great gifts for any occasion. We have a range of gift boxes that you can incorporate into your
            custom printed product to give it distinction and uniqueness. With us, you can get only the best when it comes
            to looking for custom boxes for your products. Our products make excellent gifts for customers as well as
            promotional items for businesses.</p>

        <h3>Kraft Boxes:</h3>
        <p>These are the most common and popular types of boxes we use. Widely used in a variety of products, they can be
            applicable in a wide range of applications. We have different types of kraft boxes for all of our clients. </p>
        <p>They come in various sizes and shapes to suit all kinds of products, and they can be custom-designed with your
            logo or picture. The box can also be custom-made with your logo or brand name so that it becomes more
            attractive. </p>
        <p>Our customers love them because they make great gifts for any occasion. They can also be used as displays in the
            store, making them highly visible while they are out on display, giving customers a good impression about the
            products they buy. </p>

        <h3> <a href="{{ route('industry.show', $industries[6]) }}"> Luxury Rigid Boxes:</a></h3>
        <p>These boxes are highly durable, and they have prominent styles. We make sure to use only the best quality
            materials when we are manufacturing our rigid boxes. Each of these boxes is tailor-made using high-quality
            material so that it can efficiently protect your product from damage. </p>
        <p>Because of their durability, rigid boxes can be applicable for long periods of time without losing their shape or
            appearance. They can be applicable for all kinds of products, especially when it comes to items such as
            electronics or computer hardware. </p>

        <h3>We deal in all kinds of custom boxes: </h3>
        <p>We have a variety of custom boxes for all kinds of products. Custom-printed boxes are perfect for all types of
            purposes, and they can be custom-made to match your brand or logo. </p>
        <p>These boxes are especially useful for products that need to present themselves in an attractive manner. We make
            sure that the packaging we use will give your product the attention it deserves while still protecting it from
            damage during shipment. </p>
        <p>We have a wide range of kraft boxes, cardboard boxes, and corrugated boxes to suit your needs. And we also deal
            in rigid boxes, which are strong and long-lasting. No matter what type of packaging you need for CBD products or
            cosmetic products, our experts can help! Following is a glimpse of what we provide in custom boxes.</p>

        <h3> <a href="{{ route('industry.show', $industries[2]) }}"> Gift boxes:</a></h3>
        <p>Apart from providing packaging for various products, we also offer <a
                href="{{ route('industry.show', $industries[2]) }}"> custom printed gift boxes </a> to serve as a gift or
            a giveaway. These boxes make sure that the product stands out in an attractive manner. You can also use them as
            an inexpensive giveaway at events and other promotional activities.</p>
        <p>Boxes are available in various sizes to suit the product's size and shape. We ensure that the box is highly
            functional while it protects your product from damage during transit. </p>
        <p>The boxes are available in various colors, with your choice of text, logo, or picture so that you can easily
            create an attractive presentation for your product. They also make great gifts for customers on special
            occasions and for businesses who want to market themselves effectively. </p>

        <h3>Custom Boxes With Logo:</h3>
        <p>We also offer custom boxes with logo or pictures. These boxes are specially custom-designed to make the product
            stand out from others in the market. The logos, pictures, and text on these boxes create a distinct identity for
            your product. Your product can present itself in an attractive manner inside the custom box. </p>
        <p>Boxes with pictures have a better chance of creating an impression about the product inside – especially if you
            are marketing a niche CBD or cosmetic product, you can use picture boxes to give people an idea about what they
            will be getting with your products. </p>
        <p>The application of logo in custom boxes improves brand awareness for your business as well as educates potential
            customers about your industry or business path.</p>

        <h3><a href="{{ route('industry.show', $industries[0]) }}">Custom CBD Boxes:</a></h3>
        <p>We also make custom boxes for CBD products. These boxes have a range of features to suit the specific needs of
            your product. The boxes that we make come in various shapes and sizes. We have created different sizes and types
            of boxes to fit the size and shape of CBD products.</p>
        <p>We have customized cardboard printing cases to give your product the best possible protection inside the box. Our
            custom-printed <a href="{{ route('industry.show', $industries[0]) }}"> CBD Packaging Boxes </a> is available
            at competitive prices, and you don't need to worry about its quality because we use only premium materials for
            each box of our custom print CBD packaging.</p>

        <h3>Custom Food Boxes:</h3>
        <p>Our <a href="{{ route('industry.show', $industries[3]) }}"> food and beverage boxes</a> are specially
            custom-designed for food items. But they can also be useful for other products that require a plain or elegant
            presentation. These boxes are useful when you are marketing your food items both online and offline. We have a
            range of custom-designed boxes that can be custom-made to suit your needs. </p>
        <p>These boxes come with laser printing or run printing for the box and logo or picture for your product. The box is
            also available in various shapes and sizes that will fit the product's shape and size. We make sure that each
            box will protect the product from damage during shipment, so you don't need to worry about it.</p>

        <h3><a href="{{ route('industry.show', $industries[7]) }}">Custom Apparel Boxes:</a></h3>
        <p>These boxes are useful for all kinds of products that need to present themselves in a beautiful manner. We can
            also design custom logo shirts to go with your t-shirts, hoodies, and other garments.</p>
        <p> <a href="{{ route('industry.show', $industries[7]) }}"> Custom Apparel boxes </a> boxes come in various sizes
            and designs, so you can choose the style and size that will fit your needs while protecting your product from
            damage. We have a wide range of apparel boxes available for sale to suit your needs.</p>
        <p>We have boxes for every event, so why wait? Get in touch with us and customize your boxes with us!</p>

        <h3>Sports Packaging Boxes</h3>
        <p> <a href="{{ route('industry.show', $industries[8]) }}"> Sports packaging Boxes </a> is gaining increasing
            hype and popularity for a number of reasons. It is a safe option for protecting sports equipment as it is made
            entirely of durable and hard materials. Selected manufacturing materials are also durable in nature and minimize
            environmental degradation. It can be further expanded by introducing a handful of printing applications.</p>
        <p>Printing features can help you to use it as an excellent marketing tool. The best feature is that it can be
            customized to enhance the outlook with beautiful looking designs and displays. Anyone can choose the color
            combination and finishing options of their choice to attract the attention of the buyers. Plus, it's affordable
            in nature, and people can take advantage of the wholesale shopping option.</p>

        <h2>Why CustomBoxesUs?</h2>
        <p>Digital technology is becoming increasingly prevalent in modern times. Retailers and manufacturers are required
            to have adequate product packaging. Don't do business anonymously! It is the ideal decision that brands must
            have in their buckets these days when it comes to packaging, presenting, and transporting retail items in custom
            boxes with logos.</p>

        <h3>Our Competitive Edge:</h3>
        <p>We are a dynamic team of professionals who work together to exceed customers' expectations. And we make sure that
            each customer is well-treated in a professional manner and that their products are fully safe during shipping.
            We also provide excellent packaging for CBD products and other cosmetics and pharmaceutical products. </p>
        <p>Our custom boxes come with the best quality material and are available at competitive prices. You can also seek
            us for advice on what material is best suited for your product so it can stay protected during shipping. We have
            an experienced team who can give you expert advice on how to protect your product while making it easy to
            transport. Some of our exceptional services are. </p>

        <h3>Quick Turnaround Time:</h3>
        <p>We make sure that every product we package is delivered on time. Each product is custom-designed and shipped
            within eight to ten days.</p>
        <p>We will work for your benefit, not against you by giving you the best possible packaging solutions for your
            products. And We are capable of delivering other packages as well.</p>
        <p>We understand how important it is for customers to get their products on time, especially if they are buying
            online. What can be more frustrating than getting your product late, especially if the product itself was being
            transit last minute? To avoid this from happening, we have an efficient shipping process that will make sure
            that our customers get their products in time without any delays or issues.</p>

        <h3>No minimum order quantity:</h3>
        <p>We don't have any minimum order quantity, so you can get a customized box for anything from one to thousands of
            products. Our custom-made boxes are available in various quantities and at competitive prices.</p>
        <p>We also make sure that we give our customers the best possible options for their packaging needs, be it boxes for
            CBD products or children's toys. We also offer special discounted packages for bulk orders if you want to save
            money while ordering customized boxes at our company.</p>
        <h3>Custom designs:</h3>
        <p>We make sure that every box of your custom print packaging has the best possible graphic design that will suit
            your product's needs. We work with our customers to come up with the best possible designs for their products.
            The graphics are tailor-made according to your brand identity and are imprinted on the exterior of the boxes
            using the best technology in the industry. </p>
        <p>Our custom packaging also helps you stand out from your competitors as it is designed especially for your product
            and its brand identity. You can get a new box every time you order from us, depending on how frequently you need
            new boxes for your products and how fast you need them to be shipped.</p>


    </div>
    <br>
    <br>
    <div class="container home-content home-content-psize" >
            <h2>FAQ's</h2>
            <h3 style="background-color: rgb(193, 199, 212)">Q: What do we provide?</h3>
            <p>We can print custom packaging for most products in the market. We can even design boxes for toys, books, and
                other products that need a box to be shipped.</p>
            <h3 style="background-color: rgb(193, 199, 212)">Q: What is the meaning of "custom-made"? </h3>
            <p>Custom-made means having your product boxed and printed according to your specific requirements, from design to
                packing material. There are many companies out there who will say they will customize your product for you but
                what they actually do is box it without adding any creative input at all. We do not just box your product for
                you; we put our creativity and expertise into making sure that both the design and the material used are
                customized to suit the exact needs of your product.</p>
            <h3 style="background-color: rgb(193, 199, 212)">Q: Is my packaging tailor-made with eco-friendly materials?</h3>
            <p>Yes, we are eco-friendly when it comes to providing custom packaging solutions for our customers. We use only the
                best quality material that is tailor-made from recyclable substances. We are also conscious about the
                environment when handling your product as we take care not to cause any damage or waste during the packaging
                process.</p>
            <h3 style="background-color: rgb(193, 199, 212)">Q: What if I do not like my first design?</h3>
            <p>We make sure that each box is a work of art and that it suits your product's needs. If you feel like your first
                design is not what you wanted, then you can always ask our designers to make revisions so that you get exactly
                what you want in terms of both packaging and design.</p>
            <h3 style="background-color: rgb(193, 199, 212)">Q: Does it matter what size my product is?</h3>
            <p>It does not matter what size your product is, as we can make any box to suit your product. We do have our own
                sizing guides so you can get an idea of what the different boxes will be suitable for and how long the process
                will take.</p>
            <h3 style="background-color: rgb(193, 199, 212)">Q: What if I need a box for CBD products?</h3>
            <p>We can also design custom packaging for CBD products. You may also want to use a different type of packaging if
                your CBD products are in liquid form or if you want to protect them from light or oxygen exposure. We are also
                available whatever choice you want, as long as it is according to our pricing list for custom-made boxes.</p>

    </div>
    <div class="download-app-area pb-70">
        <div class="container">
            <div class="section-wrap-4">
                <div class="bg-img"
                    style="background-image:url({{ asset('assets/website') }}/images/app-banner.jpg);">
                    <div class="download-app-content" style="color: white">
                        <h1 style="color: white">We Believe in <br>Quality packaging</h1>
                        <p style="color: white">Order Now !</p>
                        {{-- <div class="app-img">
                            <a href="#"><img src="{{ asset('assets/website') }}/images/icon-img/app-1.png" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/website') }}/images/icon-img/app-2.png" alt=""></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
@endsection
