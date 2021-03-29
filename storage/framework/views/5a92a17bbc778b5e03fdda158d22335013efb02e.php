<?php $__env->startSection('title', setting('store_tagline')); ?>

<?php $__env->startSection('content'); ?>
    <?php if (! (is_null($slider))): ?>
        <?php if(storefront_layout() === 'default'): ?>
            <div class="tp-banner-container hidden-dot ver1">
                <div class="tp-banner" >
                    <ul>
                        <?php echo $__env->make('public.home.sections.slider', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="container container-ver2 space-30">
        <div class="shipping-v2 home3-shiping space-30">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="<?php echo e(asset('assets/images/icon-shipping-1.png')); ?>" alt="images">
                <h3>Giao hàng nội thành miễn phí nội thành</h3>
                <p>Cho đơn hàng từ 500.000 trở lên</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="<?php echo e(asset('assets/images/icon-shipping-2.png')); ?>" alt="images">
                <h3>Hàng tươi mỗi ngày</h3>
                <p>Từ trang trại đến tay người dùng</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="<?php echo e(asset('assets/images/icon-shipping-3.png')); ?>" alt="images">
                <h3>Tham quan trang trại</h3>
                <p>Trang trại sạch đảm bảo chất lượng</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <img src="<?php echo e(asset('assets/images/icon-shipping-4.png')); ?>" alt="images">
                <h3>Hotline</h3>
                <p>Liên hệ 24/7</p>
            </div>
        </div>
    </div>
    <div class="choose-us">
        <div class="container container-ver2">
            <div class="title-choose align-center">
                <h3>Tại sao nên chọn chúng tôi</h3>
                <p>Chúng tôi cung cấp sản phẩm tươi sạch. Giúp gia đình bạn nấu những bữa ăn ngon và an toàn.</p>
                <div class="align-center border-choose">
                    <div class="images">
                        <img src="assets/images/bg-border-center.png" alt="icon">
                    </div>
                    <!--End images-->
                </div>
                <!--End border-->
            </div>
            <!--End title-->
            <div class="col-md-3 align-left">
                <div class="text">
                    <img class="icon-choose" src="assets/images/icon-choose-1.png" alt="icon-choose">
                    <h3>100% tự nhiên</h3>
                    <p>Xanh - Sạch</p>
                </div>
                <!--End text-->
                <div class="text">
                    <img class="icon-choose" src="assets/images/icon-choose-2.png" alt="icon-choose">
                    <h3>Gia đình</h3>
                    <p>Khỏe mạnh - An toàn</p>
                </div>
                <!--End text-->
                <div class="text">
                    <img class="icon-choose" src="assets/images/icon-choose-3.png" alt="icon-choose">
                    <h3>Luôn tươi</h3>
                    <p>Luôn luôn tươi ngon </p>
                </div>
                <!--End text-->
            </div>
            <!--End col-md-3-->
            <div class="col-md-6">
                <img class="img-responsive" src="assets/images/images-choose.jpg" alt="banner">
            </div>
            <!--End col-md-6-->
            <div class="col-md-3 align-right right-items">
                <div class="text">
                    <h3>0% hóa chất</h3>
                    <img class="icon-choose" src="assets/images/icon-choose-4.png" alt="icon-choose">
                    <p>Không sử dụng hóa chất trong nuôi trồng </p>
                </div>
                <!--End text-->
                <div class="text">
                    <h3>Khỏe mạnh hơn</h3>
                    <img class="icon-choose" src="assets/images/icon-choose-5.png" alt="icon-choose">
                    <p>Ăn uống điều độ </p>
                </div>
                <!--End text-->
                <div class="text">
                    <h3>An toàn</h3>
                    <img class="icon-choose" src="assets/images/icon-choose-6.png" alt="icon-choose">
                    <p>Cuộc sống vui vẻ </p>
                </div>
                <!--End text-->
            </div>
            <!--End col-md-3-->
        </div>
        <!--End container-->
    </div>

    <div class="container container-ver2 banner-home4">
        <div class="section-header">
            <h3 style="margin-bottom: 10px; font-size: 25px;">Danh mục sản phẩm</h3>
        </div>
        <div class="catbox-container home-4">
            <div class="row">
                <?php if($categories->count() > 0): ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-sm-4">
                            <div class="items">
                                <div class="hover-images">
                                    <img src="<?php echo e(optional($category->base_image)->path); ?>" alt="banner">
                                    <div class="text">
                                        <h3><a href="<?php echo e($category->url()); ?>" style="background-color: inherit; color: #fff;"><?php echo e($category->name); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if(setting('storefront_product_carousel_section_enabled')): ?>
        <div class="container container-ver2 space-30">
            <?php echo $__env->make('public.home.sections.product_carousel', [
                'title' => setting('storefront_product_carousel_section_title'),
                'products' => $sellingProducts
            ], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    <?php endif; ?>

    <?php if(setting('storefront_recent_products_section_enabled')): ?>
        <div class="container container-ver2 space-30">
            <?php echo $__env->make('public.home.sections.recent_products', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    <?php endif; ?>





















    <div class="special home_v1 bg-images box space-100" style="background-image:url('assets/images/home1-banner1.jpg');background-repeat: no-repeat;">
        <div class="col-md-5 float-left align-right">
            <img class="images-logo" src="<?php echo e(asset('assets/images/home1-images-banner1.png')); ?>" alt="images">
        </div>
        <!-- End col-md-7 -->
        <div class="col-md-7 float-right align-left">
            <div class="special-content">
                <img class="icon-big" src="<?php echo e(asset('assets/images/icon-shipping-5.png')); ?>" alt="Giảm giá lớn hôm nay"><h3>GIẢM GIÁ LỚN NGAY HÔM NAY</h3>
                <h5>Được giảm giá 30% cho đơn hàng từ 100 đô la trở lên của bạn ...</h5>
                <div class="time" data-countdown="countdown" data-date="04-20-2017-10-20-30"><div class="labelexpired"> Giảm giá sốc</div></div>
                <a class="link-v1 bg-brand font-300" href="#" title="shopnow">Mua ngay</a>
            </div>
        </div>
        <!-- End col-md-5 -->
    </div>
    <?php if($posts->count() >0 ): ?>
        <div class="container container-ver2 blog-home1">
            <div class="title-text-v2">
                <div class="icon-title align-center space-20">
                    <img src="assets/images/title-lastest-from.png" alt="icon-title">
                </div>
                <h3 style="font-size: 25px;">Bài viết</h3>
                <a class="link padding-bt-20" href="#" title="Xem tất cả">Xem tất cả</a>
            </div>
            <div class="blog-content slider-three-item owl-carousel">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <a class="hover-images" href="<?php echo e(route('posts.show', $post->slug)); ?>" title="images">
                            <img class="img-responsive" src="<?php echo e(optional($post->base_image)->path); ?>" alt="blog">
                        </a>
                        <div class="text">
                            <p class="date"><?php echo e($post->created_at); ?></p>
                            <a href="<?php echo e(route('posts.show', $post->slug)); ?>" title="title"><h3><?php echo e($post->title); ?></h3></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- End blog-content -->
        </div>
    <?php endif; ?>
    <div class="bg-slider-one-item space-50">
        <div class="slider-dot-images">
            <div class="container container-ver2 center">
                <div class="slider-nav">
                    <div>
                        <img src="assets/images/about1.jpg" alt="images">
                    </div>
                </div>
                <div class="slider-for">
                    <div>
                        <p>Tôi hiếm khi viết đánh giá cho các sản phẩm nhưng với nams.vn, tôi rất biết ơn. Trang web ! Cảm ơn một lần nữa vì đã tạo ra một trang web tiện lợi đầy đủ thông tin như vậy.</p>
                        <h3>Nguyễn Văn Test</h3>
                        <a href="#" title="CEO">Nhà sáng lập Nams.vn</a>
                    </div>
                </div>
                <!-- End slider-for -->
            </div>
            <!-- End container -->
            <div class="container container-ver2">
                <div class="brand-content owl-carousel">
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-1.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-2.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-3.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-4.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-5.png" alt="Brand"></a>
                    </div>
                    <div class="items">
                        <a href="#" title="brand"><img class="img-responsive" src="assets/images/brand-6.png" alt="Brand"></a>
                    </div>
                </div>
            </div>
            <!--End container-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>