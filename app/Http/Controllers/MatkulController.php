<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use App\Matkul;
use DB;
class MatkulController extends Controller
{
    public function index()
    {
        $matkul = DB::table('matkul')
        ->join('dosen', 'dosen.id', '=', 'matkul.id_dosen')
        ->select('matkul.mata_kuliah', 'matkul.sks', 'matkul.hari', 'matkul.jam', 'dosen.nama_dosen')
        ->get();

    return view('matkul.index', compact('matkul')); 
    }
    public function create()
    {
        $matkul = Matkul::all();
        $dosen = Dosen::all();
        return view('matkul.create', compact('matkul', 'dosen'));
    }
    public function store(Request $request)
    {
        $matkul = new Matkul;
        $matkul->mata_kuliah = $request->mata_kuliah;
        $matkul->sks = $request->sks;
        $matkul->hari = $request->hari;
        $matkul->jam = $request->jam;
        $matkul->id_dosen = $request->get('id_dosen');
        $matkul->save();
        return redirect('matkul')->with('msg','Data Berhasil di Simpan');
    }
    public function edit(Request $request,$id)
    {
        $matkul = Matkul::find($id);
        $dosen= Dosen::find($id);
        return view('matkul.edit', compact(['matkul','dosen']));
    }

    public function update(Request $request, $id)
    {
        $transaksi= \App\Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('/transaksi');
    }
    public function destroy($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete($matkul);
        return redirect('/matkul');
    }
}
