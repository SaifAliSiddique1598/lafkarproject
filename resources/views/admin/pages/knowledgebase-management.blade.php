@extends('admin.layouts.master')
@section('title') @lang('translation.projects') @endsection
@section('content')
    @section('css')
    @endsection
@component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title')Knowledgebase @endslot
@endcomponent
<div class="row project-wrapper">
    <div class="col-xxl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Knowledgebase Management</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label fs-15 mb-2">Create Post</label>
                                <div id="ckeditor-classic">
                                    <p>It will be as simple as occidental in fact, it will be Occidental. To an English person, it
                                        will seem like simplified English, as a skeptical Cambridge friend of mine told me what
                                        Occidental is. The European languages are members of the same family. Their separate
                                        existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <ul>
                                        <li>Product Design, Figma (Software), Prototype</li>
                                        <li>Four Dashboards : Ecommerce, Analytics, Project etc.</li>
                                        <li>Create calendar, chat and email app pages.</li>
                                        <li>Add authentication pages</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <!-- colum #1 -->
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="{{URL::asset('assets/images/nft/img-02.jpg')}}" alt="" class="avatar-sm object-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="pages-profile">
                                    <h5 class="mb-1">Timothy Smith</h5>
                                </a>
                                <p class="text-muted mb-0">about 2 min ago</p>
                            </div>
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#" data-bs-toggle="modal">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="pt-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut delectus dolor dolorem explicabo nobis provident
                            quidem reiciendis, sed sequi, similique suscipit? Dignissimos earum error explicabo hic magni quos, rerum.
                        </p>
                    </div>
                </div>
            </div>
            <!-- colum #2 -->
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="avatar-sm object-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="pages-profile">
                                    <h5 class="mb-1">Alexis Clarke</h5>
                                </a>
                                <p class="text-muted mb-0">about 1 hour ago</p>
                            </div>
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#" data-bs-toggle="modal">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="pt-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut delectus dolor dolorem explicabo nobis provident
                            quidem reiciendis, sed sequi, similique suscipit? Dignissimos earum error explicabo hic magni quos, rerum.
                        </p>
                    </div>
                </div>
            </div>
            <!-- colum #3 -->
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-shink-0">
                                <img src="{{URL::asset('assets/images/users/avatar-8.jpg')}}" alt="" class="avatar-sm object-cover rounded">
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <a href="pages-profile">
                                    <h5 class="mb-1">Michael Morris</h5>
                                </a>
                                <p class="text-muted mb-0">3 days ago</p>
                            </div>
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);">Share</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#" data-bs-toggle="modal">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="pt-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut delectus dolor dolorem explicabo nobis provident
                            quidem reiciendis, sed sequi, similique suscipit? Dignissimos earum error explicabo hic magni quos, rerum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- end row -->


@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/project-create.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
