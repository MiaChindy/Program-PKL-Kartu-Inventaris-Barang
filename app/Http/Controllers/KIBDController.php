<?php

namespace App\Http\Controllers;

use App\Models\KIBD;
use App\Models\Barang;
use App\Models\Kondisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KIBDController extends Controller
{
    public function index()
    {
        $kibd = KIBD::all();
        $barang = Barang::all();
        $kondisi = Kondisi::all();
        return view('kibd.dftKIBD', compact('kibd','barang','kondisi'));
    }

    public function create()
    {
        $barang = Barang::all();
        $kondisi = Kondisi::all();

        return view('kibd.tbhKIBD', compact('barang', 'kondisi'));
    }

    public function cetak()
    {
        //
        $kibd = KIBD::with('barang','kondisi')->get();
        return view('kibd.ctkKIBD', compact('kibd'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'barang_id' => 'required',
        //     'kon_bangunan' => 'required',
        //     'panjang_lantai' => 'required',
        //     'lebar' =>'required',
        //     'panjang' => 'required',
        //     'harga' => 'required',
        //     'tahun' => 'required',
        //     'kondisi_id' => 'required',
        // ]);
        // dd($request->all());
        $kibd = [
            'barang_id'     => $request->input('barang_id'),
            'panjang'     => $request->input('panjang'),
            'lebar'     => $request->input('lebar'),
            'luas'     => $request->input('luas'),
            'alamat'     => $request->input('alamat'),
            'status'     => $request->input('status'),
            'harga'     => $request->input('harga'),
            'tahun'     => $request->input('tahun'),
            'jumlah_B'     => $request->input('jumlah_B'),
            'jumlah_KB'     => $request->input('jumlah_KB'),
            'jumlah_RB'     => $request->input('jumlah_RB'),
        ];
        KIBD::create($kibd);
        alert()->success('Berhasil','KIB-D Baru Berhasil Ditambahkan.');
        return back();
        //  $kibd = new kibd;
        //  $kibd->barang_id = $request->barang_id;
        //  $kibd->kon_bangunan = $request->kon_bangunan;
        //  $kibd->panjang_lantai = $request->panjang_lantai;
        //  $kibd->lebar = $request->lebar;
        //  $kibd->panjang = $request->panjang;
        //  $kibd->harga = $request->harga;
        //  $kibd->harga = $request->harga;
        //  $kibd->kondisi_id = $request->kondisi_id;

    }

    public function edit($id)
    {
        $kibd = KIBD::where('id_kibd', $id)->get();
        $barang = Barang::where('id_barang','!=', $kibd[0]->barang_id)->get();
        $kondisi = Kondisi::where('id_kondisi', '!=', $kibd[0]->kondisi_id)->get();
        // dd($barang);
        return view('kibd.edtKIBD', compact('kibd', 'barang', 'kondisi'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'barang_id' => 'required',
            'panjang' => 'required',
            'lebar' => 'required',
            'luas' =>'required',
            'alamat' => 'required',
            'status' => 'required',
            'harga' => 'required',
            'tahun' => 'required',
            'jumlah_B' => 'required',
            'jumlah_KB' => 'required',
            'jumlah_RB' => 'required',
        ];

        $validate = $request->validate($rules);

        DB::table('kibd')->where('id_kibd', $id)->update($validate);

        alert()->success('Berhasil','Data KIB-D Berhasil Diupdate.');
        return redirect('/kibd');
    }

    public function destroy($id)
    {
        KIBD::where('id_kibd', $id)->delete();
        alert()->success('Berhasil','KIB-D Berhasil Dihapus.');
        return back();
    }
}
