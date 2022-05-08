@extends('front.master')

@section('title')
    Shopping cart
@endsection

@section('body')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{asset('/')}}assets/images/backgrounds/bg-1.jpg')">
            <div class="container">
                <h1 class="page-title" style="color: #fcb941">Shopping cart<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping cart</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            @if($message = Session::get('message'))
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>{!! $message !!}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <table class="table table-cart table-mobile">
                                <thead>
                                    <tr>
                                        <th class="text-center">Product name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($cart_items as $cart_product)
                                        <tr>
                                            <td class="product-col">
                                                <div class="product">
                                                    <figure class="product-media">
                                                        <img src="{{asset($cart_product->options->image)}}" alt="Product image"/>
                                                    </figure>

                                                    <h3 class="product-title">
                                                        <p>{{$cart_product->name}}</p>
                                                    </h3><!-- End .product-title -->
                                                </div><!-- End .product -->
                                            </td>
                                            <td class="price-col text-center">৳ {{number_format($cart_product->price)}}</td>
                                            <form action="{{route('cart.update', ['id' => $cart_product->rowId])}}" method="post">
                                                @csrf
                                                <td class="quantity-col">
                                                    <div class="cart-product-quantity pl-5">
                                                        <input type="number" name="quantity" class="form-control" value="{{$cart_product->qty}}" min="1" max="10" step="1" data-decimals="0" required/>
                                                    </div><!-- End .cart-product-quantity -->
                                                </td>
                                                <td class="total-col text-center">৳ {{number_format($cart_product->price*$cart_product->qty)}}</td>
                                                <td class="remove-col">
                                                    <button type="submit" class="btn-outline-dark-2" title="Update cart" style="border: none">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                </td>
                                                <td class="remove-col">
                                                    <a href="{{route('cart.delete', ['id' => $cart_product->rowId])}}" class="btn-outline-dark" title="Delete cart">
                                                        <i class="icon-close"></i>
                                                    </a>
                                                </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table><!-- End .table table-wishlist -->
                        </div><!-- End .col-lg-9 -->

                        <aside class="col-lg-3">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <tbody>
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td>৳ {{$cart_subtotal}}</td>
                                        </tr><!-- End .summary-subtotal -->
                                        <tr class="summary-shipping">
                                            <td>Shipping:</td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr class="summary-shipping-row">
                                            <td>Free Shipping</td>
                                            <td>৳ 0.00</td>
                                        </tr><!-- End .summary-shipping-row -->

                                        <tr class="summary-shipping-estimate">
                                            <td>Tax:</td>
                                            <td>৳ {{$cart_tax}}</td>
                                        </tr><!-- End .summary-shipping-estimate -->

                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>৳ {{$cart_total}}</td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                @if($cart_count !== 0)

                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        <a href="{{route('checkout')}}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                                    @else
                                        <a href="{{route('register')}}" class="btn btn-outline-primary-2 btn-order btn-block">REGISTER HERE</a>
                                    @endif

                                @endif

                            </div><!-- End .summary -->

                            <a href="{{route('home')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                        </aside><!-- End .col-lg-3 -->

                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
