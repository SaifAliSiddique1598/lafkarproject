@extends('admin.layouts.master')
@section('title') @lang('translation.projects') @endsection
@section('content')
    @section('css')

    @endsection
@component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title')Wallet @endslot
@endcomponent
<div class="row project-wrapper">
    <div class="col-xxl-8">

    </div>

</div><!-- end row -->


@endsection
@section('script')
@endsection
