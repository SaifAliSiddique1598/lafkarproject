<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.projects'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>Ticker & Banner Management <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row project-wrapper">
    <div class="col-xxl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Ticker & Banner Management</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <h5 class="fs-15 mb-2">Select User</h5>
                            <select class="form-control" data-choices name="choice"
                                    id="choice">
                                <option value="">Select Users</option>
                                <option value="Choice 1">Choice 1</option>
                                <option value="Choice 2">Choice 2</option>
                                <option value="Choice 3">Choice 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <div class="assignTrades mb-4">
                            <h5 class="fs-15 mb-2">Assign Trades Points</h5>
                            <input type="radio" class="btn-check" name="options-outlined" id="check_1" checked>
                            <label class="btn btn-outline-primary" for="check_1">1</label>

                            <input type="radio" class="btn-check" name="options-outlined" id="check_2">
                            <label class="btn btn-outline-primary" for="check_2">10</label>

                            <input type="radio" class="btn-check" name="options-outlined" id="check_3">
                            <label class="btn btn-outline-primary" for="check_3">100</label>

                            <input type="radio" class="btn-check" name="options-outlined" id="check_4">
                            <label class="btn btn-outline-primary" for="check_4">200</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="assignTrades mb-4" id="assignProfit">
                            <h5 class="fs-15 mb-2">Assign Profit</h5>
                            <input type="radio" class="btn-check" name="assignProfit" id="profit_1" checked>
                            <label class="btn btn-outline-primary" for="profit_1">1000</label>

                            <input type="radio" class="btn-check" name="assignProfit" id="profit_2">
                            <label class="btn btn-outline-primary" for="profit_2">2000</label>

                            <input type="radio" class="btn-check" name="assignProfit" id="profit_3">
                            <label class="btn btn-outline-primary" for="profit_3">3000</label>

                            <input type="radio" class="btn-check" name="assignProfit" id="profit_4">
                            <label class="btn btn-outline-primary" for="profit_4">5000</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="assignTrades mb-4" id="assignPremium">
                            <h5 class="fs-15 mb-2">Assign Quarter Premium Per Trade</h5>
                            <input type="radio" class="btn-check" name="assignPremium" id="premium_1" checked>
                            <label class="btn btn-outline-primary" for="premium_1">8</label>

                            <input type="radio" class="btn-check" name="assignPremium" id="premium_2">
                            <label class="btn btn-outline-primary" for="premium_2">15</label>

                            <input type="radio" class="btn-check" name="assignPremium" id="premium_3">
                            <label class="btn btn-outline-primary" for="premium_3">22</label>

                            <input type="radio" class="btn-check" name="assignPremium" id="premium_4">
                            <label class="btn btn-outline-primary" for="premium_4">34</label>
                        </div>
                    </div>
            </div>
            </div>
        </div>

    </div><!-- end col -->

</div><!-- end row -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

    <script src="<?php echo e(URL::asset('assets/libs/prismjs/prismjs.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\app_view_dash\resources\views/admin/pages/portfolio-management.blade.php ENDPATH**/ ?>