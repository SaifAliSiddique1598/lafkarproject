
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.projects'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('css'); ?>
        <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <?php $__env->stopSection(); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>Trades Management <?php $__env->endSlot(); ?>
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
                            <span class="text-muted">User List: </span>
                            <select class="form-control mb-0" id="userDropdown">
                                <option value="">Select a user</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                      <div class="col-md-auto ms-auto">
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted">Sort by: </span>
                           <select class="form-control mb-0" data-choices data-choices-search-false id="choices-single-default">
                                <option value="All">All</option>
                                <option value="pending">Pending</option>
                                <option value="booked">Booked</option>
                                <option value="delivered">Delivered</option>
                                <option value="un-delivered">Undelivered</option>
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
                                <th class="sort" data-sort="name" scope="col">Name</th>
                                <th class="sort" data-sort="designation" scope="col">Number</th>
                                <th class="sort" data-sort="" scope="col">Item Code  </th>
                                <th class="sort" data-sort="" scope="col">Booking Price  </th>
                                <th class="sort" data-sort="" scope="col">Address</th>
                                <th class="sort" data-sort="" scope="col">Special Note</th>
                                <th scope="co
                                l">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list form-check-all" id="userTrades">
                            <?php $__currentLoopData = $trades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr class="trade-row" data-status="<?php echo e($trade->status); ?>">
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                    </div>
                                </th>
                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                <td class="name">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 ms-2 name"><?php echo e($trade->name); ?></div>
                                    </div>
                                </td>
                                <td class=""><?php echo e($trade->numbers); ?></td>
                                <td class=""><?php echo e($trade->item_code); ?></td>
                                <td class=""><?php echo e($trade->booking_price); ?></td>
                                <td class=""><?php echo e($trade->address); ?></td>
                                <td class=""><?php echo e($trade->special_note); ?></td>
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
                                                           href="#showModal<?php echo e($trade->id); ?>"
                                                           data-bs-toggle="modal"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
            <div class="modal fade" id="showModal<?php echo e($trade->id); ?>" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0">
                            <div class="modal-header bg-soft-info p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close" id="close-modal"></button>
                            </div>
                           <form action="<?php echo e(route('admin.trades-management.update', $trade->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="modal-body">
                                    <input type="hidden" id="id-field" />
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="name-field" class="form-label">Name</label>
                                                <input type="text" id="customername-field" class="form-control" placeholder="Enter name" value="<?php echo e($trade->name); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="designation-field" class="form-label">Number</label>
                                                <input type="text" id="designation-field" class="form-control" placeholder="Enter Designation" value="<?php echo e($trade->numbers); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="designation-field" class="form-label">Item Code</label>
                                                <input type="text" id="company_name-field" class="form-control" placeholder="Enter Trade ID" value="<?php echo e($trade->item_code); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="email_id-field" class="form-label">Booking Price</label>
                                                <input type="text" id="email_id-field" class="form-control" placeholder="Enter Trades" value="<?php echo e($trade->booking_price); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="wallet_balance-field" class="form-label">Address</label>
                                                <input type="text" id="phone-field" class="form-control" placeholder="Enter Wallet Balance" value="<?php echo e($trade->address); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="create_date-field" class="form-label">Special Note</label>
                                                <input type="text" id="lead_score-field" class="form-control" placeholder="Enter Create Date" value="<?php echo e($trade->special_note); ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <label for="status-field" class="form-label">Status</label>
                                        <select id="status-field" name="status" class="form-select">
                                            <option value="pending" <?php echo e($trade->status === 'pending' ? 'selected' : ''); ?>>Pending</option>
                                            <option value="booked" <?php echo e($trade->status === 'booked' ? 'selected' : ''); ?>>Booked</option>
                                            <option value="delivered" <?php echo e($trade->status === 'delivered' ? 'selected' : ''); ?>>Delivered</option>
                                            <option value="un-delivered" <?php echo e($trade->status === 'un-delivered' ? 'selected' : ''); ?>>UnDelivered</option>
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
            $('.trade-row').each(function () {
                var tradeStatus = $(this).data('status');

                if (selectedStatus === 'All' || selectedStatus === tradeStatus) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>
<script>
    const userDropdown = document.getElementById('userDropdown');
    const userTrades = document.getElementById('userTrades');

    userDropdown.addEventListener('change', function() {
        const selectedUserId = this.value;
        userTrades.innerHTML = ''; // Clear previous content

        // Fetch trades for the selected user via AJAX
        $.ajax({
            url: '/trades-management/get-trades/' + selectedUserId,
            method: 'GET',
            success: function(response) {
                // Handle the received trades and display them in the table
                response.forEach(function(trade) {
                    const newRow = `
                        <tr class="trade-row" data-status="${trade.status}">
                            <!-- Populate your table cells with trade details -->
                            <td>${trade.name}</td>
                            <td>${trade.numbers}</td>
                            <td>${trade.item_code}</td>
                            <!-- Add other trade details here -->
                        </tr>`;
                    userTrades.innerHTML += newRow;
                });
            },
            error: function(error) {
                console.error('Error fetching trades:', error);
            }
        });
    });
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web dev\htdocs\lafkar-main\resources\views/admin/pages/trades-management/index.blade.php ENDPATH**/ ?>