@extends('layout.main')

@section('jabatan', 'active')

@section('content')

<a data-toggle="modal" data-target="#tambah" href="#" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i>
    Tambah Jabatan</a>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Daftar Jabatan</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jabatan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>
                                <a data-toggle="modal" data-target="#edit{{ $item->id_jabatan }}"
                                    class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="/hpsJabatan/{{ $item->id_jabatan }}" class="btn btn-sm btn-danger"><i
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

<!-- Modal Tambah jabatan -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel"><b>Tambah Jabatan</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/tbhJabatan" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        {{-- <label for="id_jabatan" class="form-label">Kode jabatan</label> --}}
                        <input type="hidden" class="form-control" id="kode_jabatan" name="kode_jabatan"
                            value="{{ $kode_kd }}" autofocus readonly>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit jabatan -->
@foreach ($jabatan as $item)
<div class="modal fade" id="edit{{ $item->id_jabatan }}" tabindex="-1" role="dialog" aria-labelledby="editLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel"><b>Edit Jabatan</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/edtJabatan/{{ $item->id_jabatan }}" method="POST">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        {{-- <label for="id_jabatan" class="form-label">Kode jabatan</label> --}}
                        <input type="hidden" class="form-control" id="id_jabatan" name="id_jabatan"
                            value="{{ $item->kode_jabatan }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan"
                            value="{{ $item->jabatan }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection

@section('table')
<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });

</script>
@endsection
