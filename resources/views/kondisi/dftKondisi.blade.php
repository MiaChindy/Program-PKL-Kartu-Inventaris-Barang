@extends('layout.main')

@section('kondisi', 'active')

@section('content')

<a data-toggle="modal" data-target="#tambah" href="#" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i>
    Tambah Kondisi</a>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Daftar Kondisi</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kondisi</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kondisi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kondisi }}</td>
                            <td>{{ $item->ket }}</td>
                            <td>
                                <a data-toggle="modal" data-target="#edit{{ $item->id_kondisi }}"
                                    class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="/hpsKondisi/{{ $item->id_kondisi }}" class="btn btn-sm btn-danger"><i
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

<!-- Modal Tambah Kondisi -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true"
    data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel"><b>Tambah Kondisi</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/tbhKondisi" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        {{-- <label for="id_kondisi" class="form-label">Kode Kondisi</label> --}}
                        <input type="hidden" class="form-control" id="kode_kondisi" name="kode_kondisi"
                            value="{{ $kode_kd }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="kondisi" class="form-label">Kondisi</label>
                        <input type="text" class="form-control" id="kondisi" name="kondisi">
                    </div>
                    <div class="mb-3">
                        <label for="ket" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="ket">
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

<!-- Modal Edit Kondisi -->
@foreach ($kondisi as $item)
<div class="modal fade" id="edit{{ $item->id_kondisi }}" tabindex="-1" role="dialog" aria-labelledby="editLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel"><b>Edit Kondisi</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/edtKondisi/{{ $item->id_kondisi }}" method="POST">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        {{-- <label for="id_kondisi" class="form-label">Kode Kondisi</label> --}}
                        <input type="hidden" class="form-control" id="id_kondisi" name="id_kondisi"
                            value="{{ $item->kode_kondisi }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="kondisi" class="form-label">Kondisi</label>
                        <input type="text" class="form-control" id="kondisi" name="kondisi"
                            value="{{ $item->kondisi }}">
                    </div>
                    <div class="mb-3">
                        <label for="ket" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket" name="ket"
                            value="{{ $item->ket }}">
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
