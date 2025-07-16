@extends('layouts.template')

@section('nama_hal')
	Form Edit Data Guru
@endsection

@section('active3')
	active
@endsection

@section('table')
<div class="container">
    <br>
    <a href="/kelas"><button type="button" class="btn-close ti-arrow-left">Back</button></a>
    <h2 class="text-center">Form Edit Data Guru</h2>
    <p class="text-center">silahkan isi data Guru dibawah ini!</p>
    <form method="post" action="/guru/{{$guru->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group center">
            <label for="name">Nama Guru</label>
            <input type="text" class="form-control" value="{{$guru->nm_guru}}" id="name" name="nm_guru" required>
        </div>
        <div class="form-group">
            <label for="email">NIP</label>
            <input type="name" class="form-control" value="{{$guru->nip}}" id="status" name="nip" required>
        </div>
        <div class="form-group">
            <label for="status">Jenis Kelamin</label>
            <select class="form-control" value="{{$guru->jk}}" id="jk" name="jk" required>
                <option value="">-- Jenis Kelamin --</option>
                <option value="Perempuan">Perempuan</option>
                <option value="Laki - Laki">Laki - Laki</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Pangkat</label>
            <input type="name" class="form-control" value="{{$guru->pangkat}}" id="status" name="pangkat" required>
        </div>
        <div class="form-group">
            <label for="email">Alamat</label>
            <input type="name" class="form-control" value="{{$guru->alamat}}" id="status" name="alamat" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>

@endsection