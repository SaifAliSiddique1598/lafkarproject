<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- CATEGORY SLIDER SECTION -->
    <section class="px-3 py-4">
        <!-- <h2 class="text-xl font-bold pb-4 uppercase text-center">Categories</h2> -->
        <div class="swiper" id="categorySlides">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="w-[80px] h-[80px] bg-primary rounded-full">
                        <img src="<?php echo e(url('/')); ?>/frontend_assets/images/product-1.jpg" class="rounded-full p-2" alt="Product">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-[80px] h-[80px] bg-primary rounded-full">
                        <img src="<?php echo e(url('/')); ?>/frontend_assets/images/product-2.jpg" class="rounded-full p-2" alt="Product">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-[80px] h-[80px] bg-primary rounded-full">
                        <img src="<?php echo e(url('/')); ?>/frontend_assets/images/product-3.jpg" class="rounded-full p-2" alt="Product">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-[80px] h-[80px] bg-primary rounded-full">
                        <img src="<?php echo e(url('/')); ?>/frontend_assets/images/product-4.jpg" class="rounded-full p-2" alt="Product">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-[80px] h-[80px] bg-primary rounded-full">
                        <img src="<?php echo e(url('/')); ?>/frontend_assets/images/product-3.jpg" class="rounded-full p-2" alt="Product">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TICKER SECTION -->
    <section class="px-3">
        <div class="">
            <div class="grid grid-cols-12">
                <div class="col-span-3">
                    <div class="bg-primary h-[55px] text-center font-bold text-base uppercase text-white rounded-l-lg flex justify-center items-center">Offers</div>
                </div>
               <div class="col-span-9">
                    <div class="h-[55px] rounded-r-lg bg-bgGray flex justify-center items-center">
                            <marquee behavior="" direction="left"><?php echo e($ticker->message); ?></marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN BANNER SECTION -->
    <section class="px-3 mt-6">
        <div class="swiper" id="mainSlides">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="w-full h-[260px]">
                            <img src="<?php echo e(asset($banner->image ? 'images/banners/' . $banner->image : 'assets/images/no-image.png')); ?>" class="w-full h-full object-cover rounded-lg" alt="Banner">
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- ARTICLES SECTION -->
    <section class="px-3 mt-6">
        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Grid #1 -->
        <div class="grid grid-cols-12 mb-4  bg-bgGray p-2 rounded-lg">
            <div class="col-span-4">
                <div class="w-full h-[150px]">
                    <img src="<?php echo e(asset($faq->image ? 'images/faqs/' . $faq->image : 'assets/images/no-image.png')); ?>" class="w-full h-full object-cover rounded-lg" alt="Banner">
                </div>
            </div>
            <div class="col-span-8">
                <div class="flex flex-col justify-between h-full ps-4">
                    <div class="">
                        <h2 class="text-lg font-bold text-primary mb-2 leading-tight"><?php echo e($faq->title); ?></h2>
                        <p class="text-sm leading-tight mb-3">
                            <?php echo e($faq->content); ?>

                        </p>
                    </div>
                   
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        new Swiper('#categorySlides', {
            slidesPerView: 4,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
            },
        });
        new Swiper('#mainSlides', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
            },
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web dev\htdocs\lafkar-main\resources\views/frontend/index.blade.php ENDPATH**/ ?>