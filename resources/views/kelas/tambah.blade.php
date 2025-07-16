@extends('layouts.template')

@section('nama_hal')
	Form Data Siswa
@endsection

@section('active2')
	active
@endsection

@section('table')
<div class="container">
    <br>
    <a href="/kelas"><button type="button" class="btn-close ti-arrow-left">Back</button></a>
    <h2 class="text-center">Form Data Kelas</h2>
    <p class="text-center">silahkan isi data siswa dibawah ini!</p>
    <form method="post" action="/kelas" enctype="multipart/form-data">
        @csrf
        <div class="form-group center">
            <label for="name">Nama Kelas</label>
            <input type="text" class="form-control" id="name" name="nm_kelas" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="">-- Pilih Status --</option>
                <option value="Full">Full</option>
                <option value="Not Full">Not Full</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>

@endsection