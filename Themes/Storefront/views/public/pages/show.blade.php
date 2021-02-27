@extends('public.layout')

@section('title', $page->name)

@push('meta')
    <meta name="title" content="{{ $page->meta->meta_title }}">
    <meta name="keywords" content="{{ implode(',', $page->meta->meta_keywords) }}">
    <meta name="description" content="{{ $page->meta->meta_description }}">
    <meta property="og:title" content="{{ $page->meta->meta_title }}">
    <meta property="og:description" content="{{ $page->meta->meta_description }}">
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
                        <span property="name">{{ $page->name }}</span>
                        <meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
        <div id="content" class="container">
            <div class="box-page clearfix">
                <h1 class="title-pro text-center">{{ $page->name }}</h1>
                <div class="content-post clearfix">
                    {!! $page->body  !!}
                </div>
            </div>
        </div>
    </div>
@endsection
