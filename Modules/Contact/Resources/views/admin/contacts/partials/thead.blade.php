<tr>
    @include('admin::partials.table.select_all')
    <th>{{ trans('contact::contacts.fullname') }}</th>
    <th>{{ trans('contact::contacts.phone') }}</th>
    <th>{{ trans('contact::contacts.email') }}</th>
    <th>{{ trans('contact::contacts.address') }}</th>
    <th>{{ trans('contact::contacts.content') }}</th>
    <th data-sort>{{ trans('admin::admin.table.created') }}</th>
</tr>
