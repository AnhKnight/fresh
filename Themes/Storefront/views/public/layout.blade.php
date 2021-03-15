<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @hasSection('title')
            @yield('title') - {{ setting('store_name') }}
        @else
            {{ setting('store_name') }}
        @endif
    </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('meta')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/owl-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/settings.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.0.min.js') }}"></script>
    @stack('css')
    <style>
        .tp-simpleresponsive{
            max-height: 500px !important;
            height: 500px !important;
        }
    </style>
</head>
<body>
<div class="awe-page-loading">
    <div class="awe-loading-wrapper">
        <div class="awe-loading-icon">
            <img src="{{ asset('assets/images/logo.png') }}" alt="images">
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>
<!-- End awe-page-loading -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content popup-search">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control control-search" placeholder="Nhập từ khóa...">
                    <button class="button_search" type="button">Tìm kiếm</button>
                </div><!-- /input-group -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="wrappage">
@include('public.partials.header')
@yield('content')
@include('public.partials.footer')
</div>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/engo-plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/store.js') }}"></script>
@stack('js')
</body>
</html>
