    <header id="header" class="header-v1 header-v3">
        <div id="topbar">
            <div class="container container-ver2">
                <div class="inner-topbar box">
{{--                    <div class="float-left">--}}
{{--                        <p class="acc"><img src="assets/images/icon-user-header.png" alt="icon">My Account</p>--}}
{{--                        <p class="phone"><img src="assets/images/icon-phone-header.png.png" alt=""><span>070-7782-9137</span></p>--}}
{{--                    </div>--}}
                    <div class="logo">
                        <a href="{{ route('home') }}" title="Fresh">
                            @if (is_null($headerLogo))
                                <h2>{{ setting('store_name') }}</h2>
                            @else
                                <img src="{{ $headerLogo }}" alt="Fresh">
                            @endif
                        </a>
                    </div>
{{--                    <div class="float-right align-right">--}}
{{--                        <div class="box-right">--}}
{{--                            <div class="cart hover-menu">--}}
{{--                                <p class="icon-cart" title="Add to cart">--}}
{{--                                    <i class="icon"></i>--}}
{{--                                    <span class="cart-count">2</span>--}}
{{--                                </p>--}}
{{--                                <div class="cart-list list-menu">--}}
{{--                                    <ul class="list">--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title="" class="cart-product-image"><img src="assets/images/products/1.jpg" alt="Product"></a>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="product-name">Legging Cathedral</p>--}}
{{--                                                <p class="product-price"><span class="price-old">$700.00</span><span class="price">$350.00</span></p>--}}
{{--                                                <p class="qty">QTY:01</p>--}}
{{--                                            </div>--}}
{{--                                            <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title="" class="cart-product-image"><img src="assets/images/products/2.jpg" alt="Product"></a>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="product-name">Legging Cathedral</p>--}}
{{--                                                <p class="product-price"><span class="price-old">$700.00</span><span class="price">$350.00</span></p>--}}
{{--                                                <p class="qty">QTY:01</p>--}}
{{--                                            </div>--}}
{{--                                            <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#" title="" class="cart-product-image"><img src="assets/images/products/3.jpg" alt="Product"></a>--}}
{{--                                            <div class="text">--}}
{{--                                                <p class="product-name">Legging Cathedral</p>--}}
{{--                                                <p class="product-price"><span class="price-old">$700.00</span><span class="price">$350.00</span></p>--}}
{{--                                                <p class="qty">QTY:01</p>--}}
{{--                                            </div>--}}
{{--                                            <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <p class="total"><span class="left">Total:</span> <span class="right">$1121.98</span></p>--}}
{{--                                    <div class="bottom">--}}
{{--                                        <a class="link-v1" href="#" title="viewcart">View Cart</a>--}}
{{--                                        <a class="link-v1 rt" href="#" title="checkout">Check out</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">--}}
{{--                                <i class="icon"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        @include('public.partials.navbar')
    </header>
