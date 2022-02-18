<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-header"><b>Profil User</b></div>
            <div class="card-body card-block">
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form method="POST" action="/edtProfil/<?php echo e($item->id_user); ?>">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($item->id_user); ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" value="<?php echo e($item->nama); ?>" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" value="<?php echo e($item->email); ?>" name="email">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-header"><b>Ganti Password</b></div>
            <div class="card-body card-block">
                <form method="POST" action="/edtPassword/<?php echo e($item->id_user); ?>">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="password_lama" class="form-label">Password Lama</label>
                        <input type="password" class="form-control" id="password_lama" name="password_lama">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Ganti</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/user/profil.blade.php ENDPATH**/ ?>