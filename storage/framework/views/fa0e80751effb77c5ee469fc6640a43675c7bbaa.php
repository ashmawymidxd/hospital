<!-- Title -->
<title><?php echo $__env->yieldContent('title'); ?></title>

<?php echo $__env->yieldContent('css'); ?>
<link href="<?php echo e(URL::asset('Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('Dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('Dashboard/plugins/datatable/css/jquery.dataTables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('Dashboard/plugins/datatable/css/responsive.dataTables.min.css')); ?>" rel="stylesheet">



<?php if(App::getLocale() =='ar'): ?>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(URL::asset('Dashboard/img/brand/favicon.png')); ?>" type="image/x-icon"/>
    <!-- Icons css -->
    <link href="<?php echo e(URL::asset('Dashboard/css/icons.css')); ?>" rel="stylesheet">
    <!--  Custom Scroll bar-->
    <link href="<?php echo e(URL::asset('Dashboard/plugins/mscrollbar/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet"/>
    <!--  Sidebar css -->
    <link href="<?php echo e(URL::asset('Dashboard/plugins/sidebar/sidebar.css')); ?>" rel="stylesheet">
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('Dashboard/css-rtl/sidemenu.css')); ?>">
    <!--- Style css -->
    <link href="<?php echo e(URL::asset('Dashboard/css-rtl/style.css')); ?>" rel="stylesheet">
    <!--- Dark-mode css -->
    <link href="<?php echo e(URL::asset('Dashboard/css-rtl/style-dark.css')); ?>" rel="stylesheet">
    <!---Skinmodes css-->
    <link href="<?php echo e(URL::asset('Dashboard/css-rtl/skin-modes.css')); ?>" rel="stylesheet">

<?php else: ?>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(URL::asset('Dashboard/img/brand/favicon.png')); ?>" type="image/x-icon"/>
    <!-- Icons css -->
    <link href="<?php echo e(URL::asset('Dashboard/css/icons.css')); ?>" rel="stylesheet">
    <!--  Custom Scroll bar-->
    <link href="<?php echo e(URL::asset('Dashboard/plugins/mscrollbar/jquery.mCustomScrollbar.css')); ?>" rel="stylesheet"/>
    <!--  Right-sidemenu css -->
    <link href="<?php echo e(URL::asset('Dashboard/plugins/sidebar/sidebar.css')); ?>" rel="stylesheet">
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('Dashboard/css/sidemenu.css')); ?>">
    <!-- Maps css -->
    <link href="<?php echo e(URL::asset('Dashboard/plugins/jqvmap/jqvmap.min.css')); ?>" rel="stylesheet">
    <!-- style css -->
    <link href="<?php echo e(URL::asset('Dashboard/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('Dashboard/css/style-dark.css')); ?>" rel="stylesheet">
    <!---Skinmodes css-->
    <link href="<?php echo e(URL::asset('Dashboard/css/skin-modes.css')); ?>" rel="stylesheet" />

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\hospital\resources\views/Dashboard/layouts/head.blade.php ENDPATH**/ ?>