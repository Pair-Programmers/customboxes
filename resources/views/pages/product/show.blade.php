@extends('layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Industry</title>
    <meta name="description" content="this is description">
@endsection

@section('custom-css')
@endsection

@section('content')
    {{-- <div class="breadcrumb-area bg-gray">
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
    </div> --}}
    <div class="product-details-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div class="pro-dec-big-img-slider">
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('storage') }}/images/products/{{ $product->image1 }}">
                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('storage') }}/images/products/{{ $product->image1 }}">
                                    <i class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('storage') }}/images/products/{{ $product->image2 }}">
                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image2 }}"
                                            alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('storage') }}/images/products/{{ $product->image2 }}">
                                    <i class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('storage') }}/images/products/{{ $product->image3 }}">
                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image3 }}"
                                            alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('storage') }}/images/products/{{ $product->image3 }}">
                                    <i class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('storage') }}/images/products/{{ $product->image4 }}">
                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image4 }}"
                                            alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('storage') }}/images/products/{{ $product->image4 }}">
                                    <i class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ asset('storage') }}/images/products/{{ $product->image5 }}">
                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image5 }}"
                                            alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('storage') }}/images/products/{{ $product->image5 }}">
                                    <i class="icon-size-fullscreen"></i></a>
                            </div>
                        </div>
                        <div class="product-dec-slider-small product-dec-small-style1">
                            <div class="product-dec-small active">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image2 }}" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image3 }}" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image4 }}" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image5 }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content pro-details-content-mrg">
                        <h2>{{ $product->name }}</h2>

                        <p>{{ $product->summary }}</p>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="billing-info-wrap mr-50">
                                    {{-- <h3>Qoute Area</h3> --}}
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3">
                                            <div class="billing-info mb-20">
                                                <input type="number" placeholder="Height">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="billing-info mb-20">
                                                <input type="number" placeholder="Width">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="billing-info mb-20">
                                                <input type="number" placeholder="Depth">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
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

                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <div class="billing-select mb-20">
                                                    <select>
                                                        <option selected disabled value="">Material</option>
                                                        <option>14pt. Cardstock</option>
                                                        <option>16pt. Cardstock</option>
                                                        <option>18pt. Cardstock</option>
                                                        <option>20pt. Cardstock</option>
                                                        <option>22pt. Cardstock</option>
                                                        <option>24pt. Cardstock</option>
                                                        <option>Corrugated Cardboard</option>
                                                        <option>Brown Kraft CardStock</option>
                                                        <option>Recycled Bux Board</option>
                                                        <option>Rigid Material</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <div class="billing-select mb-20">
                                                    <select>
                                                        <option selected disabled value="">Color</option>
                                                        <option>1 Color</option>
                                                        <option>2 Color</option>
                                                        <option>3 Color</option>
                                                        <option>4 Color</option>
                                                        <option>4/1 Color</option>
                                                        <option>4/2 Color</option>
                                                        <option>4/3 Color</option>
                                                        <option>4/4 Color</option>
                                                        <option>Pantone (PMS)</option>
                                                        <option>Full Color Printing</option>
                                                        <option>Both Side Printing</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <input type="number" placeholder="1st Qty">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <input type="number" placeholder="2nd Qty">
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
                                                    <span>Matte Lamination</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Window Patching</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Embossing</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="billing-info mb-20">
                                                <label> Addons </label>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Spot UV Coating</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Full UV Coating</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Silver Foiling</span>
                                                </div>
                                                <div class="checkout-account ">
                                                    <input class="checkout-toggle2" type="checkbox">
                                                    <span>Gold Foiling</span>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <input type="file" placeholder="Depth">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <input type="text" placeholder="Your Name">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <input type="text" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <input type="text" placeholder="Phone">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message" rows="4"></textarea>

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
                        {{-- <a data-bs-toggle="tab" href="#des-details3">Artwork Guidelines </a>
                        <a data-bs-toggle="tab" href="#des-details4">Order Process </a> --}}
                    </div>
                    <div class="tab-content dec-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="description-wrap">
                                {{$product->description}}
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="specification-wrap table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="title width1">Name</td>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">SKU</td>
                                            <td>{{ $product->name }}</td>
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
                        {{-- <div id="des-details3" class="tab-pane">
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

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product pb-115 pt-50" style="background-color: rgb(235, 240, 243);">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <h2>Related Product</h2>
            </div>
            <div class="related-product-active">

                @foreach ($relatedProducts as $product)
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="{{ route('product.show', [$industry, $product]) }}">
                                    <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}" alt="">
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


            </div>
        </div>
    </div>

    </div>
@endsection

@section('custom-script')
@endsection
