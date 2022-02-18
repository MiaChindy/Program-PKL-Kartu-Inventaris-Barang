@extends('layout.main')

@section('pegawai', 'active')

@section('content')

<a href="{{ url('/tbhPegawai') }}" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Pegawai</a>

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
                        @foreach ($pegawai as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_pegawai }}</td>
                            <td>{{ $item->nip_pegawai }}</td>
                            <td>{{ $item->jabatan_pegawai }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="/edtPegawai/{{ $item->id_pegawai }}" class="btn btn-sm btn-success"><i
                                        class="fa fa-pencil-square-o"></i></a>
                                <a href="/hpsPegawai/{{ $item->id_pegawai }}" class="btn btn-sm btn-danger"><i
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



@endsection

@section('lihat-barang')
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
@endsection
