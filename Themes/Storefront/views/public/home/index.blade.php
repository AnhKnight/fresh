@extends('public.layout')

@section('title', setting('store_tagline'))

@section('content')
    @unless (is_null($slider))
        @if (storefront_layout() === 'default')
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @include('public.home.sections.slider')
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        @endif
    @endunless
    <div class="product-home clearfix">
        <div class="container">
            <div class="list-tab-product clearfix">
                @if($categories->count() > 0)
                    @foreach($categories as $category)
                        <div class="tab-product">
                            <div class="box-nav">
                             <div class="box-title clearfix">
                                <div class="mobile-category-pull-left">
                                    <h2>{{ $category->name }}</h2>
                                </div>
                                @if($category->children->count() > 0)
                                    <ul class="nav nav-tabs tab-products pull-right" role="tablist">
                                        @foreach($category->children as $children)
                                            <li class="">
                                                <a class=" @if($loop->iteration == 1) active @endif " data-toggle="tab" href="#children-{{$children->id}}">{{ $children->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <ul class="nav nav-tabs tab-products pull-right" role="tablist">
                                        <li class="">
                                            <a class="active" data-toggle="tab" href="#category-{{ $category->id }}">{{ $category->name }}</a>
                                        </li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                        <div class="tab-content">
                            @if($category->children->count() > 0)
                                @foreach($category->children as $children)
                                    <div id="children-{{$children->id}}" class="container tab-pane @if($loop->iteration == 1){{ 'active' }}@else{{ 'fade' }}@endif"><br>
                                        <div class="col-12 col-carousel">
                                            <div class="owl-carousel carousel-main">
                                                @if($children->products->count() > 0)
                                                    @foreach($children->products as $product)
                                                        <div class="product-item item-home">
                                                            <div class="img">
                                                                <a href="{{ route('products.show', $product->slug) }}">
                                                                    <img width="550" height="698" src="{{ $product->base_image->path }}"class="attachment-medium size-medium wp-post-image" alt="AZ 8476"/>
                                                                </a>
                                                                <button class="add-icon">
                                                                    <a href="{{ route('products.show', $product->slug) }}">
                                                                        <i class="fa fa-search-plus"></i>
                                                                    </a>
                                                                </button>
                                                            </div>
                                                            <div class="info clearfix">
                                                                <div class="title">
                                                                    <h3>
                                                                        <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div id="category-{{ $category->id }}" class="container tab-pane active"><br>
                                    <div class="col-12 col-carousel">
                                        <div class="owl-carousel carousel-main">
                                            @if($category->products->count() > 0)
                                                @foreach($category->products as $product_category)
                                                    <div class="product-item item-home">
                                                        <div class="img">
                                                            <a href="{{ route('products.show', $product_category->slug) }}">
                                                                <img width="550" height="698" src="{{ $product_category->base_image->path }}"class="attachment-medium size-medium wp-post-image" alt="AZ 8476"/>
                                                            </a>
                                                            <button class="add-icon">
                                                                <a href="{{ route('products.show', $product_category->slug) }}">
                                                                    <i class="fa fa-search-plus"></i>
                                                                </a>
                                                            </button>
                                                        </div>
                                                        <div class="info clearfix">
                                                            <div class="title">
                                                                <h3>
                                                                    <a href="{{ route('products.show', $product_category->slug) }}">{{ $product_category->name }}</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="trademark clearfix">
        <div class="container">
            <div class="box-title title-line">
                <div class="tl-1"></div>
                <div class="tl-2">Thương hiệu</div>
                <div class="tl-3"></div>
            </div>
            <div class="slider-trademark owl-carousel owl-theme" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 1824px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 228px;">
                            <div class="img"><img src="{{ asset('frontend/img/logo.png') }}" style="height: 97.7px" alt=""></div>
                        </div>
                        <div class="owl-item" style="width: 228px;">
                            <div class="img"><img src="{{ asset('frontend/img/sangetsu.jpg') }}" style="height: 97.7px" alt=""></div>
                        </div>
                        <div class="owl-item" style="width: 228px;">
                            <div class="img"><img src="{{ asset('frontend/img/sincol.gif') }}"  style="padding-top: 40px" alt=""></div>
                        </div>
                        <div class="owl-item" style="width: 228px;">
                            <div class="img"><img src="{{ asset('frontend/img/forest-logo.jpg') }}" style="width: 100%;height: 97.69px;padding-left: 30px" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="owl-controls clickable" style="display: none;">
                    <div class="owl-buttons">
                        <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right "></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-text clearfix">
        <div class="container">
            <div class="box-shop-text clearfix">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-title"><h2>Fresh</h2></div>
                        <div class="text">Rèm nhập khẩu chất lượng cao, mang đến cho khách hàng những sản phẩm rèm cửa và các dịch vụ tốt nhất, hãy cùng khám phá những sản phẩm của Rèm Phú Gia.</div>
                    </div>
                    <div class="col-md-8">
                        <div class="col-12 col-carousel">
                            <div class="owl-carousel carousel-main">
                                @if($posts->count() >0 )
                                    @foreach($posts as $post)
                                <div class="product-item">
                                    <div class="img">
                                        <img width="850" height="567" src="{{ optional($post->base_image)->path }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="rem-cua-ha-noi">
                                        <button class="add-icon"><i class="fa fa-search-plus"></i></button>
                                    </div>
                                    <div class="info clearfix">
                                        <div class="title">
                                            <h3><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h3></div>
                                    </div>
                                </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
