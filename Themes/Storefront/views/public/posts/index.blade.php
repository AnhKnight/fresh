@extends('public.layout')

@section('title')
    {{ trans('storefront::products.shop') }}
@endsection

@section('content')
    <div class="banner-header banner-lbook3 space-30">
        <img src="{{ asset('assets/images/banner-blog.jpg') }}" alt="Banner-header">
        <div class="text">
            <p><a href="{{ route('home') }}" title="Trang chủ">Trang chủ</a><i class="fa fa-caret-right"></i>{{ $category->name }}</p>
        </div>
    </div>

    <div class="container container-ver2">
        <div class="blog-post-container blog-page blog-classic blog-post-columns-2">
            <div id="primary" class="col-xs-12 col-md-9 float-left center">
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                        <div class="blog-post-item">
                            <div class="blog-post-image hover-images">
                                <a href="{{ route('posts.show', $post->slug) }}" title="Post"><img src="{{ optional($post->base_image)->path }}" alt=""></a>
                            </div>
                            <div class="text">
                                <h3><a href="{{ route('posts.show', $post->slug) }}" title="{{ $post->title }}">{{ $post->title }}</a></h3>
                                <p class="content">{{ $post->short_description }}</p>
                            </div>
                            <!-- End text -->
                        </div>
                    @endforeach
                @endif
                <div class="pagination-container pagination-blog">
                    {{ $posts->links() }}
                </div>
                <!-- End pagination-container -->
            </div>
            <!-- End Primary -->
            <div id="secondary" class="widget-area col-xs-12 col-md-3 float-right">
                <div class="wrap-sidebar">
                    <aside class="widget blog-categories">
                        <h3 class="widget-title">Danh Mục</h3>
                        @if($categories->count() > 0)
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="{{ $category->url() }}" title="Design">{{ $category->name }}</a>
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
                    </aside>
                </div>
                <!-- End wrap-sidebar -->
            </div>
            <!-- End Secondary -->
        </div>
        <!-- end product sidebar -->
    </div>
@endsection
