<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }
    public function create()
    {
        return view('dosen.create');
    }
    public function store(Request $request)
    {
        Dosen::create($request->all());
        return redirect('dosen')->with('msg','Data Berhasil di Simpan');
    }
    public function edit ($id)
    {
        $dosen = Dosen::find($id);
        return view ('dosen/edit',['dosen' => $dosen]);
    }
        
    public function update(Request $request,$id)
    {
        $dosen= \App\Dosen::find($id);
        $dosen->update($request->all());
        return redirect('/dosen');
    }
    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete($dosen);
        return redirect('/dosen');
    }

}
