<?php $__env->startSection('title', trans('storefront::404.not_found')); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-404">
        <!-- End images -->
        <div class="text center">
            <div class="icon-box box">
                <img src="<?php echo e(asset('assets/images/icon-page404.png')); ?>" alt="icon">
            </div>
            <h3>Không tìm thấy trang</h3>
            <p>Vui lòng quay trở lại<a href="<?php echo e(route('home')); ?>" title="link">Trang chủ</a></p>
        </div>
        <!-- End text -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>