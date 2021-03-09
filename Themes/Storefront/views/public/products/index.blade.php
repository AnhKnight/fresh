@extends('public.layout')

@section('title')
    @if (request()->has('query'))
        {{ trans('storefront::products.search_results_for') }}: "{{ request('query') }}"
    @else
        {{ trans('storefront::products.shop') }}
    @endif
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/range-price.css') }}"/>
@endpush
@section('content')
    <div class="banner-header banner-lbook3 space-30">
        <img src="{{ asset('assets/images/banner-catalog1.jpg') }}" alt="Banner-header">
        <div class="text">
            <h3>@if(!empty($category))  {{ $category->name }} @elseif(request('query')) {{ request('query') }} @endif</h3>
            <p><a href="{{ route('home') }}" title="Trang chủ">Trang chủ</a><i class="fa fa-caret-right"></i>@if(!empty($category))  {{ $category->name }} @elseif(request('query')) {{ request('query') }} @endif</p>
        </div>
    </div>
    <div class="container container-ver2">
        <div id="primary" class="col-xs-12 col-md-9">
            <div class="products ver2 grid_full grid_sidebar hover-shadow furniture">
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
            <!-- End product-content products  -->
            <div class="pagination-container">
                {{ $products->links() }}
            </div>
            <!-- End pagination-container -->
        </div>
        <!-- End Primary -->
            @include('public.products.partials.filter')
    </div>
        <!-- End Secondary -->
@endsection
@push('js')
    <script src="{{ asset('assets/js/price-range.js') }}"></script>
@endpush
