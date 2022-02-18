<?php

namespace App\Http\Controllers;

use App\Models\KIBE;
use App\Models\Barang;
use App\Models\Kondisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KIBEController extends Controller
{
    public function index()
    {
        $kibe = KIBE::all();
        $barang = Barang::all();
        $kondisi = Kondisi::all();
        return view('kibe.dftKIBE', compact('kibe','barang','kondisi'));
    }

    public function create()
    {
        $barang = Barang::all();
        $kondisi = Kondisi::all();

        return view('kibe.tbhKIBE', compact('barang', 'kondisi'));
    }

    public function cetak()
    {
        //
        $kibe = KIBE::with('barang','kondisi')->get();
        return view('kibe.ctkKIBE', compact('kibe'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'barang_id' => 'required',
        //     'kon_bangunan' => 'required',
        //     'judul_lantai' => 'required',
        //     'pencipta' =>'required',
        //     'judul' => 'required',
        //     'harga' => 'required',
        //     'tahun' => 'required',
        //     'kondisi_id' => 'required',
        // ]);
        // dd($request->all());
        $kibe = [
            'barang_id'     => $request->input('barang_id'),
            'judul'     => $request->input('judul'),
            'pencipta'     => $request->input('pencipta'),
            'harga'     => $request->input('harga'),
            'tahun'     => $request->input('tahun'),
            'jumlah_B'     => $request->input('jumlah_B'),
            'jumlah_KB'     => $request->input('jumlah_KB'),
            'jumlah_RB'     => $request->input('jumlah_RB'),
        ];
        KIBE::create($kibe);
        alert()->success('Berhasil','KIB-E Baru Berhasil Ditambahkan.');
        return back();
        //  $kibe = new kibe;
        //  $kibe->barang_id = $request->barang_id;
        //  $kibe->kon_bangunan = $request->kon_bangunan;
        //  $kibe->judul_lantai = $request->judul_lantai;
        //  $kibe->pencipta = $request->pencipta;
        //  $kibe->judul = $request->judul;
        //  $kibe->harga = $request->harga;
        //  $kibe->harga = $request->harga;
        //  $kibe->kondisi_id = $request->kondisi_id;

    }

    public function edit($id)
    {
        $kibe = KIBE::where('id_kibe', $id)->get();
        $barang = Barang::where('id_barang','!=', $kibe[0]->barang_id)->get();
        $kondisi = Kondisi::where('id_kondisi', '!=', $kibe[0]->kondisi_id)->get();
        // dd($barang);
        return view('kibe.edtKIBE', compact('kibe', 'barang', 'kondisi'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'barang_id' => 'required',
            'judul' => 'required',
            'pencipta' => 'required',
            'harga' => 'required',
            'tahun' => 'required',
            'jumlah_B' => 'required',
            'jumlah_KB' => 'required',
            'jumlah_RB' => 'required',
        ];

        $validate = $request->validate($rules);

        DB::table('kibe')->where('id_kibe', $id)->update($validate);

        alert()->success('Berhasil','Data KIB-E Berhasil Diupdate.');
        return redirect('/kibe');
    }

    public function destroy($id)
    {
        KIBE::where('id_kibe', $id)->delete();
        alert()->success('Berhasil','KIB-E Berhasil Dihapus.');
        return back();
    }
}
