@extends('layout.main')

@section('kibb', 'active')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Edit KIBB</strong>
            </div>
            <div class="card-body card-block">
                @foreach ($kibb as $item)
                <form action="/edtKIBB/{{ $item->id_kibb }}" method="POST" enctype="multipart/form-data">
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
                        @foreach ($kibb as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="merk" class="form-label">Merk</label>
                                <input type="text" class="form-control" id="merk" name="merk" value="{{ $item->merk }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="form-row">
                        @foreach ($kibb as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="rangka" class="form-label">Rangka</sup></label>
                                <input type="text" class="form-control" id="rangka" name="rangka" value="{{ $item->rangka }}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="mesin" class="form-label">Mesin</label>
                                <input type="text" class="form-control" id="mesin" name="mesin" value="{{ $item->mesin }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="form-row">
                        @foreach ($kibb as $item)
                        <div class="form-group col-md-6">
                            <div class="mb-3">
                                <label for="polisi" class="form-label">Polisi</label>
                                <input type="text" class="form-control" id="polisi" name="polisi" value="{{ $item->polisi }}">
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
                        @foreach ($kibb as $item)
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
                        @foreach ($kibb as $item)
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
                    <a href="/kibb" class="btn btn-sm btn-danger">Kembali</a>
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
