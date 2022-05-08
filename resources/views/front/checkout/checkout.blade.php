@extends('front.master')

@section('title')
    Checkout
@endsection

@section('body')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('{{asset('/')}}assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Checkout<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <form action="{{route('order.new')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-2">
                            </div>

                            <div class="col-lg-8">
                                <div class="summary">
                                    <h3 class="summary-title">Your order</h3>

                                    <table class="table table-summary">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($cart_items as $cart_product)
                                                <tr>
                                                    <td>{{$cart_product->name}}</td>
                                                    <td>৳ {{number_format($cart_product->price*$cart_product->qty, 2)}}</td>
                                                </tr>
                                            @endforeach
                                            <tr class="summary-subtotal">
                                                <td>Subtotal:</td>
                                                <td>৳ {{$cart_subtotal}}</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping:</td>
                                                <td>Free shipping</td>
                                            </tr>
                                            <tr>
                                                <td>Tax:</td>
                                                <td>৳ {{$cart_tax}}</td>
                                            </tr>
                                            <tr class="summary-total">
                                                <td>Total:</td>
                                                <td>৳ {{$cart_total}}</td>
                                            </tr>
                                        </tbody>
                                    </table><!-- End .table table-summary -->

                                    @if(\Illuminate\Support\Facades\Auth::check() && $cart_count !== 0)
                                        <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                            Place Order
                                        </button>
                                    @endif
                                </div><!-- End .summary -->
                            </div><!-- End .col-lg-8 -->

                            <div class="col-lg-2">
                            </div>

                        </div><!-- End .row -->
                    </form>
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
