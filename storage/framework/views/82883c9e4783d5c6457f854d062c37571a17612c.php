
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.projects'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('css'); ?>
        <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <?php $__env->stopSection(); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>Profile <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row project-wrapper">
    <div class="col-xxl-8">
        <div class="card" id="contactList">
            <div class="card-header">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="search-box">
                            <input type="text" class="form-control search"
                                   placeholder="Search for contact...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-auto ms-auto">
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted">Sort by: </span>
                           <select class="form-control mb-0" data-choices data-choices-search-false id="choices-single-default">
                                <option value="All">All</option>
                                <option value="pending">Pending</option>
                                <option value="active">Active</option>
                                <option value="rejected">Rejected</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <div class="table-responsive table-card mb-3">
                        <table class="table align-middle table-nowrap mb-0" id="customerTable">
                            <thead class="table-light">
                            <tr>
                                <th scope="col" style="width: 50px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                               id="checkAll" value="option">
                                    </div>
                                </th>
                                <th class="sort" data-sort="name" scope="col">Owner Name</th>
                                <th class="sort" data-sort="designation" scope="col">Designation </th>
                                <th class="sort" data-sort="" scope="col">Trade ID  </th>
                                <th class="sort" data-sort="" scope="col">Trades  </th>
                                <th class="sort" data-sort="" scope="col">Wallet Balance</th>
                                <th class="sort" data-sort="" scope="col">Create Date</th>
                                <th class="sort" data-sort="" scope="col">Revenue</th>
                                <th scope="co
                                l">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list form-check-all">
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="user-row" data-status="<?php echo e($user->status); ?>">
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                    </div>
                                </th>
                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                <td class="name">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 ms-2 name"><?php echo e($user->name); ?></div>
                                    </div>
                                </td>
                                <td class=""><?php echo e($user->designation); ?></td>
                                <td class=""><?php echo e($user->trade_id); ?></td>
                                <td class=""><?php echo e($user->trade_count); ?></td>
                                <td class=""><?php echo e($user->balance_amount); ?></td>
                                <td class=""><?php echo e($user->created_at->format('d-m-Y')); ?></td>
                                <td class=""><?php echo e($user->total_amount); ?></td>
                                <td>
                                    <ul class="list-inline hstack gap-2 mb-0">
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-soft-secondary btn-sm dropdown"
                                                    type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item edit-item-btn"
                                                           href="#showModal<?php echo e($user->id); ?>"
                                                           data-bs-toggle="modal"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
            <div class="modal fade" id="showModal<?php echo e($user->id); ?>" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0">
                            <div class="modal-header bg-soft-info p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close" id="close-modal"></button>
                            </div>
                           <form action="<?php echo e(route('admin.profile-management.update', $user->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="modal-body">
                                    <input type="hidden" id="id-field" />
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="name-field" class="form-label">Name</label>
                                                <input type="text" id="customername-field" class="form-control" placeholder="Enter name" value="<?php echo e($user->name); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="designation-field" class="form-label">Designation</label>
                                                <input type="text" id="designation-field" class="form-control" placeholder="Enter Designation" value="<?php echo e($user->designation); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="designation-field" class="form-label">Trade ID</label>
                                                <input type="text" id="company_name-field" class="form-control" placeholder="Enter Trade ID" value="<?php echo e($user->trade_id); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="email_id-field" class="form-label">Trades</label>
                                                <input type="text" id="email_id-field" class="form-control" placeholder="Enter Trades" value="<?php echo e($user->trade_count); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="wallet_balance-field" class="form-label">Wallet Balance</label>
                                                <input type="text" id="phone-field" class="form-control" placeholder="Enter Wallet Balance" value="<?php echo e($user->balance_amount); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="create_date-field" class="form-label">Create Date</label>
                                                <input type="text" id="lead_score-field" class="form-control" placeholder="Enter Create Date" value="<?php echo e($user->created_at->format('d-m-Y')); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="revenue-field" class="form-label">Revenue</label>
                                                <input type="text" id="lead_score-field" class="form-control" placeholder="Enter Revenue" value="<?php echo e($user->total_amount); ?>">
                                            </div>
                                        </div>
                                       
                                    </div>
                                     <div class="col-lg-12">
                                        <label for="status-field" class="form-label">Status</label>
                                        <select id="status-field" name="status" class="form-select">
                                            <option value="pending" <?php echo e($user->status === 'pending' ? 'selected' : ''); ?>>Pending</option>
                                            <option value="active" <?php echo e($user->status === 'active' ? 'selected' : ''); ?>>Active</option>
                                            <option value="rejected" <?php echo e($user->status === 'rejected' ? 'selected' : ''); ?>>Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="edit-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end add modal-->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                           trigger="loop" colors="primary:#121331,secondary:#08a88a"
                                           style="width:75px;height:75px">
                                </lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 150+ contacts We
                                    did not find any
                                    contacts for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="#">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="#">
                                Next
                            </a>
                        </div>
                    </div>
                </div>

                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close" id="btn-close deleteRecord-close"></button>
                            </div>
                            <div class="modal-body p-5 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                           trigger="loop" colors="primary:#405189,secondary:#f06548"
                                           style="width:90px;height:90px"></lord-icon>
                                <div class="mt-4 text-center">
                                    <h4 class="fs-semibold">You are about to delete a contact ?</h4>
                                    <p class="text-muted fs-14 mb-4 pt-1">Deleting your contact will
                                        remove all of your information from our database.</p>
                                    <div class="hstack gap-2 justify-content-center remove">
                                        <button
                                            class="btn btn-link link-success fw-medium text-decoration-none"
                                            data-bs-dismiss="modal" id="deleteRecord-close"><i
                                                class="ri-close-line me-1 align-middle"></i>
                                            Close</button>
                                        <button class="btn btn-danger" id="delete-record">Yes,
                                            Delete It!!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end delete modal -->

            </div>
        </div>
    </div>

</div><!-- end row -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/libs/list.js/list.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/libs/list.pagination.js/list.pagination.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/pages/crm-contact.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#choices-single-default').on('change', function () {
            var selectedStatus = $(this).val();
            $('.user-row').each(function () {
                var userStatus = $(this).data('status');

                if (selectedStatus === 'All' || selectedStatus === userStatus) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web dev\htdocs\lafkar-main\resources\views/admin/pages/profile-management/index.blade.php ENDPATH**/ ?>