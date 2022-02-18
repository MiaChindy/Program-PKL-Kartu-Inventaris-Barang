<?php $__env->startSection('barang', 'active'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Edit Barang</strong>
            </div>
            <div class="card-body card-block">
                <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="/edtBarang/<?php echo e($item->id_barang); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="">Kode Barang</label>
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang"
                                value="<?php echo e($item->kode_barang); ?>" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kategori_id">Kategori</label>
                            <select id="kategori_id" class="form-control" name="kategori_id">
                                <option value="<?php echo e($item->kategori_id); ?>"><?php echo e($item->kategori->kategori); ?></option>
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id_kategori); ?>"><?php echo e($item->kategori); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group col-md-4">
                            <label for="nama">Nama Barang</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($item->nama); ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="gambar" class="form-label">Gambar Promosi</label>
                            <?php if($item->gambar): ?>
                            <img class="lihat-gambar img-fluid mb-3 col-sm-5 d-block"
                                src="<?php echo e(asset('Image/' . $item->gambar)); ?>">
                            <?php else: ?>
                            <img class="lihat-gambar img-fluid mb-3 col-sm-5">
                            <?php endif; ?>
                            <input class="  <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" onchange="tampilGambar()" name="gambar" id="gambar">
                            <div class="invalid-feedback">
                                Wajib Diisi | Format file jpg, jpeg, png.
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tgl_beli">Tanggal Pembelian</label>
                            <input type="date" class="form-control" id="tgl_beli" name="tgl_beli" value="<?php echo e($item->tgl_beli); ?>">
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>
                        Edit</button>
                    <a href="/barang" class="btn btn-sm btn-danger">Kembali</a>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->startSection('lihat-gambar'); ?>
<script>
    function tampilGambar() {
        const image = document.querySelector('#gambar');
        const lihatImg = document.querySelector('.lihat-gambar');

        lihatImg.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            lihatImg.src = oFREvent.target.result;
        }
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/barang/edtBarang.blade.php ENDPATH**/ ?>