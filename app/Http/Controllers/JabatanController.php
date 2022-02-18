<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        $thn = Carbon::now()->year;
        $var = 'JB';
        $jbtn = Jabatan::count();
        if ($jbtn == 0) {
            $awal = 10001;
            $kode_kd = $var.$thn.$awal;
            // kt2021001
        } else {
           $last = Jabatan::all()->last();
           $awal = (int)substr($last->kode_jabatan, -5) + 1;
           $kode_kd = $var.$thn.$awal;
        }
        return view('jabatan.dftJabatan', compact('jabatan', 'kode_kd'));
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
        $jabatan = $request->validate([
            'kode_jabatan' => 'required',
            'jabatan' => 'required'
        ]);

        Jabatan::create($jabatan);
        alert()->success('Berhasil','Jabatan Baru Berhasil Ditambahkan.');
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
        $validate = $request->validate(['jabatan' => 'required']);
        Jabatan::where('id_jabatan', $id)->update($validate);
        alert()->success('Berhasil','Jabatan Berhasil Diedit.');
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
        Jabatan::where('id_jabatan', $id)->delete();
        alert()->success('Berhasil','Jabatan Berhasil Dihapus.');
        return back();
    }
}
