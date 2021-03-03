@extends('public.layout')

@section('title', $product->name)

@push('meta')
    <meta name="title" content="{{ $product->meta->meta_title }}">
    <meta name="keywords" content="{{ implode(',', $product->meta->meta_keywords) }}">
    <meta name="description" content="{{ $product->meta->meta_description }}">
    <meta property="og:title" content="{{ $product->meta->meta_title }}">
    <meta property="og:description" content="{{ $product->meta->meta_description }}">
    <meta property="og:image" content="{{ $product->baseImage->path }}">
@endpush

@section('content')
    <div class="main-content">
        <div class="container">
            <div class="banner-header banner-lbook3">
                <img src="{{ asset('assets/images/banner-catalog1.jpg') }}" alt="Banner-header">
                <div class="text">
                    <p><a href="{{ route('home') }}" title="Trang chủ">Trang chủ</a><i class="fa fa-caret-right"></i>{{ $product->name }}</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-details-content">
                <div class="col-md-6 col-sm-6 slide-vertical">
                    <div class="slider-for">
                        <div>
                              <span class="zoom">
                                <img class="zoom-images" src="{{ asset('assets/images/products/details/1.jpg') }}" alt="images">
                              </span>
                        </div>
                        <div>
                              <span class="zoom">
                              <img class="zoom-images" src="{{ asset('assets/images/products/details/2.jpg') }}" alt="images">
                              </span>
                        </div>
                        <div>
                              <span class="zoom">
                              <img class="zoom-images" src="{{ asset('assets/images/products/details/3.jpg') }}" alt="images">
                              </span>
                        </div>
                        <div>
                              <span class="zoom">
                              <img class="zoom-images" src="{{ asset('assets/images/products/details/4.jpg') }}" alt="images">
                              </span>
                        </div>
                    </div>
                    <!-- End slider-for -->
                    <div class="slider-nav">
                        <div>
                            <img src="{{ asset('assets/images/products/details/1.jpg') }}" alt="images">
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/products/details/2.jpg') }}" alt="images">
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/products/details/3.jpg') }}" alt="images">
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/products/details/4.jpg') }}" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="box-details-info">
                        <div class="product-name">
                            <h1>{{ $product->name }}</h1>
                        </div>
                        <div class="wrap-price">
                            <p class="price">{{ product_price($product) }}</p>
                        </div>
                    </div>
                    <!-- End box details info -->
                    <div class="options">
                        <p>{!! $product->short_description !!}</p>

                        <div class="social box">
                            <h3>Chia sẻ:</h3>
                            <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                            <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                            <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                            <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                            <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
                        </div>
                        <!-- End share -->
                    </div>
                    <!-- End Options -->
                </div>
            </div>
            <!-- End product-details-content -->
            <div class="hoz-tab-container space-padding-tb-30">
                <ul class="tabs">
                    <li class="item" rel="description">Mô tả</li>
                </ul>
                <div class="tab-container">
                    <div id="description" class="tab-content">
                        <div class="text">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            </div>
            @if($relatedProducts->count() > 0)
                <!-- tab-container -->
                <div class="title-text-v2 space-60">
                    <h3>Sản phẩm khác</h3>
                </div>
                <!-- End title -->
                <div class="upsell-product products furniture hover-shadow ver2 owl-carousel">
                    @if($products->count() > 0)
                        @foreach($products as $product)
                            <div class="item-inner">
                                <div class="product">
                                    <div class="product-images">
                                        <a href="{{ route('products.show', $product->slug) }}" title="product-images">
                                            <img class="primary_image" src="{{ optional($product->base_image)->path }}" alt="">
                                            <img class="secondary_image" src="{{ optional($product->base_image)->path }}" alt="">
                                        </a>
                                    </div>
                                    <a href="{{ route('products.show', $product->slug) }}" title="{{ $product->name }}"><p class="product-title">{{ $product->name }}</p></a>
                                    <p class="product-price">{{ product_price($product) }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            @endif
        </div>
        <!-- End container -->
    </div>
@endsection
