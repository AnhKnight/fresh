@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('category::categories.categories'))

    <li class="active">{{ trans('category::categories.categories') }}</li>
@endcomponent

@section('content')
    <div class="box box-default">
        <div class="box-body clearfix">
            <div class="col-lg-2 col-md-3">
                <div class="row">
                    <button class="btn btn-default add-root-category">{{ trans('category::categories.tree.add_root_category') }}</button>
                    <button class="btn btn-default add-sub-category disabled">{{ trans('category::categories.tree.add_sub_category') }}</button>

                    <div class="m-b-10">
                        <a href="#" class="collapse-all">{{ trans('category::categories.tree.collapse_all') }}</a> |
                        <a href="#" class="expand-all">{{ trans('category::categories.tree.expand_all') }}</a>
                    </div>

                    <div class="category-tree"></div>
                </div>
            </div>

            <div class="col-lg-10 col-md-9">
                <div class="tab-wrapper category-details-tab">
                    <ul class="nav nav-tabs">
                        <li class="general-information-tab active"><a data-toggle="tab" href="#general-information">{{ trans('category::categories.tabs.general') }}</a></li>
                        <li class="seo-tab hide"><a data-toggle="tab" href="#seo">{{ trans('category::categories.tabs.seo') }}</a></li>
                        <li class="image-tab"><a data-toggle="tab" href="#images">Ảnh</a></li>
                    </ul>

                    <form method="POST" action="{{ route('admin.category_projects.store') }}" class="form-horizontal" id="category-form" novalidate>
                        {{ csrf_field() }}

                        <div class="tab-content">
                            <div id="general-information" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-8">
                                        {{ Form::text('name', trans('category::attributes.name'), $errors, null, ['required' => true]) }}
                                        {{ Form::checkbox('is_searchable', trans('category::attributes.is_searchable'), trans('category::categories.form.show_this_category_in_search_box'), $errors) }}
                                        {{ Form::checkbox('is_active', trans('category::attributes.is_active'), trans('category::categories.form.enable_the_category'), $errors) }}
                                    </div>
                                </div>
                            </div>

                            <div id="seo" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="hide" id="slug-field">
                                            {{ Form::text('slug', trans('category::attributes.slug'), $errors) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="images">
                                <div class="single-image-wrapper">
                                    <button type="button" class="image-picker btn btn-default" data-input-name="files[base_image]">
                                        <i class="fa fa-folder-open m-r-5"></i>Chọn
                                    </button>

                                    <div class="clearfix"></div>

                                    <div class="single-image image-holder-wrapper clearfix">
                                        <div class="image-holder">
                                            <i class="fa fa-picture-o" id="img-default"></i>
                                            <img src="" id="image-category" style="display: none;">
                                            <button type="button" class="btn remove-image" data-input-name="files[base_image]"></button>
                                            <input type="hidden" name="files[base_image]">
                                        </div>
                                    </div>
                                </div>
                                <div class="media-picker-divider"></div>
                                <div style="display: none;">
                                    <div class="multiple-images-wrapper">
                                        <h4>Hình ảnh bổ sung</h4>

                                        <button type="button" class="image-picker btn btn-default" data-input-name="files[additional_images][]" data-multiple="">
                                            <i class="fa fa-folder-open m-r-5"></i>Chọn
                                        </button>

                                        <div class="multiple-images">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="image-list image-holder-wrapper clearfix">
                                                        <div class="image-holder placeholder cursor-auto">
                                                            <i class="fa fa-picture-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-primary" data-loading>
                                    {{ trans('admin::admin.buttons.save') }}
                                </button>

                                <button type="button" class="btn btn-link text-red btn-delete p-l-0 hide" data-confirm>
                                    {{ trans('admin::admin.buttons.delete') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="overlay loader hide">
            <i class="fa fa-refresh fa-spin"></i>
        </div>
    </div>
@endsection
