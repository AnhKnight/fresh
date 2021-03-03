@extends('public.layout')

@section('title')
    {{ trans('storefront::products.shop') }}
@endsection

@section('content')
    <div class="container">
        <div class="banner-header banner-lbook3 space-50">
            <img src="{{ asset('assets/images/banner-blog.jpg') }}" alt="Banner-header">
            <div class="text">
                <p><a href="{{ route('home') }}" title="Trang chủ">Trang chủ</a><i class="fa fa-caret-right"></i>{{ $post->title }}</p>
            </div>
        </div>
    </div>
    <div class="container container-ver2">
        <div class="blog-post-container blog-page blog-classic">
            <div id="primary" class="col-xs-12 col-md-9 float-left center">
                <div class="blog-post-container box single-post">
                    <div class="blog-post-item">
                        <div class="head">
                            <h3>{{ $post->title }}</h3>
                            <p class="post-by"><span>{{ $post->created_at }}</span></p>
                        </div>
                        <!-- End head -->
                        <div class="blog-post-image hover-images">
                            <a href="#" title="Post"><img class="img-responsive" src="{{ asset('assets/images/blog-details.jpg') }}" alt=""></a>
                        </div>
                        <div class="text align-left">
                            {!! $post->body !!}
                            <!-- End box-shadow -->
                            <div class="social box">
                                <h3>Chia sẻ :</h3>
                                <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                                <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                                <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                                <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                                <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
                            </div>
                            @if($post_news->count() > 0)
                                <div class="box">
                                    <h3 class="title-v1 space-30">Bài viết mới</h3>
                                    <div class="blog-post-inner blog-related owl-nav-hidden center owl-carousel">
                                        @foreach($post_news as $post_new)
                                            <div class="blog-post-item">
                                                <div class="blog-post-image hover-images">
                                                    <a href="{{ route('posts.show', $post_new->slug) }}" title="{{ $post_new->title }}"><img src="{{ optional($post->base_image)->path }}" alt=""></a>
                                                </div>
                                                <div class="text">
                                                    <h3><a href="{{ route('posts.show', $post_new->slug) }}" title="{{ $post_new->title }}">{{ $post_new->title }}</a></h3>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- End item -->
                </div>
                <!-- End blog-post-container -->
            </div>
            <!-- End Primary -->
            <div id="secondary" class="widget-area col-xs-12 col-md-3 float-right">
                <div class="wrap-sidebar">
                    <aside class="widget blog-categories">
                        <h3 class="widget-title">Danh mục</h3>
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
                    </aside>
                </div>
                <!-- End wrap-sidebar -->
            </div>
            <!-- End Secondary -->
        </div>
        <!-- end product sidebar -->
    </div>
@endsection
