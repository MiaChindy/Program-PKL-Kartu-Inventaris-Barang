<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('/dashboard')); ?>"><img style="width: 40px; height: 45px;" class="mr-2"
                    src="<?php echo e(asset('images/Kalsel.png')); ?>" alt=""><b class="mr-4">INVENTORI</b></a>
            <a class="navbar-brand hidden" href="<?php echo e(url('/dashboard')); ?>"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php echo $__env->yieldContent('dashboard'); ?>">
                    <a href="<?php echo e(url('/dashboard')); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown <?php echo $__env->yieldContent('barang_masuk'); ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-download"></i>Master Data</a>
                    <ul class="sub-menu children dropdown-menu">
                        <?php if(auth()->user()->role == 'Admin'): ?>
                        <li><i class="menu-icon fa fa-plus"></i><a href="<?php echo e(url('/user')); ?>">Daftar User</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('/pegawai')); ?>">Daftar Pegawai</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('/kategori')); ?>">Daftar Kategori</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('/kondisi')); ?>">Daftar Kondisi</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('/jabatan')); ?>">Daftar Jabatan</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('/barang')); ?>">Daftar Barang</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php if(auth()->user()->role == 'Admin'): ?>
                <!-- /.menu-title -->
                <h3 class="menu-title">Data Barang</h3><!-- /.menu-title -->
                <li class="<?php echo $__env->yieldContent('kiba'); ?>">
                    <a href="<?php echo e(url('/kiba')); ?>"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-A</a>
                </li>
                <li class="<?php echo $__env->yieldContent('kibb'); ?>">
                    <a href="<?php echo e(url('/kibb')); ?>"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-B</a>
                </li>
                <li class="<?php echo $__env->yieldContent('kibc'); ?>">
                    <a href="<?php echo e(url('/kibc')); ?>"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-C</a>
                </li>
                <li class="<?php echo $__env->yieldContent('kibd'); ?>">
                    <a href="<?php echo e(url('/kibd')); ?>"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-D</a>
                </li>
                <li class="<?php echo $__env->yieldContent('kibe'); ?>">
                    <a href="<?php echo e(url('/kibe')); ?>"> <i class="menu-icon fa fa-suitcase"></i>Daftar KIB-E</a>
                </li>
                <?php endif; ?>
                <h3 class="menu-title">Laporan</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown <?php echo $__env->yieldContent('barang_masuk'); ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-download"></i>Laporan Data KIB</a>
                    <ul class="sub-menu children dropdown-menu">
                        <?php if(auth()->user()->role == 'Admin'): ?>
                        <li><i class="menu-icon fa fa-plus"></i><a href="<?php echo e(url('ctkKIBA')); ?>">KIB - A</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('ctkKIBB')); ?>">KIB - B</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('ctkKIBC')); ?>">KIB - C</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('ctkKIBD')); ?>">KIB - D</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('ctkKIBE')); ?>">KIB - E</a>
                        </li>
                        <?php elseif(auth()->user()->role == 'Kepala Bidang'): ?>
                        <li><i class="menu-icon fa fa-plus"></i><a href="<?php echo e(url('ctkKIBA')); ?>">KIB - A</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('ctkKIBB')); ?>">KIB - B</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('ctkKIBC')); ?>">KIB - C</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('ctkKIBD')); ?>">KIB - D</a>
                        </li>
                        <li><i class="menu-icon fa fa-list-ul"></i><a href="<?php echo e(url('ctkKIBE')); ?>">KIB - E</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/layout/slide.blade.php ENDPATH**/ ?>