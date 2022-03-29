@extends('layouts.main')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Mahasiswa
            </div>
        <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('mahasiswa.store') }}" id="myForm">
        @csrf
            <div class="form-group">
                <label for="Nim">Nim</label>
                <input type="text" name="nim" class="form-control" id="nim" aria-describedby="nim" >
            </div>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" >
            </div>
            <div class="form-group">
                <label for="Kelas">Kelas</label>
                <input type="text" name="kelas" class="form-control" id="kelas" aria-describedby="kelas" >
            </div>
            <div class="form-group">
                <label for="Jurusan">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="jurusan" aria-describedby="jurusan" >
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" >
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" >
            </div>
            <div class="form-group">
                <label for="Tanggal_Lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" aria-describedby="tanggal_lahir" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
</div>
@endsection
