<?php $__currentLoopData = $slider->slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li data-transition="random" data-slotamount="6" data-masterspeed="1000" >
        <!-- MAIN IMAGE -->
        <img src="<?php echo e($slide->file->path); ?>"  alt="Futurelife-home2-slideshow"  data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">

        <!-- LAYER NR. 9 -->
        <div class="tp-caption color-ea8800 customin randomrotateout font-ro tp-resizeme size-130 weight-300 uppercase"
             data-x="585"
             data-y="245"
             data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
             data-speed="500"
             data-start="2000"
             data-easing="Power4.easeOut"
             data-splitin="chars"
             data-splitout="none"
             data-elementdelay="0.1"
             data-endelementdelay="0.1"
             style="z-index: 3"><?php echo e($slide->caption_1); ?>

        </div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption color-2b2b2b font-ros weight-400 skewfromleft customout size-50 letter-spacing-2"
             data-x="505"
             data-y="403"
             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
             data-speed="800"
             data-start="1600"
             data-easing="Power4.easeOut"
             data-endspeed="300"
             data-endeasing="Power1.easeIn"
             data-captionhidden="on"
             style="z-index: 4"><?php echo e($slide->caption_2); ?>

        </div>

        <!-- LAYER NR. 7 -->
        <div class="tp-caption skewfromleft customout font-roc link-1 bg-brand color-white height-40 size-15"
             data-x="865"
             data-y="500"
             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
             data-speed="800"
             data-start="1500"
             data-easing="Power4.easeOut"
             data-endspeed="300"
             data-endeasing="Power1.easeIn"
             data-captionhidden="on"
             style="z-index: 5;"><a href="<?php echo e($slide->call_to_action_url); ?>" title="<?php echo e($slide->call_to_action_text); ?>" class="" style="font-size: 15px !important;">Xem thêm</a>
        </div>
        <!-- LAYER NR. 8s -->
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

