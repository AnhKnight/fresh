<tr>
    @include('admin::partials.table.select_all')
    <th>{{ trans('post::posts.thumbnail') }}</th>
    <th>{{ trans('post::posts.title') }}</th>
    <th>{{ trans('admin::admin.table.status') }}</th>
    <th data-sort>{{ trans('admin::admin.table.created') }}</th>
</tr>
