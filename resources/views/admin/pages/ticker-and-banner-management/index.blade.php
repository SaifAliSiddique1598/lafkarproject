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
                <form action="{{route('admin.tickers.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-3">
                                <h5 class="fs-15 mb-2">Ticker Message</h5>
                                <input name="message" type="text" required class="form-control" placeholder="Enter Message" id="firstNameinput">
                                @error('message')
                                <span class="text-danger" >{{ $message }}</span>
                                 @enderror
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
                            @foreach($tickers as $ticker)
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                </div>
                            </th>
                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                            <td class="name">
                                {{ $ticker->message }}
                            </td>
                            <td class="">
               <div class="form-check form-switch">
                    <input class="form-check-input ticker-status-toggle" type="checkbox" role="switch" id="SwitchCheck{{$ticker->id}}" data-ticker-id="{{$ticker->id}}" data-ticker-status="{{$ticker->status}}" {{ $ticker->status === 'active' ? 'checked' : '' }}>
                    <label class="form-check-ticker" for="SwitchCheck{{$ticker->id}}">{{ ucfirst($ticker->status) }}</label>
                </div>

                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <a class="dropdown-item edit-item-btn"
                                           href="#showModal-{{$ticker->id}}"
                                           data-bs-toggle="modal"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                    </div>
                                    <div class="flex-grow-1 ms-2 name">
                                        <a class="dropdown-item remove-item-btn"
                                           data-bs-toggle="modal"
                                           href="#deleteRecordModal-{{$ticker->id}}">
                                            <i
                                                 class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Delete
                                       </a>
                                    </div>
                                </div>

                            </td>
                        </tr>

<div class="modal fade zoomIn" id="deleteRecordModal-{{$ticker->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.tickers.destroy', $ticker->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close-deleteRecord"></button>
                </div>
                <div class="modal-body p-5 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                               trigger="loop" colors="primary:#405189,secondary:#f06548"
                               style="width:90px;height:90px"></lord-icon>
                    <div class="mt-4 text-center">
                        <h4 class="fs-semibold">You are about to delete a Ticker ?</h4>
                        <p class="text-muted fs-14 mb-4 pt-1">Deleting your ticker will
                            remove all of your information from our database.</p>
                        <div class="hstack gap-2 justify-content-center remove">
                            <button type="button" class="btn btn-link link-success fw-medium text-decoration-none"  data-bs-dismiss="modal" id="deleteRecord-close">
                            <i class="ri-close-line me-1 align-middle"></i>
                            Close
                        </button>
                            <button type="submit" class="btn btn-danger" id="delete-record">
                                Yes, Delete It!!
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end delete modal -->
                        <div class="modal fade" id="showModal-{{$ticker->id}}" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0">
                            <div class="modal-header bg-soft-info p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close" id="close-modal"></button>
                            </div>
                            <form action="{{ route('admin.tickers.update', $ticker->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <input type="hidden" id="id-field" />
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                            <div>
                                                <label for="name-field" class="form-label"><b>Ticker Message</b></label>
                                                <input type="text" name="message" id="customername-field" class="form-control"  value="{{ $ticker->message }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-success" id="edit-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

 
                        @endforeach
                        </tbody>
                    </table>
                 
                <!--end add modal-->

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
                 <form action="{{route('admin.banners.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                                        <input required="" name="image" class="form-control d-none" value="" id="customer-image-input" type="file"
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
                        @foreach($banners as $banner)
                        <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                </div>
                            </th>
                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                            <td class="">
                                <img src="{{ asset($banner->image ? 'images/banners/' . $banner->image : 'assets/images/no-image.png') }}"
                                     alt="Banner Image" class="avatar-lg img-thumbnail object-cover">
                            </td>
                            <td>
                      <div class="form-check form-switch">
                        <input class="form-check-input banner-status-toggle" type="checkbox" role="switch" id="SwitchCheckBanner{{$banner->id}}" data-banner-id="{{$banner->id}}" data-banner-status="{{$banner->status}}" {{ $banner->status === 'active' ? 'checked' : '' }}>
                        <label class="form-check-banner" for="SwitchCheckBanner{{$banner->id}}">{{ ucfirst($banner->status) }}</label>
                    </div>
                            </td>                           
                             <td>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <a class="dropdown-item edit-item-btn"
                                           href="#imageModel-{{$banner->id}}"
                                           data-bs-toggle="modal"><i
                                                class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                            Edit</a>
                                    </div>
                                    <div class="flex-grow-1 ms-2 name">
                                        <a class="dropdown-item remove-item-btn"
                                           data-bs-toggle="modal"
                                           href="#deleteModal-{{$banner->id}}">
                                            <i
                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                            Delete
                                        </a>
                                    </div>
                                </div>

                            </td>
                        </tr>
<div class="modal fade zoomIn" id="deleteModal-{{$banner->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close deleteRecord-close"></button>
                </div>
                <div class="modal-body p-5 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                               trigger="loop" colors="primary:#405189,secondary:#f06548"
                               style="width:90px;height:90px"></lord-icon>
                    <div class="mt-4 text-center">
                        <h4 class="fs-semibold">You are about to delete a Banner ?</h4>
                        <p class="text-muted fs-14 mb-4 pt-1">Deleting your banner will
                            remove all of your information from our database.</p>
                        <div class="hstack gap-2 justify-content-center remove">
                            <button type="button" class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal" id="deleteRecord-close">
                                <i class="ri-close-line me-1 align-middle"></i>
                                Close
                            </button>
                            <button type="submit" class="btn btn-danger" id="delete-record">
                                Yes, Delete It!!
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end delete modal -->
                <div class="modal fade" id="imageModel-{{$banner->id}}" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header bg-soft-info p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close" id="close-modal"></button>
                                    </div>
                          <form action="{{ route('admin.banners.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                @method('PUT') 
                                <div class="modal-body">
                                    <input type="hidden" id="id-field" />
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                 <label for="image-field" class="form-label"><b>Banner Image</b></label>
                                            <div>
                                                <img src="{{ asset($banner->image ? 'images/banners/' . $banner->image : 'assets/images/no-image.png') }}" alt="Current Image" class="img-thumbnail" style="max-width: 150px; height: auto;">
                                                <input type="file" name="image" id="image-field" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-success" id="edit-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                        @endforeach
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{--  Ticker --}}
<script>
$(document).ready(function () {
    $('.ticker-status-toggle').change(function () {
        const tickerId = $(this).data('ticker-id');
        const statusCurrent = $(this).data('ticker-status');
        const statusNew = statusCurrent === 'inactive' ? 'active' : 'inactive'; 

        $.ajax({
            type: 'POST',
            url: '{{ route("admin.tickers.updateStatus") }}',
            data: {
                tickerId: tickerId,
                newStatus: statusNew,
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.success) {
                    $(`#SwitchCheck${tickerId}`).data('ticker-status', statusNew);
                    $(`#SwitchCheck${tickerId}`).next('.form-check-ticker').text(statusNew.charAt(0).toUpperCase() + statusNew.slice(1));
                    swal("Success!", `Ticker status changed to ${statusNew}`, "success");
                } else {
                    swal("Error!", "Failed to update ticker status", "error");
                }
            },
            error: function () {
                swal("Error!", "Something went wrong", "error");
            }
        });
    });
});

</script>

 {{-- BANNER --}}
<script>
 $(document).ready(function () {
    $('.banner-status-toggle').change(function () {
        const bannerId = $(this).data('banner-id');
        const currentStatus = $(this).data('banner-status');
        const newStatus = currentStatus === 'inactive' ? 'active' : 'inactive'; 

        $.ajax({
            type: 'POST',
            url: '{{ route("admin.banners.updateStatus") }}',
            data: {
                bannerId: bannerId,
                newStatus: newStatus,
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.success) {
                    $(`#SwitchCheckBanner${bannerId}`).data('banner-status', newStatus);
                    $(`#SwitchCheckBanner${bannerId}`).next('.form-check-banner').text(newStatus.charAt(0).toUpperCase() + newStatus.slice(1));
                    swal("Success!", `Banner status changed to ${newStatus}`, "success");
                } else {
                    swal("Error!", "Failed to update banner status", "error");
                }
            },
            error: function () {
                swal("Error!", "Something went wrong", "error");
            }
        });
    });
});

</script>


@endsection
