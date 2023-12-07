<?php $__env->startSection('title', 'Trade'); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- PORTFOLIO SECTION -->
    <section class="px-3 py-4 portFolioMain">
        <div class="">
            <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Trade</h1>
        </div>
        <div class="">
            <form action="">
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Customer Name</label>
                    <input type="text" placeholder="Enter Customer Name" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Number One</label>
                    <input type="text" placeholder="Enter Number One" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Number Two</label>
                    <input type="text" placeholder="Enter Number Two" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Item Code</label>
                    <input type="text" placeholder="Enter Item Code as per Catalog" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Booking Price</label>
                    <input type="text" placeholder="Enter Booking Price" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Address</label>
                    <textarea name="" placeholder="Enter Complete Address" class="h-[150px] border border-textGray rounded-lg w-full px-3 mt-[4px] py-3"></textarea>
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Special Note</label>
                    <textarea name="" placeholder="Enter Special Note" class="h-[150px] border border-textGray rounded-lg w-full px-3 mt-[4px] py-3"></textarea>
                </div>
                <button class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4 ">Trade Now</button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\app_view_dash\resources\views/frontend/trade.blade.php ENDPATH**/ ?>