@extends('layout.main')

@section('kiba', 'active')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Edit KIBA</strong>
            </div>
            <div class="card-body card-block">
                @foreach ($kiba as $item)
                <form action="/edtKIBA/{{ $item->id_kiba }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barang_id">barang</label>
                            <select id="barang_id" class="form-control" name="barang_id">
                                <option value="{{ $item->barang_id }}">{{ $item->barang->nama }}</option>
                                @foreach ($barang as $item)
                                <option value="{{ $item->id_barang }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        @foreach ($kiba as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="luas" class="form-label">Luas<sup>M2</sup></label>
                                <input type="text" class="form-control" id="luas" name="luas" value="{{ $item->luas }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="form-row">
                        @foreach ($kiba as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</sup></label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $item->alamat }}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="hak" class="form-label">Hak</label>
                                <input type="text" class="form-control" id="hak" name="hak" value="{{ $item->hak }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="form-row">
                        @foreach ($kiba as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="penggunaan" class="form-label">Penggunaan</label>
                                <input type="text" class="form-control" id="penggunaan" name="penggunaan" value="{{ $item->penggunaan }}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" value="{{ $item->harga }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="form-row">
                        @foreach ($kiba as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $item->tahun }}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="jumlah_B" class="form-label">Jumlah Kondisi Baik</label>
                                <input type="number" class="form-control" id="jumlah_B" name="jumlah_B" value="{{ $item->jumlah_B }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="form-row">
                        @foreach ($kiba as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="jumlah_KB" class="form-label">Jumlah Kondisi Kurang Baik</label>
                                <input type="number" class="form-control" id="jumlah_KB" name="jumlah_KB" value="{{ $item->jumlah_KB }}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="jumlah_RB" class="form-label">Jumlah Kondisi Rusak Berat</label>
                                <input type="number" class="form-control" id="jumlah_RB" name="jumlah_RB" value="{{ $item->jumlah_RB }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>
                        Edit</button>
                    <a href="/kiba" class="btn btn-sm btn-danger">Kembali</a>
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
