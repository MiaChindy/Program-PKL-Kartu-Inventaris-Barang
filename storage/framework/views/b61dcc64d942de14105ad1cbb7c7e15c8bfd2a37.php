<?php $__env->startSection('user', 'active'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-header"><b>Tambah User</b></div>
            <div class="card-body card-block">
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form method="POST" action="/edtUser/<?php echo e($item->id_user); ?>">
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
                    <div class="mb-3">
                        <label for="role" class="form-label">User Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="<?php echo e($item->role); ?>"><?php echo e($item->role); ?></option>
                            <option value="Admin">Admin</option>
                            <option value="Kepala Bidang">Kepala Bidang</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                    <a href="/user" class="btn btn-sm btn-danger">Kembali</a>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/user/edtUser.blade.php ENDPATH**/ ?>