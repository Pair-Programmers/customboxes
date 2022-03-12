@extends('layouts.master')

@section('title-meta')
    <title>{{ env('APP_NAME', 'Admin') }} | Industry</title>
    <meta name="description" content="this is description">
@endsection

@section('custom-css')
@endsection

@section('content')
    <div class="breadcrumb-area bg-gray"
        style="height:200px; background-image:url('{{ asset('assets/website') }}/images/industry-banners/Capture.PNG');">

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
                <div class="col-lg-12">
                    <!-- <div class="shop-topbar-wrapper">
                        <div class="shop-topbar-left">
                            <div class="view-mode nav">
                                <a class="active" href="#shop-1" data-bs-toggle="tab"><i class="icon-grid"></i></a>
                                <a href="#shop-2" data-bs-toggle="tab"><i class="icon-menu"></i></a>
                            </div>
                            <p>Showing 1 - 20 of 30 results </p>
                        </div>
                        <div class="product-sorting-wrapper">
                            <div class="product-shorting shorting-style">
                                <label>View :</label>
                                <select>
                                    <option value=""> 20</option>
                                    <option value=""> 23</option>
                                    <option value=""> 30</option>
                                </select>
                            </div>
                            <div class="product-show shorting-style">
                                <label>Sort by :</label>
                                <select>
                                    <option value="">Default</option>
                                    <option value=""> Name</option>
                                    <option value=""> price</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{route('product.show', [$industry, $product])}}">
                                                        <img src="{{ asset('storage') }}/images/products/{{$product->image1}}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">
                                                    <!-- <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div> -->
                                                    <h3><a href="product-details.html">{{ $product->name }} namw</a></h3>
                                                    <!-- <div class="product-price-2">
                                                <span>$20.50</span>
                                            </div> -->
                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">
                                                    <!-- <div class="product-rating-wrap">
                                                <div class="product-rating">
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star"></i>
                                                    <i class="icon_star gray"></i>
                                                </div>
                                                <span>(2)</span>
                                            </div> -->
                                                    <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                                    <!-- <div class="product-price-2">
                                                <span>$20.50</span>
                                            </div> -->
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
