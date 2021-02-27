@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('post::posts.posts'))

    <li class="active">{{ trans('post::posts.posts') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('buttons', ['create'])
    @slot('resource', 'posts')
    @slot('name', trans('post::posts.post'))

    @slot('thead')
        @include('post::admin.posts.partials.thead', ['name' => 'posts-index'])
    @endslot
@endcomponent

@push('scripts')
    <script>
        new DataTable('#posts-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'thumbnail', orderable: false, searchable: false, width: '20%' },
                { data: 'title', name: 'translations.title', orderable: false, defaultContent: '', width: '20%'  },
                { data: 'status', name: 'is_active', searchable: false, width: '20%'  },
                { data: 'created', name: 'created_at', width: '20%'  },
            ],
        });
    </script>
@endpush
