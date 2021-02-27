@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('contact::contacts.contacts'))

    <li class="active">{{ trans('contact::contacts.contacts') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('resource', 'contacts')
    @slot('name', trans('contact::contacts.contact'))

    @slot('thead')
        @include('contact::admin.contacts.partials.thead', ['name' => 'contacts-index'])
    @endslot
@endcomponent

@push('scripts')
    <script>
        new DataTable('#contacts-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'fullname', name: 'fullname', orderable: false, defaultContent: '', width: '10%'  },
                { data: 'phone', name: 'phone', orderable: false, defaultContent: '', width: '10%'  },
                { data: 'email', name: 'email', searchable: false, width: '10%'  },
                { data: 'address', name: 'address', searchable: false, width: '20%'  },
                { data: 'body', name: 'body', searchable: false, width: '20%'  },
                { data: 'created', name: 'created_at', width: '10%'  },
            ],
        });
    </script>
@endpush
