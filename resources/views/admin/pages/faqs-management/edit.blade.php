@extends('admin.layouts.master')
@section('title') @lang('translation.projects') @endsection
@section('content')
    @section('css')
    @endsection
@component('components.breadcrumb')
    @slot('li_1') Dashboard @endslot
    @slot('title')FAQS @endslot
@endcomponent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="row project-wrapper">
    <div class="col-xxl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">FAQS Edit</h4>
            </div><!-- end card header -->

            <div class="card-body">
       <form action="{{-- {{ route('admin.faqs-management.update') }} --}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label fs-15 mb-2">Title</label>
                <input name="title" type="text" required class="form-control" placeholder="Enter Title" id="titleInput" value="{{ $faqs->title }}">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label fs-15 mb-2">Image</label>
                <input name="image" type="file" class="form-control" accept="image/png, image/gif, image/jpeg" id="imageInput" onChange="mainImgUrl(this)">
                <img src="" id="mainImg">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="exampleFormControlTextarea5" class="form-label">Content</label>
                <textarea name="content" required class="form-control" id="contentTextarea" rows="3"></textarea>
                @error('content')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</form>

            </div>
        </div>
    </div>

</div><!-- end row -->
 <script type="text/javascript">
    function mainThamUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThmb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

 </script>  
@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/project-create.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
