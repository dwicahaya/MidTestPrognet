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


<h1 class="display-6">Pendaftaran Tugas Akhir</h1>
<hr class="my-4">     
    <a href="daftar/create" class="btn btn-primary mb-1">Tambah Anggota</a>       
        <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama Penguji</th>
            <th scope="col">NIP</th>
            <th scope="col">Judul TA</th>
            <th scope="col">Tanggal Ujian</th>
            <th scope="col">Aksi</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
    @foreach ($daftar as $d)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->nim }}</td>
            <td>{{ $d->nama_dosen }}</td>
            <td>{{ $d->NIP }}</td>
            <td>{{ $d->ta }}</td>
            <td>{{ $d->tgl_ujian }}</td>
        <td>
        <a href="/daftar/create" class="badge badge-primary">Edit</a>
            <a href="" class="badge badge-danger">Hapus</a>
        </td>   
        </tr>
    @endforeach
        </tbody>
        </table>


</div>
</div>
@endsection