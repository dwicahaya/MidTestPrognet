@extends('layout.main')

@section('title', 'Tambah Anggota Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Tambah Data Anggota</h1>
            <hr class="my-4">     

            <form action="/daftar" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_mahasiswa">Nama Mahasiswa</label>
                    <select class="form-control" id="id_mahasiswa" name="id_mahasiswa">
                    @foreach($mahasiswa as $a)
                    <option value="{{$a->id}}"
                    @if($a->id == $daftar->id_mahasiswwa)
                    SELECTED
                    @endif
                    >{{$a->nim}} -- {{$a->nama}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_dosen">Nama Penguji</label>
                    <select class="form-control" id="id_dosen" name="id_dosen">
                    @foreach($dosen as $d)
                    <option value="{{$a->id}}"
                    @if($a->id == $daftar->id_dosen)
                    SELECTED
                    @endif
                    >{{$d--NIP}} -- {{$d->nama_dosen}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ta">Judul TA</label>
                    <input type="text" class="form-control" id="ta" name="ta" placeholder="Judul" value="{{ $daftar->ta}}" required>
                </div>
                <div class="form-group">
                    <label for="tgl_ujian">Tanggal Ujian </label>
                    <input type="date" class="form-control" id="tgl_ujian" name="tgl_ujian"  placeholder="tgl ujian" value="{{ $daftar->tgl_ujian }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection