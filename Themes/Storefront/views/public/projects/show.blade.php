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
                    <span>|</span>
                    <span property="itemListElement" typeof="ListItem">
                        <span property="name">{{ $project->title }}</span>
                        <meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
        <div id="content" class="container">
            <div id="content" class="container">
                @if (session()->has('success') )
                    <div class="info-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="box-product clearfix">
                    <h1 class="title-pro">{{ $project->title }}</h1>
                    <div class="all-box clearfix">
                        <div class="info-product row clearfix">
                            <div class="img col-md-6">
                                <div id="demo" class="carousel slide img-project" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @if(optional($project->additional_images)->count() > 0)
                                            @foreach ($project->additional_images as $additionalImage)
                                                @if($loop->iteration == 1)
                                                    <div class="carousel-item slide-banner active">
                                                        <img src="{{ $additionalImage->path }}" class="img-project" width="1100" height="500">
                                                    </div>
                                                @else
                                                    <div class="carousel-item slide-banner">
                                                        <img src="{{ $additionalImage->path }}" class="img-project" width="1100" height="500">
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="carousel-item slide-banner active">
                                                <img src="{{ optional($project->base_image)->path }}" class="img-project" width="1100" height="500">
                                            </div>
                                        @endif
                                    </div>
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="info clearfix">
                                    <div class="title-pro">Thông tin</div>
                                    {!! $project->short_description !!}
                                </div>
                            </div>
                        </div>
                        <div class="content-post clearfix">
                            <div class="title-pro">Mô tả</div>
                            {!! trim($project->body) !!}
                        </div>
                        <div class="tags clearfix"></div>
                    </div>
                    <p class="title-form-contact"> Gửi thông tin liên hệ</p>
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

                    @if($project_news->count() > 0)
                        <div class="related-product related widget clearfix">
                            <div class="title-pro">Dự án khác</div>
                            <div class="list-product list-slider owl-carousel owl-theme" style="opacity: 1; display: block;">
                                <div class="col-carousel">
                                    <div class="owl-carousel carousel-main">
                                        @foreach($project_news as $project_new)
                                            <div class="product-item item-home">
                                                <div class="img">
                                                    <a href="{{ route('projects.show', $project_new->slug) }}">
                                                        <img width="550" height="698" src="{{ optional($project_new->base_image)->path }}"class="attachment-medium size-medium wp-post-image" alt="AZ 8476"/>
                                                    </a>
                                                    <button class="add-icon">
                                                        <a href="{{ route('projects.show', $project->slug) }}">
                                                            <i class="fa fa-search-plus"></i>
                                                        </a>
                                                    </button>
                                                </div>
                                                <div class="info clearfix">
                                                    <div class="title">
                                                        <h3><a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a></h3></div>
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
    </div>
@endsection
