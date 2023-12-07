@extends('admin.layouts.master')
@section('title') @lang('translation.projects') @endsection
@section('content')
    @section('css')


    @endsection
@component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title')Ticker & Banner @endslot
@endcomponent
<div class="row project-wrapper">
    <div class="col-xxl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Ticker Management</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-3">
                                <h5 class="fs-15 mb-2">Ticker Message</h5>
                                <input type="text" class="form-control" placeholder="Enter Message" id="firstNameinput">
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <br/>
                <div class="table-responsive table-card mb-3 mt-2 p-3">
                    <h5 class="fs-15 mb-2">Ticker Message List </h5>
                    <table class="table align-middle table-nowrap mb-0" id="customerTable">
                        <thead class="table-light">
                        <tr>
                            <th scope="col" style="width: 50px;">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                           id="checkAll" value="option">
                                </div>
                            </th>
                            <th class="sort" data-sort="name" scope="col">Ticker Message</th>
                            <th class="sort" data-sort="designation" scope="col">Status </th>
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
                                This text to show ticker message
                            </td>
                            <td class="">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck1" checked>
                                    <label class="form-check-label" for="SwitchCheck1">Active</label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <a class="dropdown-item edit-item-btn"
                                           href="#showModal"
                                           data-bs-toggle="modal"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                    </div>
                                    <div class="flex-grow-1 ms-2 name">
                                        <a class="dropdown-item remove-item-btn"
                                           data-bs-toggle="modal"
                                           href="#deleteRecordModal">
                                            <i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Delete
                                        </a>
                                    </div>
                                </div>

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
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Banner Management</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="d-flex align-items-center">
                            <div class="text-start">
                                <h5 class="fs-15 mb-2">Banner Image</h5>
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
                                        <div class="avatar-title bg-light">
                                            <img src="{{ URL::asset('assets/images/no-image.png') }}"
                                                 alt="" id="customer-img" class="avatar-md rounded-circle object-cover" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 ms-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <br/>
                <div class="table-responsive table-card mb-3 mt-2 p-3">
                    <h5 class="fs-15 mb-2"> Banner List</h5>
                    <table class="table align-middle table-nowrap mb-0" id="customerTable">
                        <thead class="table-light">
                        <tr>
                            <th scope="col" style="width: 50px;">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                           id="checkAll" value="option">
                                </div>
                            </th>
                            <th class="sort" data-sort="name" scope="col">Banner Preview</th>
                            <th class="sort" data-sort="designation" scope="col">Status </th>
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
                            <td class="">
                                <img src="{{ URL::asset('assets/images/no-image.png') }}"
                                     alt="" id="customer-img" class="avatar-lg img-thumbnail object-cover" >
                            </td>
                            <td class="">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck1" checked>
                                    <label class="form-check-label" for="SwitchCheck1">Active</label>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <a class="dropdown-item edit-item-btn"
                                           href="#showModal"
                                           data-bs-toggle="modal"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                    </div>
                                    <div class="flex-grow-1 ms-2 name">
                                        <a class="dropdown-item remove-item-btn"
                                           data-bs-toggle="modal"
                                           href="#deleteRecordModal">
                                            <i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Delete
                                        </a>
                                    </div>
                                </div>

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
            </div>
        </div>
    </div>

</div><!-- end row -->


@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/list.js/list.js.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/crm-contact.init.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
