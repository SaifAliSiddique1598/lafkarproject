<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $__env->yieldContent('title'); ?> | Lafkar </title>
        <!-- Favicon -->
        <link href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>" rel="shortcut icon" />
        <link href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>" rel="apple-touch-icon">
        <!-- Slider -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <!-- Styling -->
        <link href="<?php echo e(URL::asset('/frontend_assets/css/app.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(URL::asset('/frontend_assets/css/custom-style.css')); ?>" rel="stylesheet" type="text/css" />
        <?php echo $__env->yieldContent('css'); ?>
    </head>
    <body>
        <!-- HEADER SECTION -->
        <?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- CONTENT SECTION -->
            <div>
                <?php echo $__env->yieldContent('content'); ?>
            </div>

        <!-- FOOTER SECTION -->
        <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <script src="<?php echo e(URL::asset('/frontend_assets/js/jquery.js')); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#menuIcon').click(function(){
                    $('#menuBx').toggleClass('active');
                });
                $('#closeMenu').click(function(){
                    $('#menuBx').removeClass('active');
                });
            });
        </script>
        <?php echo $__env->yieldContent('script'); ?>
    </body>

</html>
<?php /**PATH D:\laragon\www\app_view_dash\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>