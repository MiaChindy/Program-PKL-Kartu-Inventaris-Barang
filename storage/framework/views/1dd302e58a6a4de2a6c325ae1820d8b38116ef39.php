<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Inventori</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo e(asset('images/kantor.png')); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('images/kantor.png')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/cs-skin-elastic.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/lib/datatable/dataTables.bootstrap.min.css')); ?>">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/scss/style.css')); ?>">
    <link href="<?php echo e(asset('assets/css/lib/vector-map/jqvmap.min.css')); ?>" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Left Panel -->
    <?php echo $__env->make('layout.slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo e(asset('assets/js/vendor/jquery-2.1.4.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/lib/data-table/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lib/data-table/datatables-init.js')); ?>"></script>

    <?php echo $__env->yieldContent('lihat-gambar'); ?>
    <?php echo $__env->yieldContent('lihat-barang'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/layout/main.blade.php ENDPATH**/ ?>