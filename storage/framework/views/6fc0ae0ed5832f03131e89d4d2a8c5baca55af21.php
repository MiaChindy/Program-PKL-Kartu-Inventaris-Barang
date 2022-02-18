<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan KIB - B</title>
</head>
<table align="center">
    <tr>
        <td><img src="<?php echo e('assets/img/Logo_provinsi.png'); ?>" width="90" height="120"></td>
        <td>
            <center>
                <font size="5"><b>PEMERINTAH PROVINSI KALIMANTAN SELATAN</b></font><br>
                <font size="7"><b>DINAS KEHUTANAN</b></font><br>
                <font size="2">
                    <center> Jalan : A. Yani Timur No.14 Telpon (0511) 777534 Fax (0511) 772234 Email :
                        dishutkalsel01@gmail.com</center>
                </font>
            </center>
            <font size="2">
                <center>Website : <u>www.dishut.kalselprov.go.id</u> Kotak Pos 1030 Kode Pos. 70714</center>
            </font>
            </center>
            <font size="4">
                <center><b>BANJARBARU</b></center>
            </font>
            </center>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <hr>
        </td>
    </tr>
</table>
<br>
<table align="center">
    
</table>
<div class="form-group">
    <br>
    <font>
        <center>Laporan Kartu Inventaris Barang - B</center>
    </font>
    <br>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Merk</th>
                <th>Rangka</th>
                <th>Mesin</th>
                <th>Polisi</th>
                <th>Harga</th>
                <th>Tahun</th>
                <th>Jumlah Kondisi Baik</th>
                <th>Jumlah Kondisi Kurang Baik</th>
                <th>Jumlah Kondisi Rusak Berat</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $kibb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->barang->kode_barang); ?></td>
                    <td><?php echo e($item->barang->nama); ?></td>
                    <td><?php echo e($item->merk); ?></td>
                    <td><?php echo e($item->rangka); ?></td>
                    <td><?php echo e($item->mesin); ?></td>
                    <td><?php echo e($item->polisi); ?></td>
                    <td>Rp.<?php echo e(currency($item->harga)); ?></td>
                    <td><?php echo e($item->tahun); ?></td>
                    <td><?php echo e($item->jumlah_B); ?></td>
                    <td><?php echo e($item->jumlah_KB); ?></td>
                    <td><?php echo e($item->jumlah_RB); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<br>
<br>
<br>
<table align="right">
    <tr>
        <td><b>
                <center>KEPALA DINAS</center>
            </b></td>
    </tr>
    <tr>
        <td height="80"></td>
    </tr>
    <tr>
        <td>
            <center><b><u>Hj. FATHIMATUZZAHRA, S.Hut, MP</u></b><br>Pembina TK.I IV.B</center>
        </td>
    </tr>
    <tr>
        <td>
            <center>NIP. 19680519 199903 2 001</center>
        </td>
    </tr>
</table>

<body>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/kibb/ctkKIBB.blade.php ENDPATH**/ ?>