@extends('layouts.template')

@section('nama_hal')
	Form Edit Data Siswa
@endsection

@section('active2')
	active
@endsection

@section('table')
<div class="container">
    <br>
    <a href="/kelas"><button type="button" class="btn-close ti-arrow-left">Back</button></a>
    <h2 class="text-center">Form Edit Data Kelas</h2>
    <p class="text-center">silahkan isi data siswa dibawah ini!</p>
    <form method="post" action="/kelas/{{$kelas->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group center">
            <label for="name">Nama Kelas</label>
            <input type="text" value="{{$kelas->nm_kelas}}" class="form-control" id="name" name="nm_kelas" required>
        </div>
        <div class="form-group">
            <label for="email">Status:</label>
            <input type="name" value="{{$kelas->status}}" class="form-control" id="status" name="status" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>

@endsection