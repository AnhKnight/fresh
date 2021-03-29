<?php $__env->startSection('title'); ?>
    <?php echo e(trans('storefront::products.shop')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="banner-header banner-lbook3 space-30">
        <img src="<?php echo e(asset('assets/images/banner-blog.jpg')); ?>" alt="Banner-header">
        <div class="text">
            <p><a href="<?php echo e(route('home')); ?>" title="Trang chủ">Trang chủ</a><i class="fa fa-caret-right"></i><?php echo e($category->name); ?></p>
        </div>
    </div>

    <div class="container container-ver2">
        <div class="blog-post-container blog-page blog-classic blog-post-columns-2">
            <div id="primary" class="col-xs-12 col-md-9 float-left center">
                <?php if($posts->count() > 0): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="blog-post-item">
                            <div class="blog-post-image hover-images">
                                <a href="<?php echo e(route('posts.show', $post->slug)); ?>" title="Post"><img src="<?php echo e(optional($post->base_image)->path); ?>" alt=""></a>
                            </div>
                            <div class="text">
                                <h3><a href="<?php echo e(route('posts.show', $post->slug)); ?>" title="<?php echo e($post->title); ?>"><?php echo e($post->title); ?></a></h3>
                                <p class="content"><?php echo e($post->short_description); ?></p>
                            </div>
                            <!-- End text -->
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <div class="pagination-container pagination-blog">
                    <?php echo e($posts->links()); ?>

                </div>
                <!-- End pagination-container -->
            </div>
            <!-- End Primary -->
            <div id="secondary" class="widget-area col-xs-12 col-md-3 float-right">
                <div class="wrap-sidebar">
                    <aside class="widget blog-categories">
                        <h3 class="widget-title">Danh Mục</h3>
                        <?php if($categories->count() > 0): ?>
                            <ul>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($category->url()); ?>" title="Design"><?php echo e($category->name); ?></a>
                                        <?php if($category->count() > 0): ?>
                                            <ul>
                                                <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a href="<?php echo e($childrenCategory->url()); ?>" class="link"><?php echo e($childrenCategory->name); ?></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                    </aside>
                </div>
                <!-- End wrap-sidebar -->
            </div>
            <!-- End Secondary -->
        </div>
        <!-- end product sidebar -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>