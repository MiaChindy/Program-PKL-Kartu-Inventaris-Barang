<?php

namespace App\Http\Controllers;

use App\Models\KIBB;
use App\Models\Barang;
use App\Models\Kondisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KIBBController extends Controller
{
    public function index()
    {
        $kibb = KIBB::all();
        $barang = Barang::all();
        $kondisi = Kondisi::all();
        return view('kibb.dftKIBB', compact('kibb','barang','kondisi'));
    }

    public function create()
    {
        $barang = Barang::all();
        $kondisi = Kondisi::all();

        return view('kibb.tbhKIBB', compact('barang', 'kondisi'));
    }

    public function cetak()
    {
        //
        $kibb = KIBB::with('barang','kondisi')->get();
        return view('kibb.ctkKIBB', compact('kibb'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'barang_id' => 'required',
        //     'kon_bangunan' => 'required',
        //     'luas_lantai' => 'required',
        //     'alamat' =>'required',
        //     'luas' => 'required',
        //     'harga' => 'required',
        //     'tahun' => 'required',
        //     'kondisi_id' => 'required',
        // ]);
        // dd($request->all());
        $kibb = [
            'barang_id'     => $request->input('barang_id'),
            'merk'     => $request->input('merk'),
            'rangka'     => $request->input('rangka'),
            'mesin'     => $request->input('mesin'),
            'polisi'     => $request->input('polisi'),
            'harga'     => $request->input('harga'),
            'tahun'     => $request->input('tahun'),
            'jumlah_B'     => $request->input('jumlah_B'),
            'jumlah_KB'     => $request->input('jumlah_KB'),
            'jumlah_RB'     => $request->input('jumlah_RB'),
        ];
        KIBB::create($kibb);
        alert()->success('Berhasil','KIB-B Baru Berhasil Ditambahkan.');
        return back();
        //  $kibb = new kibb;
        //  $kibb->barang_id = $request->barang_id;
        //  $kibb->kon_bangunan = $request->kon_bangunan;
        //  $kibb->merk_lantai = $request->merk_lantai;
        //  $kibb->rangka = $request->rangka;
        //  $kibb->merk = $request->merk;
        //  $kibb->harga = $request->harga;
        //  $kibb->harga = $request->harga;
        //  $kibb->kondisi_id = $request->kondisi_id;

    }

    public function edit($id)
    {
        $kibb = KIBB::where('id_kibb', $id)->get();
        $barang = Barang::where('id_barang','!=', $kibb[0]->barang_id)->get();
        $kondisi = Kondisi::where('id_kondisi', '!=', $kibb[0]->kondisi_id)->get();
        // dd($barang);
        return view('kibb.edtKIBB', compact('kibb', 'barang', 'kondisi'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'barang_id' => 'required',
            'merk' => 'required',
            'rangka' => 'required',
            'mesin' =>'required',
            'polisi' => 'required',
            'harga' => 'required',
            'tahun' => 'required',
            'jumlah_B' => 'required',
            'jumlah_KB' => 'required',
            'jumlah_RB' => 'required',
        ];

        $validate = $request->validate($rules);

        DB::table('kibb')->where('id_kibb', $id)->update($validate);

        alert()->success('Berhasil','Data KIB-B Berhasil Diupdate.');
        return redirect('/kibb');
    }

    public function destroy($id)
    {
        KIBB::where('id_kibb', $id)->delete();
        alert()->success('Berhasil','KIB-B Berhasil Dihapus.');
        return back();
    }
}
