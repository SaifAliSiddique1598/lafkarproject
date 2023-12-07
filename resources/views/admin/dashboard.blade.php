@extends('admin.layouts.master')
@section('title') @lang('translation.projects') @endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboards @endslot
@slot('title') Dashboard @endslot
@endcomponent
<div class="row project-wrapper">
    <div class="col-xxl-8">
        <div class="row">

            @foreach($boxes as $key => $box)
                <div class="col-xl-3">
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    {!!$box['icon']!!}
                                </div>
                                <div class="flex-grow-1 overflow-hidden ms-3">
                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-3">
                                        {{$box['title']}}</p>
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{$box['value']}}">0</span></h4>
                                    </div>
                                    <p class="text-muted text-truncate mb-0">{{$box['des']}}</p>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </div>
            @endforeach
        </div><!-- end row -->

    </div><!-- end col -->

</div><!-- end row -->


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/pages/dashboard-projects.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
