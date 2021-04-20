<?php

namespace App\Http\Controllers;
use DB;
use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswalController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }
    public function create()
    {
        return view('mahasiswa.create');
    }
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect('mahasiswa')->with('msg','Data Berhasil di Simpan');
    }
    public function edit ($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view ('mahasiswa/edit',['mahasiswa' => $mahasiswa]);
    }
        
    public function update(Request $request,$id)
    {
        $mahasiswa= \App\Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa');
    }
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete($mahasiswa);
        return redirect('/mahasiswa');
    }
}
