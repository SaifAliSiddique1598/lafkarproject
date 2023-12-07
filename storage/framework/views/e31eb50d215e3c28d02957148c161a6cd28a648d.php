<?php $__env->startSection('title', 'Sign up'); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Sign Up SECTION -->
    <section class="px-3 py-4">
        <div class="">
            <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Sign up</h1>
        </div>
        <div class="">
            <form action="">
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Name</label>
                    <input type="text" placeholder="Enter Name" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">CNIC</label>
                    <input type="text" placeholder="Enter CNIC" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Account #</label>
                    <input type="text" placeholder="Enter Account Number" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Contact #</label>
                    <input type="text" placeholder="Enter Contact Number" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Email</label>
                    <input type="email" placeholder="Enter Email" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Password</label>
                    <input type="password" placeholder="Enter Password" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Confirm Password</label>
                    <input type="password" placeholder="Enter Confirm Password" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                </div>

                <button class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4 ">Sign up</button>

                <div class="mb-4 text-center">
                    <h3>Already have account <a href="<?php echo e(route('frontend.page', 'sign_in')); ?>" class="text-primary font-semibold">Sign in</a></h3>
                </div>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\app_view_dash\resources\views/frontend/sign_up.blade.php ENDPATH**/ ?>