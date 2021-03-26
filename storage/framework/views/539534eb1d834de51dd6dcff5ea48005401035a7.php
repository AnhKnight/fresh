<div class="col-xs-6 col-md-6 col-sm-6 col-lg-3">
    <div class="products ver2">
        <div class="item-inner">
            <div class="product">
                <div class="product-images">
                    <a href="<?php echo e(route('products.show', $product->slug)); ?>" title="product-images">
                        <img class="primary_image" src="<?php echo e(optional($product->base_image)->path); ?>" alt="">
                        <img class="secondary_image" src="<?php echo e(optional($product->base_image)->path); ?>" alt="">
                    </a>
                </div>
                <a href="<?php echo e(route('products.show', $product->slug)); ?>" title="<?php echo e($product->name); ?>"><p class="product-title"><?php echo e($product->name); ?></p></a>
                <p class="product-price"><?php echo e(product_price($product)); ?></p>
            </div>
        </div>
    </div>
</div>
