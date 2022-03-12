@extends('layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Industry</title>
    <meta name="description" content="this is description">
@endsection

@section('custom-css')
@endsection

@section('content')
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">product details </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div class="pro-dec-big-img-slider">
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('assets/website') }}/images/product-details/b-large-1.jpg">
                                        <img src="{{ asset('assets/website') }}/images/product-details/large-1.jpg" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('assets/website') }}/images/product-details/b-large-1.jpg"><i
                                        class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('assets/website') }}/images/product-details/b-large-2.jpg">
                                        <img src="{{ asset('assets/website') }}/images/product-details/large-2.jpg" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('assets/website') }}/images/product-details/b-large-2.jpg"><i
                                        class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('assets/website') }}/images/product-details/b-large-3.jpg">
                                        <img src="{{ asset('assets/website') }}/images/product-details/large-3.jpg" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('assets/website') }}/images/product-details/b-large-3.jpg"><i
                                        class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('assets/website') }}/images/product-details/b-large-4.jpg">
                                        <img src="{{ asset('assets/website') }}/images/product-details/large-4.jpg" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('assets/website') }}/images/product-details/b-large-4.jpg"><i
                                        class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('assets/website') }}/images/product-details/b-large-2.jpg">
                                        <img src="{{ asset('assets/website') }}/images/product-details/large-2.jpg" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('assets/website') }}/images/product-details/b-large-2.jpg"><i
                                        class="icon-size-fullscreen"></i></a>
                            </div>
                        </div>
                        <div class="product-dec-slider-small product-dec-small-style1">
                            <div class="product-dec-small active">
                                <img src="{{ asset('assets/website') }}/images/product-details/small-1.jpg" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('assets/website') }}/images/product-details/small-2.jpg" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('assets/website') }}/images/product-details/small-3.jpg" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('assets/website') }}/images/product-details/small-4.jpg" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('assets/website') }}/images/product-details/small-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content pro-details-content-mrg">
                        <h2>{{ $product->name }}</h2>

                        <p>{{ $product->description }}</p>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="billing-info-wrap mr-50">
                                    <h3>Qoute Area</h3>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="billing-info mb-20">
                                                <div class="billing-select mb-20">
                                                    <select>
                                                        <option>Box Size</option>
                                                        <option>L</option>
                                                        <option>W</option>
                                                        <option>D</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="billing-info mb-20">
                                                <div class="billing-select mb-20">
                                                    <select>
                                                        <option>Unit</option>
                                                        <option>Inches</option>
                                                        <option>MM</option>
                                                        <option>CM</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="billing-info mb-20">
                                                <input type="text" placeholder="Qty">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <div class="billing-select mb-20">
                                                    <select>
                                                        <option>Material</option>
                                                        <option>14pt. Cardstock</option>
                                                        <option>16pt. Cardstock</option>
                                                        <option>16pt. Cardstock</option>
                                                        <option>16pt. Cardstock</option>
                                                        <option>16pt. Cardstock</option>
                                                        <option>16pt. Cardstock</option>
                                                        <option>D</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <div class="billing-select mb-20">
                                                    <select>
                                                        <option>Color</option>
                                                        <option>1 Color</option>
                                                        <option>2 Color</option>
                                                        <option>1 Color</option>
                                                        <option>1 Color</option>
                                                        <option>W</option>
                                                        <option>D</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="billing-info mb-20">
                                                <label>Addons </label>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Gloss Lamination</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Gloss Lamination</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Gloss Lamination</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Gloss Lamination</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="billing-info mb-20">
                                                <label> Addons </label>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Gloss Lamination</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Gloss Lamination</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Gloss Lamination</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Gloss Lamination</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="billing-info col-lg-12">
                                            <div class="  mb-20">
                                                <input type="file" placeholder="Your Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <input type="text" placeholder="Your Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="billing-info ">
                                                <input type="text" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="billing-info ">
                                                <input type="text" placeholder="Phone">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="additional-info-wrap">
                                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                                            </div>
                                        </div>



                                        <div class="pro-details-action-wrap">
                                            <div class="pro-details-add-to-cart">
                                                <a title="Get Qoute" href="#">Get Qoute</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-wrapper pb-110 mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dec-review-topbar nav mb-45">
                            <a class="active" data-bs-toggle="tab" href="#des-details1">Description</a>
                            <a data-bs-toggle="tab" href="#des-details2">Specification</a>
                            <a data-bs-toggle="tab" href="#des-details3">Artwork Guidelines </a>
                            <a data-bs-toggle="tab" href="#des-details4">Order Process </a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="description-wrap">
                                    <p>Crafted in premium watch quality, fenix Chronos is the first Garmin timepiece
                                        to combine a durable metal case with integrated performance GPS to support
                                        navigation and sport. In the tradition of classic tool watches it features a
                                        tough design and a set of modern meaningful tools.</p>
                                    <p> advanced performance metrics for endurance sports, Garmin quality navigation
                                        features and smart notifications. In fenix Chronos top-tier performance
                                        meets sophisticated design in a highly evolved timepiece that fits your
                                        style anywhere, anytime. Solid brushed 316L stainless steel case with
                                        brushed stainless steel bezel and integrated EXOTM antenna for GPS + GLONASS
                                        support. High-strength scratch resistant sapphire crystal. Brown vintage
                                        leather strap with hand-sewn contrast stitching and nubuck inner lining and
                                        quick release mechanism.</p>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="title width1">Name</td>
                                                <td>Salwar Kameez</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">SKU</td>
                                                <td>0x48e2c</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Models</td>
                                                <td>FX 829 v1</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Categories</td>
                                                <td>Digital Print</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Size</td>
                                                <td>60’’ x 40’’</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Brand </td>
                                                <td>Individual Collections</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Color</td>
                                                <td>Black, White</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="title width1">Top</td>
                                                <td>Cotton Digital Print Chain Stitch Embroidery Work</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Bottom</td>
                                                <td>Cotton Cambric</td>
                                            </tr>
                                            <tr>
                                                <td class="title width1">Dupatta</td>
                                                <td>Digital Printed Cotton Malmal With Chain Stitch</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details4" class="tab-pane">
                                <div class="review-wrapper">
                                    <h2>1 review for Sleeve Button Cowl Neck</h2>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-product pb-115" style="background-color: rgb(235, 240, 243);">
            <div class="container">
                <div class="section-title mb-45 text-center">
                    <h2>Related Product</h2>
                </div>
                <div class="related-product-active">

                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="{{ asset('assets/website') }}/images/product/product-13.jpg" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>

                                </div>
                            </div>
                            <div class="product-content-wrap-2 text-center">

                                <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">

                                <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>

                                <div class="pro-add-to-cart">
                                    <button title="Get Qoute">Get Qoute</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('custom-script')
@endsection
