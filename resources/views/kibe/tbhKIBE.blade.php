@extends('layout.main')

@section('kibe', 'active')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Tambah KIBE</strong>
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('tbhKIBE') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="mb-3">
                                    <label for="pencipta" class="form-label">Pencipta</label>
                                    <input type="text" class="form-control" id="pencipta" name="pencipta">
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
                        <a href="/kibe" class="btn btn-sm btn-danger">Kembali</a>
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
