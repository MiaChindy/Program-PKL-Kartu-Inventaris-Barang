<?php $__env->startSection('pegawai', 'active'); ?>

<?php $__env->startSection('content'); ?>

<a href="<?php echo e(url('/tbhPegawai')); ?>" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Pegawai</a>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Daftar Pegawai</strong>
            </div>
            <div class="card-body">
                <table id="data-pegawai" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->nama_pegawai); ?></td>
                            <td><?php echo e($item->nip_pegawai); ?></td>
                            <td><?php echo e($item->jabatan_pegawai); ?></td>
                            <td><?php echo e($item->email); ?></td>
                            <td>
                                <a href="/edtPegawai/<?php echo e($item->id_pegawai); ?>" class="btn btn-sm btn-success"><i
                                        class="fa fa-pencil-square-o"></i></a>
                                <a href="/hpsPegawai/<?php echo e($item->id_pegawai); ?>" class="btn btn-sm btn-danger"><i
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

<?php $__env->startSection('lihat-barang'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#data-pegawai').DataTable();
    });

    function konfirmasi() {
        // console.log('hasil');
        document.getElementById("isi_password").innerHTML = ' <label for="' +
            'password " class="' +
            ' form - label ">Password</label> <' +
            'input type = "password"' +
            'class = "form-control"' +
            'id = "password"' +
            ' name = "password" > ';
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/pegawai/dftPegawai.blade.php ENDPATH**/ ?>