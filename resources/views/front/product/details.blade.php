@extends('front.master')

@section('title')
    {{$product->name}}
@endsection

@section('body')
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">{{$product->category->name}}</a></li>
                    <li class="breadcrumb-item"><a href="#">{{$product->subCategory->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="page-content">
            <div class="container">
                <div class="product-details-top mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img id="product-zoom" src="{{asset($product->image)}}" data-zoom-image="{{asset($product->image)}}" alt="product image"/>
                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->
                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                        @foreach($sub_images as $sub_image)
                                            <a class="product-gallery-item active" href="#" data-image="{{asset($sub_image->image)}}" data-zoom-image="{{asset($sub_image->image)}}">
                                                <img src="{{asset($sub_image->image)}}" alt="product side"/>
                                            </a>
                                        @endforeach
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6 mt-10">
                            <div class="product-details product-details-centered">
                                <h1 class="product-title">{{$product->name}}</h1><!-- End .product-title -->
                                <div class="product-price">
                                    ??? {{$product->selling_price}} per {{$product->unit->name}}
                                </div><!-- End .product-price -->
                                <div class="product-content">
                                    <p>{{$product->short_description}}</p>
                                </div><!-- End .product-content -->
                                <form action="{{route('cart.add', ['id' => $product->id])}}" method="post">
                                    @csrf
                                    <div class="product-details-action">
                                        <div class="details-action-col">
                                            <div class="product-details-quantity">
                                                <input type="number" name="quantity" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required/>
                                            </div><!-- End .product-details-quantity -->
                                            <button type="submit" class="btn btn-outline-warning btn-block" style="height: 40px"><span>ADD TO CART</span></button>
                                        </div><!-- End .details-action-col -->
                                    </div><!-- End .product-details-action -->
                                </form>
                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Category:</span>
                                        <a href="#">{{$product->category->name}}</a>
                                    </div><!-- End .product-cat -->
                                    <div class="social-icons social-icons-sm">
                                        <span class="social-label">Share:</span>
                                        <a href="https://www.facebook.com/" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="https://twitter.com/" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="https://www.instagram.com/" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="https://www.pinterest.com/" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div>
                                </div><!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->
                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <h3>Product Information</h3>
                                {!! $product->long_description !!}
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
