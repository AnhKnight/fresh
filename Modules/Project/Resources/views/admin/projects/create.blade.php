@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('project::projects.project')]))

    <li><a href="{{ route('admin.projects.index') }}">{{ trans('project::projects.projects') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('project::projects.project')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.projects.store') }}" class="form-horizontal" id="project-create-form" novalidate>
        {{ csrf_field() }}
        {!! $tabs->render(compact('project')) !!}
    </form>
@endsection

@include('project::admin.projects.partials.shortcuts')
