@extends('layouts.master')

@section('title-meta')
    <title>{{$product->meta_tag_title}}</title>
    <meta name="description" content="{{$product->meta_tag_description}}">
    <meta name="robots" content="noindex, nofollow">
    <meta name="keywords" content="{{$product->meta_tag_keywords}}">
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
                                        <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}" alt="{{ $product->image1 }}">
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
                                            alt="{{ $product->image2 }}">
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
                                            alt="{{ $product->image3 }}">
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
                                            alt="{{ $product->image4 }}">
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
                                            alt="{{ $product->image5 }}">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup"
                                    href="{{ asset('storage') }}/images/products/{{ $product->image5 }}">
                                    <i class="icon-size-fullscreen"></i></a>
                            </div>
                        </div>
                        <div class="product-dec-slider-small product-dec-small-style1">
                            <div class="product-dec-small active">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image1 }}" alt="{{ $product->image1 }}">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image2 }}" alt="{{ $product->image2 }}">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image3 }}" alt="{{ $product->image3 }}">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image4 }}" alt="{{ $product->image4 }}">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ asset('storage') }}/images/products/{{ $product->image5 }}" alt="{{ $product->image5 }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content pro-details-content-mrg">
                        <h2>{{ $product->name }}</h2>

                        <p>{{ $product->summary }}</p>
                        <br>
                        {{-- <div style="background-color: rgb(175, 174, 174)" class="pl-10 pt-2 pb-1 mb-3"> --}}
                            <h2 style="color: rgb(236, 27, 27)"> <strong> Get Custom Qoute Now !</strong></h2>
                        {{-- </div> --}}
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                @elseif(\Session::has('error'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>{!! \Session::get('error') !!}</li>
                                        </ul>
                                    </div>
                                @endif

                        <div class="billing-info-wrap ">
                            <form id="orderForm" action="{{ route('order.store') }}" method="POST"
                                enctype="multipart/form-data">
                                {{-- <h3>Qoute Area</h3> --}}
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info">
                                            <input type="text" required name="height" placeholder="Height">
                                            <input type="hidden" name="qoute_form" value="Product Detail Form">

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input type="text" required name="width" placeholder="Width">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input type="text" required name="depth" placeholder="Depth">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <div class="billing-select mb-20">
                                                <select name="unit" required>
                                                    <option selected disabled value="">Unit</option>
                                                    <option value="Inches">Inches</option>
                                                    <option value="MM">MM</option>
                                                    <option value="CM">CM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <div class="billing-select mb-20">
                                                <select name="material" required>
                                                    <option selected disabled value="">Material</option>
                                                    <option value="14pt. Cardstock">14pt. Cardstock</option>
                                                    <option value="16pt. Cardstock">16pt. Cardstock</option>
                                                    <option value="18pt. Cardstock">18pt. Cardstock</option>
                                                    <option value="20pt. Cardstock">20pt. Cardstock</option>
                                                    <option value="22pt. Cardstock">22pt. Cardstock</option>
                                                    <option value="24pt. Cardstock">24pt. Cardstock</option>
                                                    <option value="Corrugated Cardboard">Corrugated Cardboard</option>
                                                    <option value="Brown Kraft CardStock">Brown Kraft CardStock</option>
                                                    <option value="Recycled Bux Board">Recycled Bux Board</option>
                                                    <option value="Rigid Material">Rigid Material</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <div class="billing-select mb-20">
                                                <select name="color" required>
                                                    <option selected disabled value="">Color</option>
                                                    <option value="1 Color">1 Color</option>
                                                    <option value="2 Color">2 Color</option>
                                                    <option value="3 Color">3 Color</option>
                                                    <option value="4 Color">4 Color</option>
                                                    <option value="4/1 Color">4/1 Color</option>
                                                    <option value="4/2 Color">4/2 Color</option>
                                                    <option value="4/3 Color">4/3 Color</option>
                                                    <option value="4/4 Color">4/4 Color</option>
                                                    <option value="Pantone (PMS)">Pantone (PMS)</option>
                                                    <option value="Full Color Printing">Full Color Printing</option>
                                                    <option value="Both Side Printing">Both Side Printing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input type="number" name="qty_1" required placeholder="1st Qty">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input type="number" name="qty_2" placeholder="2nd Qty">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="billing-info mb-20">
                                            <label>Addons </label>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" value="Gloss Lamination" name="addons[]" type="checkbox">
                                                <span>Gloss Lamination</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" value="Matte Lamination" name="addons[]" type="checkbox">
                                                <span>Matte Lamination</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" value="Window Patching" name="addons[]" type="checkbox">
                                                <span>Window Patching</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" value="Embossing" name="addons[]" type="checkbox">
                                                <span>Embossing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="billing-info mb-20">
                                            <label> Addons </label>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" value="Spot UV Coating" name="addons[]" type="checkbox">
                                                <span>Spot UV Coating</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" value="Full UV Coating" name="addons[]" type="checkbox">
                                                <span>Full UV Coating</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" value="Silver Foiling" name="addons[]" type="checkbox">
                                                <span>Silver Foiling</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" value="Gold Foiling" name="addons[]" type="checkbox">
                                                <span>Gold Foiling</span>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <input type="file" name="box_design_file">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <input type="text" name="customer_name" required placeholder="Your Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input type="text" name="customer_email" required placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-20">
                                            <input type="text" name="customer_phone" placeholder="Phone">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="billing-info mb-20">
                                        <textarea name="customer_note" placeholder="Notes about your order, e.g. special notes for delivery. " name="message"
                                            rows="4"></textarea>

                                    </div>
                                </div>

                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-add-to-cart">
                                        <button class="btn" style="background-color: red">Get Qoute</button>
                                    </div>
                                </div>
                            </form>
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
                                {!!$product->description!!}
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="specification-wrap table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="title width1">Box Style</td>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Dimension (L + W + H)</td>
                                            <td>All Custom Sizes & Shapes</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Quantities</td>
                                            <td>No Minimum Order Required</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Paper Stock</td>
                                            <td>10pt to 28pt (60lb to 400lb) Eco-Friendly Kraft, E-flute Corrugated, Bux Board, Cardstock</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Printing</td>
                                            <td>No Printing, CMYK, CMYK + 1 PMS color, CMYK + 2 PMS colors</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Finishing </td>
                                            <td>Gloss Lamination, Matte Lamination, Gloss AQ, Gloss UV, Matte UV, Spot UV, Embossing, Foiling</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Included Options</td>
                                            <td>Die Cutting, Gluing, Scored, Perforation</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Additional Options</td>
                                            <td>Eco-Friendly, Recycled Boxes, Biodegradable</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Proof</td>
                                            <td>Flat View, 3D Mock-up, Physical Sampling (On request)</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Turnaround</td>
                                            <td>Standard 7 - 9 Business Days, RUSH 4 - 6 Business Days</td>
                                        </tr>
                                        <tr>
                                            <td class="title width1">Shipping</td>
                                            <td>FLAT (Free Shipping to USA, UK, Canada)</td>
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

                                <h3>{{ $product->name }}</h3>

                            </div>
                            <div class="product-content-wrap-2 product-content-position text-center">


                                <div class="pro-add-to-cart">
                                    <a href="{{ route('product.show', [$industry, $product]) }}">
                                    <button title="Get Qoute">Get Qoute</button>
                                </a>
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
