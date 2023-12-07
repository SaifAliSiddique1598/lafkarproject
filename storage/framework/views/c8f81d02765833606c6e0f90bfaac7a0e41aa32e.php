<?php $__env->startSection('title', 'Portfolio'); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- PORTFOLIO SECTION -->
    <section class="px-5 py-4 portFolioMain">
        <div class="">
            <h1 class="text-2xl mb-4 mt-2 font-bold uppercase text-secondary genHead">Portfolio</h1>
        </div>
        <div class="grid grid-cols-12 gap-5 portFolioBx">
            <div class="col-span-12 portFolioSingle rounded-lg py-4 px-6">
                <div class="flex flex-col justify-between h-[120px]">
                    <h2 class="text-4xl font-bold text-white">30,0000</h2>
                    <h2 class="text-xl font-medium text-white">Total Cash</h2>
                </div>
            </div>
            <div class="col-span-6 bg-white shadow-lg rounded-lg py-4 px-4">
                <div class="flex flex-col justify-between h-[120px]">
                    <h2 class="text-3xl font-bold text-primary">123</h2>
                    <h2 class="text-base leading-tight font-semibold">Trade Completed</h2>
                </div>
            </div>
            <div class="col-span-6 bg-white shadow-lg rounded-lg py-4 px-4">
                <div class="flex flex-col justify-between h-[120px]">
                    <h2 class="text-3xl font-bold text-primary">123</h2>
                    <h2 class="text-base leading-tight font-semibold">Trade Acquired</h2>
                </div>
            </div>
            <div class="col-span-6 bg-white shadow-lg rounded-lg py-4 px-4">
                <div class="flex flex-col justify-between h-[120px]">
                    <h2 class="text-3xl font-bold text-primary">50,0000</h2>
                    <h2 class="text-base leading-tight font-semibold">Total Profite</h2>
                </div>
            </div>
            <div class="col-span-6 bg-white shadow-lg rounded-lg py-4 px-4">
                <div class="flex flex-col justify-between h-[120px]">
                    <h2 class="text-3xl font-bold text-primary">17,009</h2>
                    <h2 class="text-base leading-tight font-semibold">Trade Premium</h2>
                </div>
            </div>
            <div class="col-span-12 portFolioSingle rounded-lg py-4 px-6">
                <div class="flex flex-col justify-between h-[120px]">
                    <h2 class="text-4xl font-bold text-white">18,2000</h2>
                    <h2 class="text-xl font-medium text-white">Net Earning</h2>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web dev\htdocs\lafkar-main\resources\views/frontend/portfolio.blade.php ENDPATH**/ ?>