@extends('layout.main')

@section('kibb', 'active')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Tambah KIBB</strong>
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('tbhKIBB') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="barang_id">Nama Barang</label>
                                <select id="barang_id" class="form-control" name="barang_id">
                                    <option selected>Pilih Barang...</option>
                                    @foreach ($barang as $item)
                                        <option value="{{ $item->id_barang }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="merk" class="form-label">Merk</sup></label>
                                    <input type="text" class="form-control" id="merk" name="merk">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="rangka" class="form-label">Rangka</label>
                                    <input type="text" class="form-control" id="rangka" name="rangka">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="mesin" class="form-label">Mesin</label>
                                    <input type="text" class="form-control" id="mesin" name="mesin">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="polisi" class="form-label">Polisi</label>
                                    <input type="text" class="form-control" id="polisi" name="polisi">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="tahun" class="form-label">Tahun</label>
                                    <input type="number" class="form-control" id="tahun" name="tahun">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="jumlah_B" class="form-label">Jumlah Kondisi Baik</label>
                                    <input type="number" class="form-control" id="jumlah_B" name="jumlah_B">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="jumlah_KB" class="form-label">Jumlah Kondisi Kurang Baik</label>
                                    <input type="number" class="form-control" id="jumlah_KB" name="jumlah_KB">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="jumlah_RB" class="form-label">Jumlah Kondisi Rusak Berat</label>
                                    <input type="number" class="form-control" id="jumlah_RB" name="jumlah_RB">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>
                            Tambah</button>
                        <a href="/kibb" class="btn btn-sm btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('table')
    <script type="text/javascript">
        $(document).ready(function() {
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

            oFReader.onload = function(oFREvent) {
                lihatImg.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
