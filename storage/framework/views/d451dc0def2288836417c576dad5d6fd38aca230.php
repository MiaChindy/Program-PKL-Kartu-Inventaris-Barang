<?php $__env->startSection('pemasok', 'active'); ?>

<?php $__env->startSection('content'); ?>

<a href="<?php echo e(url('/tbhPemasok')); ?>" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Supplier</a>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Daftar Supplier</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Handphone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pemasok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->nama); ?></td>
                            <td><?php echo e($item->alamat); ?></td>
                            <td><?php echo e($item->email); ?></td>
                            <td><?php echo e($item->telepon); ?></td>
                            <td>
                                <a href="/edtPemasok/<?php echo e($item->id_pemasok); ?>" class="btn btn-sm btn-success"><i
                                        class="fa fa-pencil-square-o"></i></a>
                                <a href="/hpsPemasok/<?php echo e($item->id_pemasok); ?>" class="btn btn-sm btn-danger"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('table'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/pemasok/dftPemasok.blade.php ENDPATH**/ ?>