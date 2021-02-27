@extends('public.layout')

@section('title')
    {{ trans('storefront::products.shop') }}
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
                    <span>|</span>
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">{{ $post->title }}</span>
                        <meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
        <div id="content" class="container">
            <div class="box-news clearfix">
                <div class="row">
                    <div class="content col-md-8">
                        <h1 class="title-pro">
                            {{ $post->title }}
                        </h1>
                        <div class="all-box clearfix">
                            {!! $post->body !!}
                        </div>
                    </div>
                    <div class="col-md-4 sidebar">
                        <div class="related-posts widget clearfix">
                            <div class="title-pro">Danh mục</div>
                            @if($categories->count() > 0)
                                <ul class="list-related clearfix">
                                @foreach($categories as $category)
                                    <li><a href="{{ $category->url() }}" class="link">{{ $category->name }}</a>
                                        @if($category->count() > 0)
                                        <ul>
                                            @foreach($category->children as $childrenCategory)
                                            <li><a href="{{ $childrenCategory->url() }}" class="link">{{ $childrenCategory->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                @endforeach
                                </ul>
                            @endif
                        </div>

                        <div id="recent-posts-2" class="widget widget_recent_entries clearfix">
                            <div class="title-pro"><span>Bài viết mới</span></div>
                            @if($post_news->count() > 0)
                                <ul class="list-related clearfix">
                                    @foreach($post_news as $post_new)
                                        <li><a href="{{ route('posts.show', $post_new->slug) }}" class="link">{{ $post_new->title }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
