@extends('front.master')

@section('title')
    Product list
@endsection

@section('body')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{asset('/')}}assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">{{$sub_category->name}}<span>List</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$sub_category->name}}</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="page-content">
            <div class="container">
                <div class="products">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <img src="{{asset($product->image)}}" alt="Product image" class="product-image"/>
                                        <div class="product-action action-icon-top">
                                            <a href="{{route('product-details', ['id' => $product->id])}}" class="btn btn-outline-warning btn-block" title="Product details">
                                                <span>Product details</span>
                                            </a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->
                                    <div class="product-body">
                                        <div class="product-cat">
                                            <p>{{$sub_category->name}}</p>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="{{route('product-details', ['id' => $product->id])}}">{{$product->name}}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            ??? {{$product->selling_price}}
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                        @endforeach
                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
