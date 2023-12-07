<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.projects'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('css'); ?>

    <?php $__env->stopSection(); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>Wallet <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row project-wrapper">
    <div class="col-xxl-8">

    </div>

</div><!-- end row -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/MDUZAIR/00 Clients/Reseller /lafkar/resources/views/admin/pages/wallet-management.blade.php ENDPATH**/ ?>