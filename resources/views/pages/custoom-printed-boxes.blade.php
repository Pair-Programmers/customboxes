@extends('layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Industry</title>
    <meta name="description" content="this is description">
@endsection

@section('custom-css')
@endsection

@section('content')
    <div class="breadcrumb-area bg-gray"
        style="height:200px; background-image:url('{{ asset('assets/website') }}/images/industry/Capture.PNG');">

    </div> <br>

    <div class="container pt-15" style="text-align: center;">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatibus qui saepe quo, consequatur pariatur
            iure sit officia delectus dolore, iste magni quod hic distinctio voluptas deleniti odit culpa corrupti.</p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae rerum non officiis quo, maiores quod molestias
        architecto nisi optio eaque eligendi explicabo modi tempora consequatur in, animi debitis ad culpa!

    </div>
    <div class="shop-area pt-40 pb-40">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-4">
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
                        <div class="billing-info-wrap ">
                            <form id="orderForm" action="{{ route('order.store') }}" method="POST"
                                enctype="multipart/form-data">
                                {{-- <h3>Qoute Area</h3> --}}
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <div class="billing-select mb-20">
                                                <select name="product_id" required>
                                                    <option selected disabled value="">Products</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info">
                                            <input type="number" required name="height" placeholder="Height">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input type="number" required name="width" placeholder="Width">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="billing-info mb-20">
                                            <input type="number" required name="depth" placeholder="Depth">
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
                                                <input class="checkout-toggle2" name="addons[]" type="checkbox">
                                                <span>Matte Lamination</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" name="addons[]" type="checkbox">
                                                <span>Window Patching</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" name="addons[]" type="checkbox">
                                                <span>Embossing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="billing-info mb-20">
                                            <label> Addons </label>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" name="addons[]" type="checkbox">
                                                <span>Spot UV Coating</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" name="addons[]" type="checkbox">
                                                <span>Full UV Coating</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" name="addons[]" type="checkbox">
                                                <span>Silver Foiling</span>
                                            </div>
                                            <div class="checkout-account ">
                                                <input class="checkout-toggle2" name="addons[]" type="checkbox">
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
                                        <button class="btn">Get Qoute</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{ route('product.show', [$industry, $product]) }}">
                                                        <img src="{{ orage }}/images/products/{{ $product->image1 }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">

                                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>

                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">

                                                    
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
                        <div class="pro-pagination-style text-center mt-10">
                            <ul>
                                <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container pt-15" style="text-align: center;">
        <h3>Detail Description</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus voluptatibus qui saepe quo, consequatur pariatur
            iure sit officia delectus dolore, iste magni quod hic distinctio voluptas deleniti odit culpa corrupti.</p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae rerum non officiis quo, maiores quod molestias
        architecto nisi optio eaque eligendi explicabo modi tempora consequatur in, animi debitis ad culpa!

    </div>
@endsection

@section('custom-script')
@endsection
