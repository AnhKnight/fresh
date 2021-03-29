<?php if($paginator->hasPages()): ?>
    <nav class="pagination align-center">
        <?php if($paginator->onFirstPage()): ?>
            <a class="prev page-numbers" href="javascript:void(0)"><i class="fa fa-angle-left"></i></a>
        <?php else: ?>
            <a class="prev page-numbers" href="<?php echo e($paginator->previousPageUrl()); ?>"><i class="fa fa-angle-left"></i></a>
        <?php endif; ?>

        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <span class="page-numbers current"><?php echo e($element); ?></span>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <span class="page-numbers current"><?php echo e($page); ?></span>
                    <?php else: ?>
                        <a class="page-numbers" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($paginator->hasMorePages()): ?>
            <a class="next page-numbers" href="<?php echo e($paginator->nextPageUrl()); ?>"><i class="fa fa-angle-right"></i></a>
        <?php else: ?>
            <a class="next page-numbers" href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
        <?php endif; ?>
    </nav>
<?php endif; ?>
