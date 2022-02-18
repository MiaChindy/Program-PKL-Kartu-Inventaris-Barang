@extends('layout.main')

@section('kibe', 'active')

@section('content')

<style>
    div.dataTables_wrapper {
        width: 980px;
        margin: 0 auto;
    }

</style>

<a href="/tbhKIBE" class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus"></i> Tambah KIBE</a>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Daftar KIBE</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered display nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Judul</th>
                                <th>Pencipta</th>
                                <th>Harga</th>
                                <th>Tahun</th>
                                <th>Jumlah Kondisi Baik</th>
                                <th>Jumlah Kondisi Kurang Baik</th>
                                <th>Jumlah Kondisi Rusak Berat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kibe as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->barang->nama }}</td>
                                <td>{{ $item->barang->kode_barang }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->pencipta }}</td>
                                <td>Rp.{{currency($item->harga)}}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->jumlah_B }}</td>
                                <td>{{ $item->jumlah_KB }}</td>
                                <td>{{ $item->jumlah_RB }}</td>
                                <td>
                                    <a href="/edtKIBE/{{ $item->id_kibe }}" class="btn btn-sm btn-success"><i
                                            class="fa fa-pencil-square-o"></i></a>
                                    <a href="/hpsKIBE/{{ $item->id_kibe }}" class="btn btn-sm btn-danger"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('table')
<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });

</script>
@endsection
