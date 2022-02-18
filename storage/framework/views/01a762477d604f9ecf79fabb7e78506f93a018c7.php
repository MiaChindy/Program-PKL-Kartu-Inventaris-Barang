<?php $__env->startSection('kibe', 'active'); ?>

<?php $__env->startSection('content'); ?>

<style>
    div.dataTables_wrapper {
        width: 980px;
        margin: 0 auto;
    }

</style>

<a href="/tbhKIBE" class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus"></i> Tambah KIBE</a>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Daftar KIBE</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered display nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Judul</th>
                                <th>Pencipta</th>
                                <th>Harga</th>
                                <th>Tahun</th>
                                <th>Jumlah Kondisi Baik</th>
                                <th>Jumlah Kondisi Kurang Baik</th>
                                <th>Jumlah Kondisi Rusak Berat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kibe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($item->barang->nama); ?></td>
                                <td><?php echo e($item->barang->kode_barang); ?></td>
                                <td><?php echo e($item->judul); ?></td>
                                <td><?php echo e($item->pencipta); ?></td>
                                <td>Rp.<?php echo e(currency($item->harga)); ?></td>
                                <td><?php echo e($item->tahun); ?></td>
                                <td><?php echo e($item->jumlah_B); ?></td>
                                <td><?php echo e($item->jumlah_KB); ?></td>
                                <td><?php echo e($item->jumlah_RB); ?></td>
                                <td>
                                    <a href="/edtKIBE/<?php echo e($item->id_kibe); ?>" class="btn btn-sm btn-success"><i
                                            class="fa fa-pencil-square-o"></i></a>
                                    <a href="/hpsKIBE/<?php echo e($item->id_kibe); ?>" class="btn btn-sm btn-danger"><i
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
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('table'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/kibe/dftKIBE.blade.php ENDPATH**/ ?>