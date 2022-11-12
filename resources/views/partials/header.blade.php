<header class="header-area">
    <div id="header-area" class="header-large-device">
        <div id="top-header" class="header-top header-top-ptb-3 bg-black">
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
        <div id="fixed-header" class="fixed-header">
            <div class="header-middle header-middle-padding-2 bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{route('welcome')}}"><img src="{{asset('assets/website')}}/images/logo/logo.png" alt="customboxesus logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
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

                        <div class="col-xl-2 col-lg-2">
                            <div class="btn-style-1">
                                <a class="animated btn-1-padding-4  btn-1-font-14" href="{{route('product.rush-order')}}">Rush Order</a>
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

                        <div class="col-lg-10">
                            <div
                                class="main-menu main-menu-white main-menu-padding-1 main-menu-font-size-16 main-menu-lh-5">
                                <nav>

                                    <ul>
                                        <li><a href="{{route('welcome')}}">Boxes By Industry <i class="icon-arrow-down"></i></a>
                                            <ul class="sub-menu-style">
                                                @foreach ($industriesHeader as $industry)
                                                    <li><a href="{{route('industry.show', $industry)}}">{{$industry->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{route('industry.custom-printed-boxes.show')}}">Custom Printed Boxes</a></li>
                                        <li><a href="{{route('industry.bags')}}">Bags</a></li>
                                        <li><a href="{{route('industry.marketing-materials')}}">Marketing Materials</a></li>
                                        <li><a href="{{route('industry.boxes-styles')}}">Boxes Styles</a></li>
                                        <li><a href="{{route('industry.inserts')}}">Inserts</a></li>
                                        <li><a href="{{route('blog.index')}}">Blogs</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="header-action header-action-flex pr-20">

                            </div>
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
                        <a href="{{route('welcome')}}">
                            <img style="height: 60px; width: 260px;" alt="customboxesus logo" src="{{asset('assets/website')}}/images/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="header-action header-action-flex">

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
                <p>Free Shipping in all over United States.</p>
            </div>
            <div class="mobile-search mobile-header-padding-border-1">
                <form class="search-form" action="{{route('product.search')}}" method="POST">
                    @csrf
                    <input name="keyword" type="text" placeholder="Search Products..." value="{{old('keyword')}}">
                    <button type="submit" class="button-search"><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-padding-border-2">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="{{route('welcome')}}">Home</a>

                        </li>
                        <li class="menu-item-has-children "><a href="#">Boxes By Industry</a>
                            <ul class="dropdown">
                                @foreach ($industriesHeader as $industry)
                                    <li><a href="{{route('industry.show', $industry)}}">{{$industry->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li><a href="{{route('industry.custom-printed-boxes.show')}}">Custom Printed Boxes</a></li>
                        <li><a href="{{route('industry.boxes-styles')}}">Boxes Styles</a></li>
                        <li><a href="{{route('industry.bags')}}">Bags</a></li>
                        <li><a href="{{route('industry.marketing-materials')}}">Marketing Materials</a></li>
                        <li><a href="{{route('blog.index')}}">Blogs</a></li>
                        <li><a href="{{route('product.rush-order')}}">Rush Order</a></li>
                        <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-contact-info mobile-header-padding-border-4">
                <ul>
                    <a href="tel:9256959888"> <li><i class="icon-phone "></i> (925) 695 9888</li></a>
                    <a href="mailto:info@customboxesus.com"> <li><i class="icon-envelope-open "></i> info@customboxesus.com</li></a>
                </ul>
            </div>
            <div class="mobile-social-icon">
                <a class="twitter" target="_blank" href="https://twitter.com/customboxesus1"><i class="icon-social-twitter"></i></a>
                <a class="facebook" target="_blank" href="https://www.facebook.com/customboxesus1/"><i class="icon-social-facebook"></i></a>
                <a class="instagram" target="_blank" href="https://www.instagram.com/customboxesus/"><i class="icon-social-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
