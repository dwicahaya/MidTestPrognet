@extends('layout.main')

@section('title', 'Tambah Anggota Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Tambah Data Anggota</h1>
            <hr class="my-4">     

            <form action="/dosen/{{$dosen->id}}/update" method="POST">
                 {{csrf_field()}}
                <div class="form-group">
                    <label for="nama_dosen">Nama Dosen</label>
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Dosen" value="{{ $dosen->nama_dosen }}" required>
                </div>
                <div class="form-group">
                    <label for="NIP">NIP</label>
                    <input type="text" class="form-control" id="NIP" name="NIP" placeholder="NIP Dosen" value="{{ $dosen->NIP }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat </label>
                    <input type="text" class="form-control" id="alamat" name="alamat"  placeholder="Alamat" value="{{ $dosen->alamat}}" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. HP</label>
                    <input type="telp" class="form-control" id="no_telp" name="no_telp" placeholder="NO. HP" value="{{ $dosen->no_telp}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection