@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <main class="main">
        <div class="intro-section pt-3 pb-3 mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-slider-container slider-container-ratio mb-2 mb-lg-0">
                            <div class="intro-slider owl-carousel owl-simple owl-dark owl-nav-inside" data-toggle="owl" data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "responsive": {
                                        "768": {
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{asset('/')}}assets/images/demos/demo-3/slider/slide-1-480w.jpg"/>
                                            <img src="{{asset('/')}}assets/images/demos/demo-3/slider/slide-1.jpg" alt="Image Desc"/>
                                        </picture>
                                    </figure><!-- End .slide-image -->
                                    <div class="intro-content">
                                        <h3 class="intro-subtitle text-primary">Daily Deals</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">AirPods <br>Earphones</h1><!-- End .intro-title -->
                                        <div class="intro-price">
                                            <sup>Today:</sup>
                                            <span class="text-primary">
                                                ৳247<sup>.99</sup>
                                            </span>
                                        </div><!-- End .intro-price -->
                                        <a href="{{route('product-details', ['id' => 22])}}" class="btn btn-primary btn-round">
                                            <span>Click Here</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="{{asset('/')}}assets/images/demos/demo-3/slider/slide-2-480w.jpg"/>
                                            <img src="{{asset('/')}}assets/images/demos/demo-3/slider/slide-2.jpg" alt="Image Desc"/>
                                        </picture>
                                    </figure><!-- End .slide-image -->
                                    <div class="intro-content">
                                        <h3 class="intro-subtitle text-primary">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">Echo Dot <br>3rd Gen</h1><!-- End .intro-title -->
                                        <div class="intro-price">
                                            <sup class="intro-old-price">৳49.99</sup>
                                            <span class="text-primary">
                                                ৳29<sup>.99</sup>
                                            </span>
                                        </div><!-- End .intro-price -->
                                        <a href="{{route('product-details', ['id' => 8])}}" class="btn btn-primary btn-round">
                                            <span>Click Here</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->
                            </div><!-- End .intro-slider owl-carousel owl-simple -->
                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div><!-- End .col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="intro-banners">
                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="#">
                                    <img src="{{asset('/')}}assets/images/demos/demo-3/banners/banner-1.jpg" alt="Banner"/>
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Top Product</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">Edifier <br>Stereo Bluetooth</a></h3><!-- End .banner-title -->
                                    <a href="{{route('product-details', ['id' => 23])}}" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="#">
                                    <img src="{{asset('/')}}assets/images/demos/demo-3/banners/banner-2.jpg" alt="Banner"/>
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">GoPro - Fusion 360 <span>Save ৳700</span></a></h3><!-- End .banner-title -->
                                    <a href="{{route('product-details', ['id' => 9])}}" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                            <div class="banner mb-0">
                                <a href="#">
                                    <img src="{{asset('/')}}assets/images/demos/demo-3/banners/banner-3.jpg" alt="Banner"/>
                                </a>
                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Featured</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">Apple Watch 4 <span>Our Hottest Deals</span></a></h3><!-- End .banner-title -->
                                    <a href="{{route('product-details', ['id' => 25])}}" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .intro-banners -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .intro-section -->
        <div class="mb-3"></div><!-- End .mb-3 -->
        <div class="container">
            <h2 class="title title-border mb-5">Shop by Brands</h2><!-- End .title -->
            <div class="owl-carousel mb-5 owl-simple" data-toggle="owl"
                 data-owl-options='{
                    "nav": false,
                    "dots": true,
                    "margin": 30,
                    "loop": true,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1280": {
                            "items":6,
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>

                @foreach($brands as $brand)
                    <a href="{{route('brand-product', ['id' => $brand->id])}}" class="brand">
                        <img src="{{asset($brand->image)}}" alt="Brand image"/>
                    </a>
                @endforeach
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
        @foreach($categories as $category)
            <div class="mb-3"></div><!-- End .mb-3 -->
            <div class="container electronics">
                <div class="heading heading-flex heading-border mb-3">
                    <div class="heading-left">
                        <h2 class="title">{{$category->name}}</h2><!-- End .title -->
                    </div><!-- End .heading-left -->
                </div><!-- End .heading -->
                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="elec-new-tab" role="tabpanel" aria-labelledby="elec-new-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                             data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": true,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>

                            @foreach($category->subCategory as $subCategory)
                                @foreach($subCategory->products as $subCategoryProduct)
                                    <div class="product">
                                        <figure class="product-media">
                                            <img src="{{asset($subCategoryProduct->image)}}" alt="Product image" class="product-image"/>
                                            <div class="product-action">
                                                <a href="{{route('product-details', ['id' => $subCategoryProduct->id])}}" class="btn btn-outline-warning btn-block" title="Product details"><span>Product details</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->
                                        <div class="product-body">
                                            <div class="product-cat">
                                                <p>{{$subCategory->name}}</p>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="{{route('product-details', ['id' => $subCategoryProduct->id])}}">{{$subCategoryProduct->name}}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price"> ৳ {{$subCategoryProduct->selling_price}}</span>
                                                <span class="old-price">was ৳ {{$subCategoryProduct->regular_price}}</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                @endforeach
                            @endforeach
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->
            <div class="mb-3"></div><!-- End .mb-3 -->
        @endforeach
        <div class="icon-boxes-container mt-2 mb-2 bg-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-rocket"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                <p>Orders ৳ 500 or more</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-rotate-left"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                <p>Within 30 days</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-info-circle"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                <p>when you sign up</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-life-ring"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                <p>24/7 amazing services</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .icon-boxes-container -->
    </main><!-- End .main -->
@endsection
