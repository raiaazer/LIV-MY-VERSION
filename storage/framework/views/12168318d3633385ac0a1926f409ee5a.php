<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>gaming</title>
    <link rel="icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/all.css')); ?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.css')); ?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    <?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->head; } ?>
</head>

<body>
<?php if (!isset($__inertiaSsrDispatched)) { $__inertiaSsrDispatched = true; $__inertiaSsrResponse = app(\Inertia\Ssr\Gateway::class)->dispatch($page); }  if ($__inertiaSsrResponse) { echo $__inertiaSsrResponse->body; } else { ?><div id="app" data-page="<?php echo e(json_encode($page)); ?>"></div><?php } ?>

<!-- jquery plugins here-->
<script src="<?php echo e(asset('assets/js/jquery-1.12.1.min.js')); ?>"></script>
<!-- popper js -->
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<!-- bootstrap js -->
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<!-- easing js -->
<script src="<?php echo e(asset('assets/js/jquery.magnific-popup.js')); ?>"></script>
<!-- swiper js -->
<script src="<?php echo e(asset('assets/js/swiper.min.js')); ?>"></script>
<!-- swiper js -->
<script src="<?php echo e(asset('assets/js/masonry.pkgd.js')); ?>"></script>
<!-- particles js -->
<script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.nice-select.min.js')); ?>"></script>
<!-- slick js -->
<script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/contact.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.ajaxchimp.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.form.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/mail-script.js')); ?>"></script>
<!-- custom js -->
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\LIV MY Version\LIVMYProject\resources\views/app.blade.php ENDPATH**/ ?>