@extends('layouts.template')

@section('nama_hal')
	Form Data Guru
@endsection

@section('active3')
	active
@endsection

@section('table')
<div class="container">
    <br>
    <a href="/guru"><button type="button" class="btn-close ti-arrow-left">Back</button></a>
    <h2 class="text-center">Form Data Kelas</h2>
    <p class="text-center">silahkan isi data siswa dibawah ini!</p>
    <form method="post" action="/guru" enctype="multipart/form-data">
        @csrf
        <div class="form-group center">
            <label for="name">Nama Guru</label>
            <input type="text" class="form-control" id="name" name="nm_guru" required>
        </div>
        <div class="form-group">
            <label for="email">NIP</label>
            <input type="name" class="form-control" id="status" name="nip" required>
        </div>
        <div class="form-group">
            <label for="email">Jenis Kelamin</label>
            <input type="name" class="form-control" id="status" name="jk" required>
        </div>
        <div class="form-group">
            <label for="email">Pangkat</label>
            <input type="name" class="form-control" id="status" name="pangkat" required>
        </div>
        <div class="form-group">
            <label for="email">Alamat</label>
            <input type="name" class="form-control" id="status" name="alamat" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>

@endsection