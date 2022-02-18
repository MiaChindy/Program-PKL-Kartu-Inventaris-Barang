<!DOCTYPE html>
<html>

<head>
    <title>Laporan Rekapitulasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td {
            font-size: 9pt;
        }

        table thead tr th {
            text-align: center;
            font-size: 11pt;
        }

        .total th {
            font-size: 11pt;
            color: red;
        }

        hr {
            margin-top: 1px;
            margin-bottom: 30px;
            border: 2px;
            color: rgb(4, 79, 102);
        }

        img {
            height: 100px;
            width: 100px;
        }

    </style>

    <center>
        <img src="images/kantor.png" alt="">
        <h5>Aplikasi Inventori Barang ATK Pada Kantor Desa Klagen
            <br>Laporan Barang Masuk</h4><br>
            <h6>Tanggal : <?php echo e(date('d-M-Y', strtotiMe($dari))); ?> -
                <?php echo e(date('d-M-Y', strtotime($sampai))); ?>

        </h5>
    </center>
    <hr>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Barang Masuk</th>
                <th>Supplier</th>
                <th>Tanggal Masuk</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data_masuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->kode_bm); ?></td>
                <td><?php echo e($item->pemasok->nama); ?></td>
                <td><?php echo e(date('d F Y', strtotime($item->tanggal))); ?></td>
                <td><?php echo e($item->nama); ?></td>
                <td>Rp. <?php echo e(number_format($item->harga)); ?></td>
                <td><?php echo e(number_format($item->jumlah)); ?><?php echo e($item->satuan); ?></td>
                <td>Rp. <?php echo e(number_format($item->tot_pengeluaran)); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr class="total">
                <th colspan="7"><b>Total Pembelian</b></th>
                <th><b>Rp <?php echo e(number_format($data_masuk->SUM('tot_pengeluaran'))); ?></b></th>
            </tr>
        </tbody>
    </table>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\inventaris-barang\resources\views/laporan/laporanBm.blade.php ENDPATH**/ ?>