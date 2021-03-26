<tr>
    <?php echo $__env->make('admin::partials.table.select_all', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <th><?php echo e(trans('post::posts.thumbnail')); ?></th>
    <th><?php echo e(trans('post::posts.title')); ?></th>
    <th><?php echo e(trans('admin::admin.table.status')); ?></th>
    <th data-sort><?php echo e(trans('admin::admin.table.created')); ?></th>
</tr>
