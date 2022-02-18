<?php

namespace App\Http\Controllers;

use App\Models\KIBC;
use App\Models\Barang;
use App\Models\Kondisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KIBCController extends Controller
{
    public function index()
    {
        $kibc = KIBC::all();
        $barang = Barang::all();
        $kondisi = Kondisi::all();
        return view('kibc.dftKIBC', compact('kibc','barang','kondisi'));
    }

    public function create()
    {
        $barang = Barang::all();
        $kondisi = Kondisi::all();

        return view('kibc.tbhKIBC', compact('barang', 'kondisi'));
    }

    public function cetak()
    {
        //
        $kibc = KIBC::with('barang','kondisi')->get();
        return view('kibc.ctkKIBC', compact('kibc'));
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
        $kibc = [
            'barang_id'     => $request->input('barang_id'),
            'kon_bangunan'     => $request->input('kon_bangunan'),
            'luas_lantai'     => $request->input('luas_lantai'),
            'alamat'     => $request->input('alamat'),
            'luas'     => $request->input('luas'),
            'harga'     => $request->input('harga'),
            'tahun'     => $request->input('tahun'),
            'jumlah_B'     => $request->input('jumlah_B'),
            'jumlah_KB'     => $request->input('jumlah_KB'),
            'jumlah_RB'     => $request->input('jumlah_RB'),
        ];
        KIBC::create($kibc);
        alert()->success('Berhasil','KIB-C Baru Berhasil Ditambahkan.');
        return back();
        //  $kibc = new KIBC;
        //  $kibc->barang_id = $request->barang_id;
        //  $kibc->kon_bangunan = $request->kon_bangunan;
        //  $kibc->luas_lantai = $request->luas_lantai;
        //  $kibc->alamat = $request->alamat;
        //  $kibc->luas = $request->luas;
        //  $kibc->harga = $request->harga;
        //  $kibc->harga = $request->harga;
        //  $kibc->kondisi_id = $request->kondisi_id;

    }

    public function edit($id)
    {
        $kibc = KIBC::where('id_kibc', $id)->get();
        $barang = Barang::where('id_barang','!=', $kibc[0]->barang_id)->get();
        $kondisi = Kondisi::where('id_kondisi', '!=', $kibc[0]->kondisi_id)->get();
        // dd($barang);
        return view('kibc.edtKIBC', compact('kibc', 'barang', 'kondisi'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'barang_id' => 'required',
            'kon_bangunan' => 'required',
            'luas_lantai' => 'required',
            'alamat' =>'required',
            'luas' => 'required',
            'harga' => 'required',
            'tahun' => 'required',
            'jumlah_B' => 'required',
            'jumlah_KB' => 'required',
            'jumlah_RB' => 'required',
        ];

        $validate = $request->validate($rules);

        DB::table('kibc')->where('id_kibc', $id)->update($validate);

        alert()->success('Berhasil','Data KIB-C Berhasil Diupdate.');
        return redirect('/kibc');
    }

    public function destroy($id)
    {
        KIBC::where('id_kibc', $id)->delete();
        alert()->success('Berhasil','KIB-C Berhasil Dihapus.');
        return back();
    }
}
