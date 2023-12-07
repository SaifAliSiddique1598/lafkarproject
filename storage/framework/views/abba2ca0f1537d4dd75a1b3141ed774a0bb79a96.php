
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.projects'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('css'); ?>
    <?php $__env->stopSection(); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
    <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
    <?php $__env->slot('title'); ?>FAQS <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="row project-wrapper">
    <div class="col-xxl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">FAQS Management</h4>
            </div><!-- end card header -->

            <div class="card-body">
       <form action="<?php echo e(route('admin.faqs-management.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label class="form-label fs-15 mb-2">Title</label>
                <input name="title" type="text" required class="form-control" placeholder="Enter Title" id="titleInput">
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label class="form-label fs-15 mb-2">Image</label>
                <input name="image" type="file" class="form-control" accept="image/png, image/gif, image/jpeg" id="imageInput" onChange="mainImgUrl(this)">
                <img src="" id="mainImg">
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div>
                <label for="exampleFormControlTextarea5" class="form-label">Content</label>
                <textarea name="content" required class="form-control" id="contentTextarea" rows="3"></textarea>
                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
        <div class="row mt-4">
            <!-- colum #1 -->
<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shink-0">
                        <img src="<?php echo e(asset($faq->image ? 'images/faqs/' . $faq->image : 'assets/images/no-image.png')); ?>" alt="" class="avatar-sm object-cover rounded">
                    </div>
                    <div class="ms-3 flex-grow-1">
                        <a href="pages-profile">
                            <h5 class="mb-1"><?php echo e($faq->title); ?></h5>
                        </a>
                        <p class="text-muted mb-0">about <?php echo e(Carbon\Carbon::parse($faq->created_at)->diffForHumans()); ?></p>
                    </div>
                    <div>
                        <div class="dropdown float-end">
                            <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-more-fill align-middle fs-16"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item view-item-btn" href="#editModel-<?php echo e($faq->id); ?>" data-bs-toggle="modal">Edit</a></li>
                                <li><a class="dropdown-item edit-item-btn" href="#deleteRecordModal-<?php echo e($faq->id); ?>" data-bs-toggle="modal">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="pt-3"><?php echo e($faq->content); ?></p>
            </div>
        </div>
<div class="modal fade zoomIn" id="deleteRecordModal-<?php echo e($faq->id); ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="<?php echo e(route('admin.faqs-management.destroy', $faq->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close-deleteRecord"></button>
                </div>
                <div class="modal-body p-5 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                               trigger="loop" colors="primary:#405189,secondary:#f06548"
                               style="width:90px;height:90px"></lord-icon>
                    <div class="mt-4 text-center">
                        <h4 class="fs-semibold">You are about to delete a FAQS ?</h4>
                        <p class="text-muted fs-14 mb-4 pt-1">Deleting your FAQS will
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
    
 <div class="modal fade" id="editModel-<?php echo e($faq->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header bg-soft-info p-3">
                    <h5 class="modal-title">Faqs Edit</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                    <!-- Modal header -->
                </div>
                <form action="<?php echo e(route('admin.faqs-management.update', $faq->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fs-15 mb-2">Title</label>
                            <input name="title" type="text" class="form-control" value="<?php echo e($faq->title); ?>">
                        </div>
                    <div class="mb-3">
                        <label class="form-label fs-15 mb-2">Image</label>
                        <input name="image" type="file" class="form-control">
                    </div>
                        <div class="mb-3">
                            <img src="<?php echo e(asset($faq->image ? 'images/faqs/' . $faq->image : 'assets/images/no-image.png')); ?>" alt="Current Image" class="img-thumbnail" style="max-width: 150px; height: auto;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fs-15 mb-2">Content</label>
                            <textarea name="content" class="form-control" rows="3"><?php echo $faq->content; ?></textarea>
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
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>

</div><!-- end row -->
 <script type="text/javascript">
    function mainImgUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainImg').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

 </script>  

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/@ckeditor/@ckeditor.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/project-create.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web dev\htdocs\lafkar-main\resources\views/admin/pages/faqs-management/index.blade.php ENDPATH**/ ?>