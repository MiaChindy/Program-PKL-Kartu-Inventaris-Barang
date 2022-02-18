<?php $__env->startSection('dashboard', 'active'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-md-6 col-lg">
        <div class="card">
            <div class="p-0 clearfix">
                <i class="fa fa-briefcase bg-info p-4 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-info mb-0 pt-3"><?php echo e($barang); ?> Barang</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Total Barang</div>
            </div>
        </div>
    </div>
    <!--/.col-->
    <div class="col-md-6 col-lg">
        <div class="card">
            <div class="card-body p-0 clearfix">
                <i class="fa fa-shopping-cart bg-danger p-4 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-danger mb-0 pt-3"><?php echo e($kiba); ?> Barang</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Total KIB - A</div>
            </div>
        </div>
    </div>
    <!--/.col-->
    <div class="col-md-6 col-lg">
        <div class="card">
            <div class="p-0 clearfix">
                <i class="fa fa-dropbox bg-primary p-4 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-primary mb-0 pt-3"><?php echo e($kibb); ?> Barang</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Total KIB - B</div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-6 col-lg">
        <div class="card">
            <div class="p-0 clearfix">
                <i class="fa fa-briefcase bg-info p-4 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-info mb-0 pt-3"><?php echo e($kibc); ?> Barang</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Total KIB - C</div>
            </div>
        </div>
    </div>
    <!--/.col-->
    <div class="col-md-6 col-lg">
        <div class="card">
            <div class="card-body p-0 clearfix">
                <i class="fa fa-shopping-cart bg-danger p-4 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-danger mb-0 pt-3"><?php echo e($kibd); ?> Barang</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Total KIB - D</div>
            </div>
        </div>
    </div>
    <!--/.col-->
    <div class="col-md-6 col-lg">
        <div class="card">
            <div class="p-0 clearfix">
                <i class="fa fa-dropbox bg-primary p-4 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-primary mb-0 pt-3"><?php echo e($kibe); ?> Barang</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Total KIB - E</div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/dashboard.blade.php ENDPATH**/ ?>