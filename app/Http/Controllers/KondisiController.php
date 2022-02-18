<?php

namespace App\Http\Controllers;

use App\Models\Kondisi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kondisi = Kondisi::all();
        $thn = Carbon::now()->year;
        $var = 'KD';
        $kds = Kondisi::count();
        if ($kds == 0) {
            $awal = 10001;
            $kode_kd = $var.$thn.$awal;
            // kt2021001
        } else {
           $last = Kondisi::all()->last();
           $awal = (int)substr($last->kode_kondisi, -5) + 1;
           $kode_kd = $var.$thn.$awal;
        }
        return view('kondisi.dftKondisi', compact('kondisi', 'kode_kd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kondisi = $request->validate([
            'kode_kondisi' => 'required',
            'kondisi' => 'required',
            'ket' => 'required'
        ]);

        Kondisi::create($kondisi);
        alert()->success('Berhasil','Kondisi Baru Berhasil Ditambahkan.');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate(['kondisi' => 'required','ket' => 'required']);
        Kondisi::where('id_kondisi', $id)->update($validate);
        alert()->success('Berhasil','Kondisi Berhasil Diedit.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kondisi::where('id_kondisi', $id)->delete();
        alert()->success('Berhasil','kondisi Berhasil Dihapus.');
        return back();
    }
}
