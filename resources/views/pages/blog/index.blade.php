@extends('layouts.master')

@section('title-meta')
    <title>Blogs | {{ config('app.name') }} </title>
    <meta name="description" content="There is something uniquely artistic about the designs printed on printing and packaging boxes. We will give you the latest trends updates in this blog.">

    {{-- open graph tags --}}
    <meta property="og:title" content="Blogs | {{ config('app.name') }} " />
    <meta property="og:type" content="website" />
    {{-- <meta property="og:image" content="{{ asset('storage') }}/images/blogs/{{ $blog->image }}" /> --}}
    <meta property="og:url" content="{{route('blog.index')}}" />
    <meta property="og:description" content="There is something uniquely artistic about the designs printed on printing and packaging boxes. We will give you the latest trends updates in this blog." />

    {{-- twiiter card --}}
    <meta name="twitter:title" content="Blogs | {{ config('app.name') }} ">
    <meta name="twitter:card" content="summary_large_image">
    {{-- <meta name="twitter:image" content="{{ asset('storage') }}/images/blogs/{{ $blog->image }}"> --}}
    <meta name="twitter:description" content="There is something uniquely artistic about the designs printed on printing and packaging boxes. We will give you the latest trends updates in this blog.">

    <link rel="canonical" href="{{route('blog.index')}}" />

@endsection

@section('custom-css')
@endsection

@section('content')

    <div class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                                <div class="blog-wrap mb-40">
                                    <div class="blog-img mb-20">
                                        <a href="{{ route('blog.show', $blog) }}"><img
                                                src="{{ asset('storage') }}/images/blogs/thumbnail/{{ $blog->thumbnail }}"
                                                alt="blog-img"></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <ul>
                                                {{-- <li><a href="#">{{ $blog->category->name }} </a></li> --}}
                                                <li>{{ date('d-M-Y', strtotime($blog->created_at)) }}</li>
                                            </ul>
                                        </div>
                                        <h3 ><a style="color: #2154c4" href="{{ route('blog.show', $blog) }}">{{ $blog->title }}</a></h3>
                                        <p>{{ $blog->summary }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pro-pagination-style text-center mt-10">
                        <ul>
                            {{ $blogs->render() }}
                            {{-- <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper sidebar-wrapper-mrg-left">
                        <h4 class="sidebar-widget-title">Follow Us on</h4>
                            <div class="recent-post">
                                <div class="social-style-1 social-style-1-font-inc ">
                                    <a href="https://twitter.com/customboxesus1" target="_blank"><i
                                            class="icon-social-twitter"></i></a>
                                    <a href="https://www.facebook.com/customboxesus1/" target="_blank"><i
                                            class="icon-social-facebook"></i></a>
                                    <a href="https://www.instagram.com/customboxesus/" target="_blank"><i
                                            class="icon-social-instagram"></i></a>
                                </div>
                            </div>
                        {{-- <div class="sidebar-widget mb-40">
                            <h4 class="sidebar-widget-title">Search </h4>
                            <div class="sidebar-search">
                                <form class="sidebar-search-form" action="#">
                                    <input type="text" placeholder="Search Post">
                                    <button>
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </form>
                            </div>
                        </div> --}}
                        {{-- <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                            <h4 class="sidebar-widget-title">Categories </h4>
                            <div class="shop-catigory">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li><a href="{{ route('blog.index', $category) }}">{{ $category->name }}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div> --}}
                        <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                            <h4 class="sidebar-widget-title">Recent Posts </h4>
                            <div class="recent-post">
                                @foreach ($recentBlogs as $recentBlog)
                                <div class="single-sidebar-blog">
                                    <div class="sidebar-blog-img">
                                        <a href="{{ route('blog.show', $recentBlog) }}"><img src="{{ asset('storage') }}/images/blogs/thumbnail/{{ $recentBlog->thumbnail }}" alt="{{ $recentBlog->thumbnail }}"></a>
                                    </div>
                                    <div class="sidebar-blog-content">
                                        <h5><a href="{{ route('blog.show', $recentBlog) }}">{{$recentBlog->title}}</a></h5>
                                        <span>{{ date('d-M-Y', strtotime($recentBlog->created_at)) }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                            <h4 class="sidebar-widget-title">Archives </h4>
                            <div class="archives-wrap">
                                <select>
                                    <option>Select Month</option>
                                    <option> January 2020 </option>
                                    <option> December 2018 </option>
                                    <option> November 2018 </option>
                                </select>
                            </div>
                        </div> --}}
                        {{-- <div class="sidebar-widget shop-sidebar-border pt-40">
                            <h4 class="sidebar-widget-title">Popular Tags</h4>
                            <div class="tag-wrap sidebar-widget-tag">
                                <a href="#">Clothing</a>
                                <a href="#">Accessories</a>
                                <a href="#">For Men</a>
                                <a href="#">Women</a>
                                <a href="#">Fashion</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
@endsection
