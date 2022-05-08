<header class="header header-intro-clearance header-3">
    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('/images/ecom_logo/ecom-logo.png')}}" alt="ecom Logo" width="105" height="25"/>
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="{{route('search')}}" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="query" class="sr-only">Search</label>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            <input type="search" class="form-control" name="query" id="query" placeholder="Search product ..." required/>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>

            <div class="header-right">
                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <div class="icon">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">{{$cart_count}}</span>
                        </div>
                        <p>Cart</p>
                    </a>

                    @if($cart_count !== 0)
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                @foreach($cart_items as $cart)
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <p>{{$cart->name}}</p>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">{{$cart->qty}}</span>
                                                x ৳ {{$cart->price}}
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <div class="product-image">
                                                <img src="{{asset($cart->options->image)}}" alt="product"/>
                                            </div>
                                        </figure>
                                        <a href="{{route('cart.delete', ['id' => $cart->rowId])}}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                @endforeach
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">৳ {{$cart_total}}</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="{{route('cart.show')}}" class="btn btn-primary">View Cart</a>
                                <a href="{{route('checkout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    @endif

                </div><!-- End .cart-dropdown -->

                <div class="wishlist">
                    {{--@if(Session::get('customer_id'))--}}
                        {{--<a href="{{route('customer.logout')}}" title="Sign out">--}}
                            {{--<div class="icon">--}}
                                {{--<i class="icon-user"></i>--}}
                            {{--</div>--}}
                            {{--<p>Sign out</p>--}}
                        {{--</a>--}}

                    @if(\Illuminate\Support\Facades\Auth::user() || Session::get('customer_id') )
                        <a href="{{route('logout')}}" title="Sign out" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                            <div class="icon">
                                <i class="icon-user"></i>
                            </div>
                            <p>Sign out</p>
                        </a>
                        <form action="{{route('logout')}}" method="post" id="logoutForm">
                            @csrf
                        </form>
                    @else
                        <a href="{{route('register')}}" title="Register">
                            <div class="icon">
                                <i class="icon-user"></i>
                            </div>
                            <p>Register</p>
                        </a>



                        {{--<a href="#signin-modal" data-toggle="modal" title="Sign in / Sign up">--}}
                            {{--<div class="icon">--}}
                                {{--<i class="icon-user"></i>--}}
                            {{--</div>--}}
                            {{--<p>Sign in / Sign up</p>--}}
                        {{--</a>--}}
                    @endif
                </div><!-- End .compare-dropdown -->

            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-left">
                <div class="dropdown category-dropdown is-on" data-visible="false">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories">
                        Browse Categories
                    </a>
                    <div class="dropdown-menu">
                        <nav class="side-nav">
                            <ul class="menu-vertical sf-arrows">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="javascript:;">
                                            {{$category->name}}
                                        </a>
                                        <ul class="menu-vertical">
                                            @foreach($category->subCategory as $subCategory)
                                                <li>
                                                    <a href="{{route('sub-category-product', ['id' => $subCategory->id])}}">{{$subCategory->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul><!-- End .menu-vertical -->
                        </nav><!-- End .side-nav -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .category-dropdown -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <i class="la la-lightbulb-o"></i><p>Clearance<span class="highlight">&nbsp;Up to 10% Off</span></p>
            </div>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
