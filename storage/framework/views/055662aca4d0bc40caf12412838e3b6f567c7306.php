<?php $__env->startSection('title', 'Sign in'); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Sign in SECTION -->
    <section class="px-3 py-4">
        <div class="">
            <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Sign in</h1>
        </div>
        <div class="">
            <form action="">
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Email</label>
                    <input type="email" placeholder="Enter Email" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Password</label>
                    <input type="password" placeholder="Enter Password" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>

                <button class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4 ">Sign in</button>

                <div class="mb-4 text-center">
                    <h3>Don't have an account <a href="<?php echo e(route('frontend.page', 'sign_up')); ?>" class="text-primary font-semibold">Create</a></h3>
                </div>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\app_view_dash\resources\views/frontend/sign_in.blade.php ENDPATH**/ ?>