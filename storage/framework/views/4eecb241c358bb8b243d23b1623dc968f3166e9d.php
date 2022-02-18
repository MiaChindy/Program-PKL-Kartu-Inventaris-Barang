<?php $__env->startSection('barang_masuk', 'active'); ?>

<?php $__env->startSection('content'); ?>

<style>
    div.dataTables_wrapper {
        width: 980px;
        margin: 0 auto;
    }

</style>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Daftar Barang Masuk</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered display nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kategori</th>
                                <th>Supplier</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total Pengeluaran</th>
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $barang_masuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->kategori->kategori); ?></td>
                                <td><?php echo e($item->pemasok->nama); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td>Rp. <?php echo e(number_format($item->harga)); ?></td>
                                <td><?php echo e(number_format($item->jumlah)); ?> <?php echo e($item->satuan); ?></td>
                                <td>Rp. <?php echo e(number_format($item->tot_pengeluaran)); ?></td>
                                <td><?php echo e(date('d F Y', strtotime($item->tanggal))); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
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

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/barang/barang masuk/dftBarangMasuk.blade.php ENDPATH**/ ?>