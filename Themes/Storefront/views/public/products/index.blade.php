@extends('public.layout')

@section('title')
    @if (request()->has('query'))
        {{ trans('storefront::products.search_results_for') }}: "{{ request('query') }}"
    @else
        {{ trans('storefront::products.shop') }}
    @endif
@endsection

@section('content')
    <div id="maincontent">
        <div class="banner-web clearfix"> <img src="{{ asset('frontend/img/SLIDE.jpg') }}" alt="">
            <div class="breadcrumb" typeof="BreadcrumbList">
                <div class="container">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" title="{{ trans('storefront::products.shop') }}" href="{{ route('home') }}" class="home">
                            <span property="name">{{ trans('storefront::products.shop') }}</span>
                        </a>
                        <meta property="position" content="1">
                    </span>
                    @if(!empty($category))
                        <span>|</span>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name">{{ $category->name }}</span>
                            <meta property="position" content="2">
                        </span>
                    @elseif(request('query'))
                        <span>|</span>
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name">{{ request('query') }}</span>
                            <meta property="position" content="2">
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div id="content" class="container">
            <div class="product clearfix">
                @if (request()->has('query'))
                    <div class="info-success">
                        {{ trans('storefront::products.search_results_for') }} "{{ request('query') }}": {{ intl_number($products->total()) }} {{ trans_choice('storefront::products.products_found', $products->total()) }}
                    </div>
                @endif
                <h1 class="title-pro">
                    @if(!empty($category))
                        {{ $category->name }}
                    @endif
                </h1>
                <div class="product-list row clearfix">
                    @if($products->count() > 0)
                        @foreach($products as $product)
                            <div class="product-item col-md-3">
                                <div class="item-product">
                                    <div class="img">
                                        <a href="{{ route('products.show', $product->slug) }}">
                                            <img width="550" height="522" src="{{ optional($product->base_image)->path }}" class="attachment-large size-large wp-post-image" alt="">
                                        </a>
                                        <button class="add-icon">
                                            <a href="{{ route('products.show', $product->slug) }}">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </button>
                                    </div>
                                    <div class="info clearfix">
                                        <div class="title">
                                            <h3><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }} {{ $product->avgRating() }}</a></h3></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="wp-pagenavi">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
