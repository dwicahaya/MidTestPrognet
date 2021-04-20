@extends('layout.main')

@section('title', 'Tambah Anggota Perpustakaan')

@section('content')
<div class="container">
        <div class="jumbotron">
            <h1 class="display-6">Tambah Data Anggota</h1>
            <hr class="my-4">     

            <form action="/mahasiswa" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Dosen</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="mahasiswa" value="{{ old('nama') }}" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" value="{{ old('nim') }}" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">No. HP</label>
                    <input type="telp" class="form-control" id="no_hp" name="no_hp" placeholder="NO. HP" value="{{ old('no_hp') }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat </label>
                    <input type="text" class="form-control" id="alamat" name="alamat"  placeholder="Alamat" value="{{ old('alamat') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection