<?php

namespace App\Http\Controllers;

use App\Models\KIBA;
use App\Models\Barang;
use App\Models\Kondisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KIBAController extends Controller
{
    public function index()
    {
        $kiba = KIBA::all();
        $barang = Barang::all();
        $kondisi = Kondisi::all();
        return view('kiba.dftKIBA', compact('kiba','barang','kondisi'));
    }

    public function create()
    {
        $barang = Barang::all();
        $kondisi = Kondisi::all();

        return view('kiba.tbhKIBA', compact('barang', 'kondisi'));
    }

    public function cetak()
    {
        //
        $kiba = KIBA::with('barang','kondisi')->get();
        return view('kiba.ctkKIBA', compact('kiba'));
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
        $kiba = [
            'barang_id'     => $request->input('barang_id'),
            'luas'     => $request->input('luas'),
            'alamat'     => $request->input('alamat'),
            'hak'     => $request->input('hak'),
            'penggunaan'     => $request->input('penggunaan'),
            'harga'     => $request->input('harga'),
            'tahun'     => $request->input('tahun'),
            'jumlah_B'     => $request->input('jumlah_B'),
            'jumlah_KB'     => $request->input('jumlah_KB'),
            'jumlah_RB'     => $request->input('jumlah_RB'),
        ];
        KIBA::create($kiba);
        alert()->success('Berhasil','KIB-A Baru Berhasil Ditambahkan.');
        return back();
        //  $kiba = new kiba;
        //  $kiba->barang_id = $request->barang_id;
        //  $kiba->kon_bangunan = $request->kon_bangunan;
        //  $kiba->luas_lantai = $request->luas_lantai;
        //  $kiba->alamat = $request->alamat;
        //  $kiba->luas = $request->luas;
        //  $kiba->harga = $request->harga;
        //  $kiba->harga = $request->harga;
        //  $kiba->kondisi_id = $request->kondisi_id;

    }

    public function edit($id)
    {
        $kiba = KIBA::where('id_kiba', $id)->get();
        $barang = Barang::where('id_barang','!=', $kiba[0]->barang_id)->get();
        $kondisi = Kondisi::where('id_kondisi', '!=', $kiba[0]->kondisi_id)->get();
        // dd($barang);
        return view('kiba.edtKIBA', compact('kiba', 'barang', 'kondisi'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'barang_id' => 'required',
            'luas' => 'required',
            'alamat' => 'required',
            'hak' =>'required',
            'penggunaan' => 'required',
            'harga' => 'required',
            'tahun' => 'required',
            'jumlah_B' => 'required',
            'jumlah_KB' => 'required',
            'jumlah_RB' => 'required',
        ];

        $validate = $request->validate($rules);

        DB::table('kiba')->where('id_kiba', $id)->update($validate);

        alert()->success('Berhasil','Data KIB-A Berhasil Diupdate.');
        return redirect('/kiba');
    }

    public function destroy($id)
    {
        KIBA::where('id_kiba', $id)->delete();
        alert()->success('Berhasil','KIB-A Berhasil Dihapus.');
        return back();
    }

    public function RB($jumlah_RB)
    {
        KIBA::where('jumlah_RB', $jumlah_RB)->delete('jumlah_RB');
        alert()->success('Berhasil','KIB-A Berhasil Dihapus.');
        return back();
    }
}
