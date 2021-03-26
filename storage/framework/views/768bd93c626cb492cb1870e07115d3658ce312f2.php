<?php if($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty()): ?>
    <div class="header-top">
        <div class="container container-ver2">
            <div class="box">
                <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
                <div class="logo-mobile"><a href="<?php echo e(route('home')); ?>" title="Xanadu"><img src="assets/images/logo-v1.png" alt="Xanadu-Logo"></a></div>
                <nav class="mega-menu">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <ul class="nav navbar-nav" id="navbar">
                        <li class="level1 active"><a href="<?php echo e(route('home')); ?>" title="Home">Trang chủ</a>
                        </li>
                        <li class="level1"><a href="<?php echo e(route('home')); ?>/giới-thiệu" title="Giới thiệu">Giới thiệu</a></li>
                        <li class="level1 dropdown">
                            <a href="javascript:void(0)" title="men">Sản Phẩm</a>
                            <div class="sub-menu sub-menu-v2 dropdown-menu">
                                <div class="top-sub-menu">
                                    <img src="<?php echo e(asset('assets/images/top-submenu1.jpg')); ?>" alt="images">
                                </div>
                                <ul class="menu-level-1">
                                    <?php $__currentLoopData = $categoryMenu->menus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(optional($menu->subMenus())->count() > 0): ?>
                                            <li class="level2">
                                                <a href="<?php echo e($menu->url()); ?>"><?php echo e($menu->name()); ?></a>
                                                <ul class="menu-level-2">
                                                    <?php $__currentLoopData = $menu->subMenus(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="level3" >
                                                            <a href="<?php echo e($category->url()); ?>"><?php echo e($category->name()); ?></a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                        <?php else: ?>
                                            <li class="level2">
                                                <a href="<?php echo e($menu->url()); ?>"><?php echo e($menu->name()); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <!-- End RightSubMenu -->
                            </div>
                            <!-- End Dropdown Menu -->
                        </li>
                        <?php if($categoryPosts->count() > 0): ?>
                        <li class="level1 dropdown">
                            <a href="javascript:void(0)" title="men">Bài viết</a>
                            <div class="sub-menu sub-menu-v2 dropdown-menu">
                                <ul class="menu-level-1">
                                    <?php $__currentLoopData = $categoryPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(optional($categoryPost)->count() > 0): ?>
                                            <li class="level2">
                                                <a href="<?php echo e($categoryPost->url()); ?>"><?php echo e($categoryPost->name); ?></a>
                                                <?php if(optional($categoryPost->children)->count() > 0): ?>
                                                <ul class="menu-level-2">
                                                    <?php $__currentLoopData = $categoryPost->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childrenPost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="level3" >
                                                            <a href="<?php echo e($childrenPost->url()); ?>"><?php echo e($childrenPost->name); ?></a>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <!-- End RightSubMenu -->
                            </div>
                            <!-- End Dropdown Menu -->
                        </li>
                        <?php endif; ?>
                        <li class="level1"><a href="<?php echo e(route('home')); ?>/liên-hệ" title="Liên Hệ">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End container -->
    </div>
<?php endif; ?>
