@extends('layout.main')

@section('barang', 'active')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Edit Barang</strong>
            </div>
            <div class="card-body card-block">
                @foreach ($barang as $item)
                <form action="/edtBarang/{{ $item->id_barang }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="">Kode Barang</label>
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang"
                                value="{{ $item->kode_barang }}" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kategori_id">Kategori</label>
                            <select id="kategori_id" class="form-control" name="kategori_id">
                                <option value="{{ $item->kategori_id }}">{{ $item->kategori->kategori }}</option>
                                @foreach ($kategori as $item)
                                <option value="{{ $item->id_kategori }}">{{ $item->kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        @foreach ($barang as $item)
                        <div class="form-group col-md-4">
                            <label for="nama">Nama Barang</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="gambar" class="form-label">Gambar Promosi</label>
                            @if ($item->gambar)
                            <img class="lihat-gambar img-fluid mb-3 col-sm-5 d-block"
                                src="{{ asset('Image/' . $item->gambar) }}">
                            @else
                            <img class="lihat-gambar img-fluid mb-3 col-sm-5">
                            @endif
                            <input class="  @error('gambar') is-invalid
                            @enderror" type="file" onchange="tampilGambar()" name="gambar" id="gambar">
                            <div class="invalid-feedback">
                                Wajib Diisi | Format file jpg, jpeg, png.
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tgl_beli">Tanggal Pembelian</label>
                            <input type="date" class="form-control" id="tgl_beli" name="tgl_beli" value="{{ $item->tgl_beli }}">
                        </div>
                    </div>

                    @endforeach
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>
                        Edit</button>
                    <a href="/barang" class="btn btn-sm btn-danger">Kembali</a>
                </form>
                @endforeach
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

@section('lihat-gambar')
<script>
    function tampilGambar() {
        const image = document.querySelector('#gambar');
        const lihatImg = document.querySelector('.lihat-gambar');

        lihatImg.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            lihatImg.src = oFREvent.target.result;
        }
    }

</script>
@endsection
