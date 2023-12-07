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
                        <img src="/frontend_assets/images/product-1.jpg" class="rounded-full p-2" alt="Product">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-[80px] h-[80px] bg-primary rounded-full">
                        <img src="/frontend_assets/images/product-2.jpg" class="rounded-full p-2" alt="Product">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-[80px] h-[80px] bg-primary rounded-full">
                        <img src="/frontend_assets/images/product-3.jpg" class="rounded-full p-2" alt="Product">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-[80px] h-[80px] bg-primary rounded-full">
                        <img src="/frontend_assets/images/product-4.jpg" class="rounded-full p-2" alt="Product">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-[80px] h-[80px] bg-primary rounded-full">
                        <img src="/frontend_assets/images/product-3.jpg" class="rounded-full p-2" alt="Product">
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
                        <marquee behavior="" direction="left">This is Compnay offer and news Text Here</marquee>
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
                <div class="swiper-slide">
                    <div class="w-full h-[260px]">
                        <img src="/frontend_assets/images/banner-1.jpg" class="w-full h-full object-cover rounded-lg" alt="Banner">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full h-[260px]">
                        <img src="/frontend_assets/images/banner-2.jpg" class="w-full h-full object-cover rounded-lg" alt="Banner">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-full h-[260px]">
                        <img src="/frontend_assets/images/banner-2.jpg" class="w-full h-full object-cover rounded-lg" alt="Banner">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTICLES SECTION -->
    <section class="px-3 mt-6">
        <!-- Grid #1 -->
        <div class="grid grid-cols-12 mb-4  bg-bgGray p-2 rounded-lg">
            <div class="col-span-4">
                <div class="w-full h-[150px]">
                    <img src="/frontend_assets/images/product-1.jpg" class="w-full h-full object-cover rounded-lg" alt="Banner">
                </div>
            </div>
            <div class="col-span-8">
                <div class="flex flex-col justify-between h-full ps-4">
                    <div class="">
                        <h2 class="text-lg font-bold text-primary mb-2 leading-tight">The Top 6 Instagram Reels...</h2>
                        <p class="text-sm leading-tight mb-3">
                            If you’re looking to captivate your audience, you’ll want to use the finest...
                        </p>
                    </div>
                    <div class="flex items-center justify-between pr-3">
                        <div class="">
                            <h3 class="text-xs font-semibold">Author</h3>
                            <h3 class="text-xs text-textGray">Joy Root</h3>
                        </div>
                        <div class="flex items-center gap-x-2">
                            <a href="#">
                                <div class="bg-primary w-[26px] h-[26px] flex justify-center items-center rounded-full">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bg-primary w-[26px] h-[26px] flex justify-center items-center rounded-full">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14">
                                        <path d="M18.2048 2.25H21.5128L14.2858 10.51L22.7878 21.75H16.1308L10.9168 14.933L4.95084 21.75H1.64084L9.37084 12.915L1.21484 2.25H8.04084L12.7538 8.481L18.2048 2.25ZM17.0438 19.77H18.8768L7.04484 4.126H5.07784L17.0438 19.77Z"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bg-primary w-[26px] h-[26px] flex justify-center items-center rounded-full">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path d="M13 14H11C7.54202 14 4.53953 15.9502 3.03239 18.8107C3.01093 18.5433 3 18.2729 3 18C3 12.4772 7.47715 8 13 8V3L23 11L13 19V14Z"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grid #2 -->
        <div class="grid grid-cols-12 mb-4 bg-bgGray p-2 rounded-lg">
            <div class="col-span-4">
                <div class="w-full h-[150px]">
                    <img src="/frontend_assets/images/product-3.jpg" class="w-full h-full object-cover rounded-lg" alt="Banner">
                </div>
            </div>
            <div class="col-span-8">
                <div class="flex flex-col justify-between h-full ps-4">
                    <div class="">
                        <h2 class="text-lg font-bold text-primary mb-2 leading-tight">The Top 6 Instagram Reels...</h2>
                        <p class="text-sm leading-tight mb-3">
                            If you’re looking to captivate your audience, you’ll want to use the finest...
                        </p>
                    </div>
                    <div class="flex items-center justify-between pr-3">
                        <div class="">
                            <h3 class="text-xs font-semibold">Author</h3>
                            <h3 class="text-xs text-textGray">Joy Root</h3>
                        </div>
                        <div class="flex items-center gap-x-2">
                            <a href="#">
                                <div class="bg-primary w-[26px] h-[26px] flex justify-center items-center rounded-full">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bg-primary w-[26px] h-[26px] flex justify-center items-center rounded-full">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14">
                                        <path d="M18.2048 2.25H21.5128L14.2858 10.51L22.7878 21.75H16.1308L10.9168 14.933L4.95084 21.75H1.64084L9.37084 12.915L1.21484 2.25H8.04084L12.7538 8.481L18.2048 2.25ZM17.0438 19.77H18.8768L7.04484 4.126H5.07784L17.0438 19.77Z"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bg-primary w-[26px] h-[26px] flex justify-center items-center rounded-full">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path d="M13 14H11C7.54202 14 4.53953 15.9502 3.03239 18.8107C3.01093 18.5433 3 18.2729 3 18C3 12.4772 7.47715 8 13 8V3L23 11L13 19V14Z"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Grid #3 -->
        <div class="grid grid-cols-12 mb-4 bg-bgGray p-2 rounded-lg">
            <div class="col-span-4">
                <div class="w-full h-[150px]">
                    <img src="/frontend_assets/images/product-2.jpg" class="w-full h-full object-cover rounded-lg" alt="Banner">
                </div>
            </div>
            <div class="col-span-8">
                <div class="flex flex-col justify-between h-full ps-4">
                    <div class="">
                        <h2 class="text-lg font-bold text-primary mb-2 leading-tight">The Top 6 Instagram Reels...</h2>
                        <p class="text-sm leading-tight mb-3">
                            If you’re looking to captivate your audience, you’ll want to use the finest...
                        </p>
                    </div>
                    <div class="flex items-center justify-between pr-3">
                        <div class="">
                            <h3 class="text-xs font-semibold">Author</h3>
                            <h3 class="text-xs text-textGray">Joy Root</h3>
                        </div>
                        <div class="flex items-center gap-x-2">
                            <a href="#">
                                <div class="bg-primary w-[26px] h-[26px] flex justify-center items-center rounded-full">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bg-primary w-[26px] h-[26px] flex justify-center items-center rounded-full">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14">
                                        <path d="M18.2048 2.25H21.5128L14.2858 10.51L22.7878 21.75H16.1308L10.9168 14.933L4.95084 21.75H1.64084L9.37084 12.915L1.21484 2.25H8.04084L12.7538 8.481L18.2048 2.25ZM17.0438 19.77H18.8768L7.04484 4.126H5.07784L17.0438 19.77Z"></path>
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bg-primary w-[26px] h-[26px] flex justify-center items-center rounded-full">
                                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path d="M13 14H11C7.54202 14 4.53953 15.9502 3.03239 18.8107C3.01093 18.5433 3 18.2729 3 18C3 12.4772 7.47715 8 13 8V3L23 11L13 19V14Z"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\app_view_dash\resources\views/frontend/index.blade.php ENDPATH**/ ?>