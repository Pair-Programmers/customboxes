<header class="header-area">
    <div class="header-large-device">
        <div class="header-top header-top-ptb-3 bg-black">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="header-quick-contect">
                            <ul>
                                <li   > <a href="tel:9256959888" style="color: white !important"><i class="icon-phone "></i> (925) 695 9888</a></li>
                                <li><a href="mailto:info@customboxesus.com" style="color: white !important"><i class="icon-envelope-open "></i>  info@customboxesus.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="header-offer-wrap-3 text-center">
                            <p>Free Shipping in all over United States.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="header-top-right">
                            <div class="social-hm4-wrap">
                                <!-- <span>Follow us</span> -->
                                <div class="social-style-1 social-style-1-white">
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
        </div>
        <div class="header-middle header-middle-padding-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="{{route('welcome')}}"><img src="{{asset('assets/website')}}/images/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="categori-search-wrap categori-search-wrap-modify-3">

                            <div class="search-wrap-3">
                                <form action="{{route('product.search')}}" method="POST">
                                    @csrf
                                    <input name="keyword" value="{{old('keyword')}}" required placeholder="Search Products..." type="text">
                                    <button type="submit" class="blue"><i class="lnr lnr-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="hotline-2-wrap">
                            <div class="hotline-2-icon">
                                <a href="tel:9256959888">
                                <i class="blue icon-call-end"></i>
                            </a>
                            </div>
                            <div class="hotline-2-content">
                                <a href="tel:9256959888">
                                <span> Hotline 24/7</span>
                                <h5>(925) 695 9888</h5>
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2">
                        <div class="btn-style-1">
                            <a class="animated btn-1-padding-4  btn-1-font-14" href="{{route('product.index')}}">Custom
                                Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom bg-blue">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-1">
                        <div
                            class="main-menu main-menu-white main-menu-padding-1 main-menu-font-size-14 main-menu-lh-5">
                            <nav>
                                <ul>
                                    <li><a href="{{route('welcome')}}">Home</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="main-categori-wrap main-categori-wrap-modify-2">
                            <a class="categori-show categori-blue" href="#">Boxes By Industry <i
                                    class="icon-arrow-down icon-right"></i></a>
                            <div class="category-menu-2 category-menu-2-blue categori-hide categori-not-visible-2">
                                <nav>
                                    <ul>
                                        @foreach (App\Models\Industry::where('is_industry', true)->get() as $industry)
                                            <li><a href="{{route('industry.show', $industry)}}">{{$industry->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div
                            class="main-menu main-menu-white main-menu-padding-1 main-menu-font-size-14 main-menu-lh-5">
                            <nav>
                                <ul>
                                    <li><a href="{{route('industry.custom-printed-boxes.show')}}">Custom Printed Boxes</a></li>
                                    <li><a href="{{route('industry.boxes-styles')}}">Boxes Styles</a></li>
                                    <li><a href="{{route('blog.index')}}">Blogs</a></li>
                                    {{-- <li><a href="portfolio.html">Portfolio</a></li> --}}
                                    <li><a href="{{route('product.rush-order')}}">Rush Order</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="header-action header-action-flex pr-20">
                            {{-- <div class="same-style-2 same-style-2-white same-style-2-font-dec">
                                <a href="login-register.html"><i class="icon-user"></i></a>
                            </div> --}}
                            {{-- <div class="same-style-2 same-style-2-white same-style-2-font-dec">
                                <a href="wishlist.html"><i class="icon-heart"></i><span
                                        class="pro-count red">03</span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-small-device small-device-ptb-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5">
                    <div class="mobile-logo">
                        <a href="index.html">
                            <img alt="" src="{{asset('assets/website')}}/images/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="header-action header-action-flex">
                        <div class="same-style-2 same-style-2-font-inc">
                            <a href="login-register.html"><i class="icon-user"></i></a>
                        </div>
                        {{-- <div class="same-style-2 same-style-2-font-inc">
                            <a href="wishlist.html"><i class="icon-heart"></i><span
                                    class="pro-count red">03</span></a>
                        </div>
                        <div class="same-style-2 same-style-2-font-inc header-cart">
                            <a class="cart-active" href="#">
                                <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                            </a>
                        </div> --}}
                        <div class="same-style-2 main-menu-icon">
                            <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- mobile header start -->
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="clickalbe-sidebar-wrap">
        <a class="sidebar-close"><i class="icon_close"></i></a>
        <div class="mobile-header-content-area">
            <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">
                <p><span>FREE SHIPPING</span> world wide for all orders over $199</p>
            </div>
            <div class="mobile-search mobile-header-padding-border-1">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search here…">
                    <button class="button-search"><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-padding-border-2">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="index.html">Home</a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home version 1 </a></li>
                                <li><a href="index-2.html">Home version 2</a></li>
                                <li><a href="index-3.html">Home version 3</a></li>
                                <li><a href="index-4.html">Home version 4</a></li>
                                <li><a href="index-5.html">Home version 5</a></li>
                                <li><a href="index-6.html">Home version 6</a></li>
                                <li><a href="index-7.html">Home version 7</a></li>
                                <li><a href="index-8.html">Home version 8</a></li>
                                <li><a href="index-9.html">Home version 9</a></li>
                                <li><a href="index-10.html">Home version 10</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="#">shop</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><a href="#">shop layout</a>
                                    <ul class="dropdown">
                                        <li><a href="shop.html">standard style</a></li>
                                        <li><a href="shop-list.html">shop list style</a></li>
                                        <li><a href="shop-fullwide.html">shop fullwide</a></li>
                                        <li><a href="shop-no-sidebar.html">grid no sidebar</a></li>
                                        <li><a href="shop-list-no-sidebar.html">list no sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                        <li><a href="store-location.html">store location</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Products Layout</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-2.html">tab style 2</a></li>
                                        <li><a href="product-details-sticky.html">sticky style</a></li>
                                        <li><a href="product-details-gallery.html">gallery style </a></li>
                                        <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                        <li><a href="product-details-group.html">group style</a></li>
                                        <li><a href="product-details-fixed-img.html">fixed image style </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about-us.html">about us </a></li>
                                <li><a href="cart.html">cart page</a></li>
                                <li><a href="checkout.html">checkout </a></li>
                                <li><a href="my-account.html">my account</a></li>
                                <li><a href="wishlist.html">wishlist </a></li>
                                <li><a href="compare.html">compare </a></li>
                                <li><a href="contact.html">contact us </a></li>
                                <li><a href="order-tracking.html">order tracking</a></li>
                                <li><a href="login-register.html">login / register </a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="#">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog.html">blog standard </a></li>
                                <li><a href="blog-no-sidebar.html">blog no sidebar </a></li>
                                <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                <a class="categori-show blue" href="#">
                    <i class="lnr lnr-menu"></i> All Department <i class="icon-arrow-down icon-right"></i>
                </a>
                <div class="categori-hide-2">
                    <nav>
                        <ul class="mobile-menu">
                            <li><a href="shop.html"><i class="icon-energy"></i> Consumer Electric </a></li>
                            <li><a href="shop.html"><i class="icon-handbag"></i> Clothing & Apparel </a></li>
                            <li><a href="shop.html"><i class="icon-home"></i> Home, Garden & Kitchen </a></li>
                            <li><a href="shop.html"><i class="icon-game-controller"></i> Game Console </a></li>
                            <li><a href="shop.html"><i class="icon-eyeglass"></i> Jewelry & Watches </a></li>
                            <li><a href="shop.html"><i class="icon-screen-desktop"></i> Computers & Technologies
                                </a></li>
                            <li><a href="shop.html"><i class="icon-camera"></i> Camera, Video & Audio </a></li>
                            <li><a href="shop.html"><i class="icon-social-dribbble"></i> Sport & Outdoor </a>
                            </li>
                            <li><a href="shop.html"><i class="icon-screen-smartphone"></i> Phones & Accessories
                                </a></li>
                            <li><a href="shop.html"><i class="icon-notebook"></i> Books & Office </a></li>
                            <li><a href="shop.html"><i class="icon-rocket"></i> Cars & Motocycles </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                <div class="single-mobile-header-info">
                    <a href="order-tracking.html"><i class="lastudioicon-pin-3-2"></i>Track Orders </a>
                </div>
                <div class="single-mobile-header-info">
                    <a class="mobile-language-active" href="#">Language <span><i
                                class="icon-arrow-down"></i></span></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-mobile-header-info">
                    <a class="mobile-currency-active" href="#">Currency <span><i
                                class="icon-arrow-down"></i></span></a>
                    <div class="lang-curr-dropdown curr-dropdown-active">
                        <ul>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">Real</a></li>
                            <li><a href="#">BDT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-contact-info mobile-header-padding-border-4">
                <ul>
                    <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                    <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                    <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                </ul>
            </div>
            <div class="mobile-social-icon">
                <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
