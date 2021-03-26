    <header id="header" class="header-v1 header-v3">
        <div id="topbar">
            <div class="container container-ver2">
                <div class="inner-topbar box">




                    <div class="logo">
                        <a href="<?php echo e(route('home')); ?>" title="Fresh">
                            <?php if(is_null($headerLogo)): ?>
                                <h2><?php echo e(setting('store_name')); ?></h2>
                            <?php else: ?>
                                <img src="<?php echo e($headerLogo); ?>" alt="Fresh">
                            <?php endif; ?>
                        </a>
                    </div>

















































                </div>
            </div>
        </div>
        <?php echo $__env->make('public.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
