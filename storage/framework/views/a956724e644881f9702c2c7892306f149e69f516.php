<?php $__env->startSection('pegawai', 'active'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-header"><b>Edit Pegawai</b></div>
            <div class="card-body card-block">
                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form method="POST" action="<?php echo e(route('uptPegawai', ['id'=>$item->id_pegawai])); ?>">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>

                        
                        <input type="hidden" class="form-control" id="kode_pegawai" name="kode_pegawai"
                            value="<?php echo e($item->kode_pegawai); ?>" readonly>
                    <div class="mb-3">
                        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"
                            value="<?php echo e($item->nama_pegawai); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nip_pegawai" class="form-label">NIP Pegawai</label>
                        <input type="text" class="form-control" id="nip_pegawai" name="nip_pegawai"
                            value="<?php echo e($item->nip_pegawai); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan_pegawai" class="form-label">Jabatan Pegawai</label>
                        <input type="text" class="form-control" id="jabatan_pegawai" name="jabatan_pegawai"
                            value="<?php echo e($item->jabatan_pegawai); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo e($item->email); ?>">
                    </div>
                    <button type="submit" class="btn btn-sm btn-warning">Edit</button>
                    <a href="/pegawai" class="btn btn-sm btn-danger">Kembali</a>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/pegawai/edtPegawai.blade.php ENDPATH**/ ?>