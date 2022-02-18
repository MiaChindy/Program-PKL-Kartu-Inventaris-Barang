@extends('layout.main')

@section('kibd', 'active')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Edit KIBD</strong>
            </div>
            <div class="card-body card-block">
                @foreach ($kibd as $item)
                <form action="/edtKIBD/{{ $item->id_kibd }}" method="POST" enctype="multipart/form-data">
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
                        @foreach ($kibd as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $item->alamat }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="form-row">
                        @foreach ($kibd as $item)
                        <div class="form-group col-md-4">
                            <div class="mb-3">
                                <label for="panjang" class="form-label">Panjang</label>
                                <input type="text" class="form-control" id="panjang" name="panjang" value="{{ $item->panjang }}">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="mb-3">
                                <label for="lebar" class="form-label">Lebar</label>
                                <input type="text" class="form-control" id="lebar" name="lebar" value="{{ $item->lebar }}">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="mb-3">
                                <label for="luas" class="form-label">Luas</label>
                                <input type="text" class="form-control" id="luas" name="luas" value="{{ $item->luas }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="form-row">
                        @foreach ($kibd as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ $item->status }}">
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
                        @foreach ($kibd as $item)
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
                        @foreach ($kibd as $item)
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
                    <a href="/kibd" class="btn btn-sm btn-danger">Kembali</a>
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
