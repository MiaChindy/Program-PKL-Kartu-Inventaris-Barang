@extends('layout.main')

@section('pegawai', 'active')

@section('content')

<div class="row">
    <div class="col-lg">
        <div class="card">
            <div class="card-header"><b>Tambah Pegawai</b></div>
            <div class="card-body card-block">
                <form method="POST" action="{{ route('tbhPegawai') }}">
                    @csrf
                        {{-- <label for="kode_pegawai" class="form-label">Kode Pegawai</label> --}}
                        <input type="hidden" class="form-control" id="kode_pegawai" name="kode_pegawai"
                            value="{{ $kode_pegawai }}" readonly>

                    <div class="mb-3">
                        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="nip_pegawai" class="form-label">NIP Pegawai</label>
                        <input type="text" class="form-control" id="nip_pegawai" name="nip_pegawai">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan_pegawai">Jabatan</label>
                        <select id="jabatan_pegawai" class="form-control" name="jabatan_pegawai">
                            <option selected>Pilih Jabatan...</option>
                            @foreach ($jabatan as $item)
                            <option value="{{ $item->jabatan }}"> {{ $item->jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <a href="/pegawai" class="btn btn-sm btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
