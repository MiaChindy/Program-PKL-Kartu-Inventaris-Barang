<?php $__env->startSection('pegawai', 'active'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-header"><b>Tambah Pegawai</b></div>
            <div class="card-body card-block">
                <form method="POST" action="<?php echo e(route('tbhPegawai')); ?>">
                    <?php echo csrf_field(); ?>
                        
                        <input type="hidden" class="form-control" id="kode_pegawai" name="kode_pegawai"
                            value="<?php echo e($kode_pegawai); ?>" readonly>

                    <div class="mb-3">
                        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="nip_pegawai" class="form-label">NIP Pegawai</label>
                        <input type="text" class="form-control" id="nip_pegawai" name="nip_pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan_pegawai">Jabatan</label>
                        <select id="jabatan_pegawai" class="form-control" name="jabatan_pegawai">
                            <option selected>Pilih Jabatan...</option>
                            <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->jabatan); ?>"> <?php echo e($item->jabatan); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <a href="/pegawai" class="btn btn-sm btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/pegawai/tbhPegawai.blade.php ENDPATH**/ ?>