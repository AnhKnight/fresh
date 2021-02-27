@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('project::projects.project')]))
    @slot('subtitle', '')

    <li><a href="{{ route('admin.projects.index') }}">{{ trans('project::projects.projects') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('project::projects.project')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.projects.update', $project) }}" class="form-horizontal" id="project-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}
        {!! $tabs->render(compact('project')) !!}
    </form>
@endsection

@include('project::admin.projects.partials.shortcuts')
