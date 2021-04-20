<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Mahasiswa;
use App\Dosen;
use App\daftar;

class DaftrarController extends Controller
{
    public function index()
    {
        $daftar = DB::table('daftar')
        ->join('mahasiswa', 'mahasiswa.id', '=', 'daftar.id_mahasiswa')
        ->join('dosen', 'dosen.id', '=', 'daftar.id_dosen')
        ->select('mahasiswa.nama','mahasiswa.nim', 'dosen.nama_dosen', 'dosen.NIP', 'daftar.ta', 'daftar.tgl_ujian')
        ->get();

    return view('daftar.index', compact('daftar')); 
    }
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        $daftar = Daftar::all();
        return view('daftar.create', compact('mahasiswa', 'dosen', 'daftar'));
    }
    public function store(Request $request)
    {
        $daftar = new Daftar;
        $daftar->id_mahasiswa = $request->get( 'id_mahasiswa' );;
        $daftar->id_dosen = $request->get( 'id_dosen' );
        $daftar->ta = $request->ta;
        $daftar->tgl_ujian = $request->tgl_ujian;
        $daftar->save();
        return redirect('daftar')->with('msg','Data Berhasil di Simpan');
    }
    public function edit($id)
    {
        $daftar = Daftar::find($id);
        $mahasiswa = Mahasiswa::all();
        $dosen= Dosen::all();
        return view('dosen.edit', compact(['daftar','mahasiswa', 'dosen']));
    }

    public function update(Request $request, $id)
    {
        $transaksi= \App\Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('/transaksi');
    }

}
