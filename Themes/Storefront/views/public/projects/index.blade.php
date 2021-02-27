@extends('public.layout')

@section('title')
    {{ trans('storefront::products.shop') }}
@endsection

@section('content')
    <div id="maincontent">
        <div class="banner-web clearfix"> <img src="{{ asset('frontend/img/SLIDE.jpg') }}" class="img-banner" alt="">
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
                    @endif
                </div>
            </div>
        </div>
        <div id="content" class="container">
            <div class="product clearfix">
                <h1 class="title-pro">
                    @if(!empty($category))
                        {{ $category->name }}
                    @endif
                </h1>
                <div class="product-list row clearfix">
                    @if($projects->count() > 0)
                        @foreach($projects as $project)
                            <div class="product-item col-md-3">
                                <div class="img">
                                    <a href="{{ route('projects.show', $project->slug) }}">
                                        <img width="550" height="522" src="{{ optional($project->base_image)->path }}" class="attachment-large size-large wp-post-image" alt="">
                                    </a>
                                </div>
                                <div class="info clearfix">
                                    <div class="title">
                                        <h3><a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a></h3></div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="wp-pagenavi">
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
