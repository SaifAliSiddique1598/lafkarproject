
<?php $__env->startSection('title', 'Support'); ?>
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Sign Up SECTION -->
    <section class="px-3 py-4">
        <div class="">
            <h1 class="text-2xl mb-6 mt-2 font-bold uppercase text-secondary genHead">Support</h1>
        </div>
        <div class="">
            <form action="<?php echo e(route('frontend.support.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                 <div class="mb-4">
                    <?php if(auth()->guard()->check()): ?>
                        <label class="text-base font-bold uppercase" for="">Name</label>
                        <input type="text" name="name" required="" placeholder="Enter Name" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="<?php echo e(auth()->check() ? auth()->user()->name : ''); ?>" <?php echo e(auth()->check() ? 'readonly' : ''); ?>>
                    <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?> 
                        <label class="text-base font-bold uppercase" for="">Name</label>
                        <input type="text" name="name" required="" placeholder="Enter Name" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    <?php endif; ?>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>      
                <div class="mb-4">
                    <?php if(auth()->guard()->check()): ?>
                        <label class="text-base font-bold uppercase" for="">Email</label>
                        <input type="email" name="email" required="" placeholder="Enter Email" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]" value="<?php echo e(auth()->check() ? auth()->user()->email : ''); ?>" <?php echo e(auth()->check() ? 'readonly' : ''); ?>>
                    <?php endif; ?>
                    <?php if(auth()->guard()->guest()): ?> 
                        <label class="text-base font-bold uppercase" for="">Email</label>
                        <input type="email" name="email" required="" placeholder="Enter Email" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    <?php endif; ?>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Subject</label>
                    <input type="text" name="subject" required="" placeholder="Enter Subject" class="h-[50px] border border-textGray rounded-lg w-full px-3 mt-[4px]">
                    <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger" ><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                   <div class="mb-4">
                    <label class="text-base font-bold uppercase" for="">Content</label>
                    <textarea name="content" placeholder="Enter Content" class="h-[150px] border border-textGray rounded-lg w-full px-3 mt-[4px] py-3"></textarea>
                    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger" ><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="w-full h-[50px] text-lg font-bold uppercase rounded-lg bg-primary text-white px-3 mb-4 ">Submit</button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web dev\htdocs\lafkar-main\resources\views/frontend/support.blade.php ENDPATH**/ ?>