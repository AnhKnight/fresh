<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('post::posts.posts')); ?>

    <li class="active"><?php echo e(trans('post::posts.posts')); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('admin::components.page.index_table'); ?>
    <?php $__env->slot('buttons', ['create']); ?>
    <?php $__env->slot('resource', 'posts'); ?>
    <?php $__env->slot('name', trans('post::posts.post')); ?>

    <?php $__env->slot('thead'); ?>
        <?php echo $__env->make('post::admin.posts.partials.thead', ['name' => 'posts-index'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>