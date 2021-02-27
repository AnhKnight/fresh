@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('project::projects.projects'))

    <li class="active">{{ trans('project::projects.projects') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('buttons', ['create'])
    @slot('resource', 'projects')
    @slot('name', trans('project::projects.project'))

    @slot('thead')
        @include('project::admin.projects.partials.thead', ['name' => 'projects-index'])
    @endslot
@endcomponent

@push('scripts')
    <script>
        new DataTable('#projects-table .table', {
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
