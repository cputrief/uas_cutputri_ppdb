@extends('layouts.template')

@section('nama_hal')
	Form Data Siswa
@endsection

@section('active5')
	active
@endsection

@section('table')
<div class="container">
    <br>
    <a href="/siswa"><button type="button" class="btn-close ti-arrow-left">Back</button></a>
    <h2 class="text-center">Form Data Siswa</h2>
    <p class="text-center">silahkan isi data siswa dibawah ini!</p>
    <form method="post" action="/siswa" enctype="multipart/form-data">
        @csrf
        <div class="form-group center">
            <label for="name">NISN</label>
            <input type="text" class="form-control" id="name" name="nisn" required>
        </div>
        <div class="form-group">
            <label for="email">Nama Siswa</label>
            <input type="name" class="form-control" id="status" name="nm_siswa" required>
        </div>
        <div class="form-group">
            <label for="email">Jenis Kelamin</label>
            <input type="name" class="form-control" id="status" name="jk" required>
        </div>
        <div class="form-group">
            <label for="email">Alamat</label>
            <input type="name" class="form-control" id="status" name="alamat" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>

@endsection