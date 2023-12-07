
<?php $__env->startSection('title', 'Profile Edit'); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Sign Up SECTION -->
    <section class="px-3 py-4">
        <div class="">
            <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Profile Update</h1>
        </div>
        <div class="">
            <form action="<?php echo e(route('frontend.profile.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Name</label>
                    <input type="text" name="name"  placeholder="Enter Name" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="<?php echo e($user->name); ?>">
                </div>
                 <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Email</label>
                    <input type="email" name="email"  placeholder="Enter Email" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="<?php echo e($user->email); ?>">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">CNIC</label>
                    <input type="text" name="cnic"  placeholder="Enter CNIC" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="<?php echo e($user->cnic); ?>">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Account Title</label>
                    <input type="text" name="account_title"  placeholder="Enter Account Title" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="<?php echo e($user->account_title); ?>">
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Account Type</label>
                    <input type="text" name="account_type"  placeholder="Enter Account Type" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="<?php echo e($user->account_type); ?>">
                  
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Account #</label>
                    <input type="text" name="account_number"  placeholder="Enter Account Number" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="<?php echo e($user->account_numer); ?>">
                   
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Contact #</label>
                    <input type="text" name="contact"  placeholder="Enter Contact Number" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="<?php echo e($user->contact); ?>">
                   
                </div>
                <button type="submit" class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4 ">Update</button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web dev\htdocs\lafkar-main\resources\views/frontend/profile-edit.blade.php ENDPATH**/ ?>