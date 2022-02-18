<?php $__env->startSection('barang_masuk', 'active'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Barang Masuk</strong>
            </div>
            <div class="card-body card-block">
                <form action="/tbhBarang_masuk" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Kode Barang Masuk</label>
                            <input type="text" class="form-control" id="kode_mb" name="kode_bm" value="<?php echo e($kode_bm); ?>"
                                readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="supplier">Supplier</label>
                            <?php if(isset($id)): ?>
                            <select id="supplier" class="form-control" name="supplier" onchange="supplier_id()">
                                <option selected>Pilih Supplier...</option>
                                <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id_pemasok); ?>"
                                    <?php echo e(($id == $item->id_pemasok) ? 'selected' : ''); ?>>
                                    <?php echo e($item->nama); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php else: ?>
                            <select id="supplier" class="form-control" name="supplier" onchange="supplier_id()">
                                <option selected>Pilih Supplier...</option>
                                <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id_pemasok); ?>"><?php echo e($item->nama); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php endif; ?>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tgl_masuk">Tanggal Masuk</label>
                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
                        </div>
                    </div>

                    <?php if(isset($produk)): ?>
                    <hr>
                    <div class="form-row">
                        <div class="table-responsive">
                            <table id="barang" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td>
                                            <input type="hidden" name="satuan[]" value="<?php echo e($item->satuan); ?>">
                                            <input type="hidden" name="nama[]" value="<?php echo e($item->nama); ?>">
                                            <?php echo e($item->nama); ?>

                                        </td>
                                        <td>
                                            <input type="hidden" name="harga_ambil[]" value="<?php echo e($item->harga_ambil); ?>">
                                            Rp. <?php echo e(number_format($item->harga_ambil)); ?>

                                        </td>
                                        <td>
                                            <input type="hidden" name="id_barang[]" value="<?php echo e($item->id_barang); ?>">
                                            <input type="hidden" name="kategori_id[]" value="<?php echo e($item->kategori_id); ?>">
                                            <input class="form-control" name="jumlah[]" type="number" min="0" value="0">
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-sm btn-primary">Top Up Barang</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('lihat-barang'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#barang').DataTable();
    });

    function supplier_id() {
        var id_pemasok = document.getElementById("supplier").value;
        var url = "<?php echo e(url('list')); ?>" + '/' + id_pemasok;
        window.location.href = url;

    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/barang/barang masuk/tbhBarangMasuk.blade.php ENDPATH**/ ?>