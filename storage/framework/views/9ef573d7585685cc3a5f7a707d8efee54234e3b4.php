<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.projects'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('css'); ?>
        <link href="<?php echo e(URL::asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <?php $__env->stopSection(); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>Traders Request <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row project-wrapper">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center flex-wrap gap-2">
                    <div class="flex-grow-1">
                        <button class="btn btn-info add-btn" data-bs-toggle="modal"
                                data-bs-target="#showModal"><i
                                class="ri-add-fill me-1 align-bottom"></i> Add Traders Request</button>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="hstack text-nowrap gap-2">
                            <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                            <button class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#addmembers"><i
                                    class="ri-filter-2-line me-1 align-bottom"></i> Filters</button>
                            <button class="btn btn-soft-success">Import</button>
                            <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown"
                                    aria-expanded="false" class="btn btn-soft-info"><i
                                    class="ri-more-2-fill"></i></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                <li><a class="dropdown-item" href="#">All</a></li>
                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                <li><a class="dropdown-item" href="#">Last Year</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <select class="form-control mb-0" data-choices data-choices-search-false
                                    id="choices-single-default">
                                <option value="Name">Name</option>
                                <option value="Company">Company</option>
                                <option value="Lead">Lead</option>
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
                                <th class="sort" data-sort="" scope="col">Request By</th>
                                <th class="sort" data-sort="" scope="col">Subject </th>
                                <th class="sort" data-sort="" scope="col">Assignee </th>
                                <th class="sort" data-sort="" scope="col">Priority </th>
                                <th class="sort" data-sort="" scope="col">Status</th>
                                <th class="sort" data-sort="" scope="col">Create Date</th>
                                <th class="sort" data-sort="" scope="col">Due Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list form-check-all">
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                    </div>
                                </th>
                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                <td class="name">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="<?php echo e(URL::asset('assets/images/users/avatar-4.jpg')); ?>"
                                                 alt="" class="avatar-xs rounded-circle" >
                                        </div>
                                        <div class="flex-grow-1 ms-2 name">Margeret V. Ligon</div>
                                    </div>
                                </td>
                                <td class="">A new rating has been received</td>
                                <td class="">
                                    <div class="">Joy Root</div>
                                </td>
                                <td class="">
                                    <div class="badge badge-soft-secondary"> Success</div>
                                </td>
                                <td class="">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck1" checked>
                                        <label class="form-check-label" for="SwitchCheck1">Active</label>
                                    </div>
                                </td>
                                <td class="">10/11/2023</td>
                                <td class="">30/11/2023</td>
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
                                                    <li><a class="dropdown-item view-item-btn"
                                                           href="javascript:void(0);"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"
                                                           href="#showModal"
                                                           data-bs-toggle="modal"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                           data-bs-toggle="modal"
                                                           href="#deleteRecordModal">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                    </div>
                                </th>
                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                <td class="name">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="<?php echo e(URL::asset('assets/images/users/avatar-8.jpg')); ?>"
                                                 alt="" class="avatar-xs rounded-circle" >
                                        </div>
                                        <div class="flex-grow-1 ms-2 name">Erwin E. Brown</div>
                                    </div>
                                </td>
                                <td class="">Your application has been received</td>
                                <td class="">
                                    <div class="">John Doe</div>
                                </td>
                                <td class="">
                                    <div class="badge badge-soft-warning"> Warning</div>
                                </td>
                                <td class="">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck1">
                                        <label class="form-check-label" for="SwitchCheck1">Deactive</label>
                                    </div>
                                </td>
                                <td class="">15/9/2023</td>
                                <td class="">18/10/2023</td>
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
                                                    <li><a class="dropdown-item view-item-btn"
                                                           href="javascript:void(0);"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"
                                                           href="#showModal"
                                                           data-bs-toggle="modal"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                           data-bs-toggle="modal"
                                                           href="#deleteRecordModal">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                    </div>
                                </th>
                                <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                <td class="name">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="<?php echo e(URL::asset('assets/images/users/avatar-6.jpg')); ?>"
                                                 alt="" class="avatar-xs rounded-circle" >
                                        </div>
                                        <div class="flex-grow-1 ms-2 name">George Lianes</div>
                                    </div>
                                </td>
                                <td class="">Support Theme</td>
                                <td class="">
                                    <div class="">John Doe</div>
                                </td>
                                <td class="">
                                    <div class="badge badge-soft-danger">Danger</div>
                                </td>
                                <td class="">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck1" checked>
                                        <label class="form-check-label" for="SwitchCheck1">Active</label>
                                    </div>
                                </td>
                                <td class="">02/10/2023</td>
                                <td class="">22/12/2023</td>
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
                                                    <li><a class="dropdown-item view-item-btn"
                                                           href="javascript:void(0);"><i
                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                            View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"
                                                           href="#showModal"
                                                           data-bs-toggle="modal"><i
                                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                            Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn"
                                                           data-bs-toggle="modal"
                                                           href="#deleteRecordModal">
                                                            <i
                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
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
                <div class="modal fade" id="showModal" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0">
                            <div class="modal-header bg-soft-info p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close" id="close-modal"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <input type="hidden" id="id-field" />
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <div class="position-relative d-inline-block">
                                                    <div class="position-absolute  bottom-0 end-0">
                                                        <label for="customer-image-input" class="mb-0"  data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                            <div class="avatar-xs cursor-pointer">
                                                                <div class="avatar-title bg-light border rounded-circle text-muted">
                                                                    <i class="ri-image-fill"></i>
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <input class="form-control d-none" value="" id="customer-image-input" type="file"
                                                               accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                    <div class="avatar-lg p-1">
                                                        <div class="avatar-title bg-light rounded-circle">
                                                            <img src="<?php echo e(URL::asset('assets/images/users/user-dummy-img.jpg')); ?>"
                                                                 alt="" id="customer-img" class="avatar-md rounded-circle object-cover" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="name-field" class="form-label">Name</label>
                                                <input type="text" id="customername-field" class="form-control" placeholder="Enter name" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="designation-field" class="form-label">Designation</label>
                                                <input type="text" id="designation-field" class="form-control" placeholder="Enter Designation" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="designation-field" class="form-label">Trade ID</label>
                                                <input type="text" id="company_name-field" class="form-control" placeholder="Enter Trade ID" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="email_id-field" class="form-label">Trades</label>
                                                <input type="text" id="email_id-field" class="form-control" placeholder="Enter Trades" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="wallet_balance-field" class="form-label">Wallet Balance</label>
                                                <input type="text" id="phone-field" class="form-control" placeholder="Enter Wallet Balance" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="create_date-field" class="form-label">Create Date</label>
                                                <input type="text" id="lead_score-field" class="form-control" placeholder="Enter Create Date" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="revenue-field" class="form-label">Revenue</label>
                                                <input type="text" id="lead_score-field" class="form-control" placeholder="Enter Revenue" required />
                                            </div>
                                        </div>












                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="add-btn">Add Contact</button>
                                        <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end add modal-->

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\app_view_dash\resources\views/admin/pages/traders-request.blade.php ENDPATH**/ ?>