@extends('public.layout')

@section('title', trans('storefront::404.not_found'))

@section('content')
    <div class="page-404">
        <!-- End images -->
        <div class="text center">
            <div class="icon-box box">
                <img src="{{ asset('assets/images/icon-page404.png') }}" alt="icon">
            </div>
            <h3>Không tìm thấy trang</h3>
            <p>Vui lòng quay trở lại<a href="{{ route('home') }}" title="link">Trang chủ</a></p>
        </div>
        <!-- End text -->
    </div>
@endsection
