<?php if($recentProducts->isNotEmpty()): ?>
    <div class="section-header">
        <h3 style="text-align: center; font-size: 25px;"><?php echo e(setting('storefront_recent_products_section_title')); ?></h3>
    </div>
    <?php echo $__env->renderEach('public.products.partials.product_card', $recentProducts, 'product'); ?>
<?php endif; ?>
