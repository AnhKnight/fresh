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
    <div id="maincontent">
        <div class="banner-web clearfix">
            <img src="{{ asset('frontend/img/SLIDE.jpg') }}" alt="">
            <div class="breadcrumb" typeof="BreadcrumbList">
                <div class="container">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="{{ trans('storefront::products.shop') }}" href="{{ route('home') }}" class="home">
                            <span property="name">{{ trans('storefront::products.shop') }}</span>
                        </a>
                        <meta property="position" content="1">
                    </span>
                    <span>|</span>
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">{{ $product->name }}</span>
                        <meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
        <div id="content" class="container">
            @if (session()->has('success') )
                <div class="info-success">
                     {{ session()->get('success') }}
                </div>
            @endif
            <div class="box-project clearfix">
                <h1 class="title-pro">{{ $product->name }}</h1>
                <div class="all-box clearfix">
                    <div class="info-product row clearfix">
                        <div class="img col-md-6">
                            <img width="550" height="698" src="{{ optional($product->base_image)->path }}" class="attachment-full size-full wp-post-image" alt="AZ 8476">
                        </div>
                        <div class="col-md-6 ">
                            <div class="info clearfix">
                                <div class="title-pro">Thông tin</div>
                                    {!! $product->short_description !!}
                            </div>
                        </div>
                    </div>
                    <div class="content-post clearfix">
                        <div class="title-pro">Mô tả</div>
                        {!! $product->description !!}
                    </div>
                    <div class="tags clearfix"></div>
                </div>
                <form method="post" action="{{ route('contacts.store') }}" class="form-contact">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <label for="fullname">Họ và tên <span class="error-message">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập họ tên">
                            {!! $errors->first('fullname', '<span class="error-message">:message</span>') !!}
                        </div>
                        <div class="col">
                            <label for="address">Địa chỉ <span class="error-message">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ">
                            {!! $errors->first('address', '<span class="error-message">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="phone">Số điện thoại <span class="error-message">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại">
                            {!! $errors->first('phone', '<span class="error-message">:message</span>') !!}
                        </div>
                        <div class="col">
                            <label for="email">Email <span class="error-message">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Nhập email">
                            {!! $errors->first('email', '<span class="error-message">:message</span>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung <span class="error-message">*</span></label>
                        <textarea class="form-control" name="body" id="body" rows="3"></textarea>
                        {!! $errors->first('body', '<span class="error-message">:message</span>') !!}
                    </div>
                    <button type="submit" class="btn btn-primary btn-contact">Gửi</button>
                </form>

                @if($relatedProducts->count() > 0)
                <div class="related-project related widget clearfix">
                    <div class="title-pro">Sản phẩm khác</div>
                    <div class="list-project list-slider owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="col-carousel">
                            <div class="owl-carousel carousel-main">
                                @foreach($relatedProducts as $relatedProduct)
                                    <div class="product-item item-home">
                                        <div class="img">
                                            <a href="{{ route('products.show', $product->slug) }}">
                                                <img width="550" height="698" src="{{ optional($product->base_image)->path }}"class="attachment-medium size-medium wp-post-image" alt="AZ 8476"/>
                                            </a>
                                            <button class="add-icon">
                                                <a href="{{ route('products.show', $product->slug) }}">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                            </button>
                                        </div>
                                        <div class="info clearfix">
                                            <div class="title">
                                                <h3><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h3></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
