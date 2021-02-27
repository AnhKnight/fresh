@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.detail', ['resource' => trans('contact::contacts.contact')]))
    @slot('subtitle', '')

    <li><a href="{{ route('admin.contacts.index') }}">{{ trans('contact::contacts.contact') }}</a></li>
    <li class="active">{{ trans('admin::resource.detail', ['resource' => trans('contact::contacts.contact')]) }}</li>
@endcomponent

@section('content')
    <div class="col-md-12">
        <div class="order clearfix">

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <td style="width: 30%">Họ tên</td>
                        <td>{{ $contact->fullname }}</td>
                    </tr>

                    <tr>
                        <td>Số điện thoại</td>
                        <td>
                            {{ $contact->phone }}
                        </td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{ $contact->email }}</td>
                    </tr>

                    <tr>
                        <td>Địa chỉ</td>
                        <td>{{ $contact->address }}</td>
                    </tr>

                    <tr>
                        <td>Nội dung</td>
                        <td>{{ $contact->body }} </td>
                    </tr>

                    <tr>
                        <td>Thời gian</td>
                        <td>{{ $contact->created_at }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   </div>
@endsection

@include('product::admin.products.partials.shortcuts')
