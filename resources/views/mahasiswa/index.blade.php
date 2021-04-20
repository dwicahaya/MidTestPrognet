@extends('layout.main')
@section('title', 'List Anggota Perpustakaan')
@section('content')


<div class="container">
<div class="jumbotron">
    @if(session('msg'))
        <div class="alert alert-success alert-dismissible fade show mt-2"  role="alert">
    {{session('msg')}}
    
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
    @endif


<h1 class="display-6">List Data Mahasiswa</h1>
<hr class="my-4">     
    <a href="mahasiswa/create" class="btn btn-primary mb-1">Tambah Anggota</a>       
        <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">NIM</th>
            <th scope="col">No HP</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
            <th></th>        
        </tr>
        </thead>
        <tbody>
        @foreach ($mahasiswa as $m)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->no_hp }}</td>
            <td>{{ $m->alamat }}</td>
        <td>
            <a href="/mahasiswa/{{$m->id}}/edit"  class="badge badge-primary">Edit</a>
            <a href="/mahasiswa/{{$m->id}}/delete" class="badge badge-danger">Hapus</a>
        </td>   
        </tr>
    @endforeach
        </tbody>
        </table>


</div>
</div>
@endsection