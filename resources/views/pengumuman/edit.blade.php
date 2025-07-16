@extends('layouts.template')

@section('nama_hal')
	Form Edit Data Pengumuman
@endsection

@section('active4')
	active
@endsection

@section('table')
<div class="container">
    <br>
    <a href="/pengumuman"><button type="button" class="btn-close ti-arrow-left">Back</button></a>
    <h2 class="text-center">Form Edit Data Pengumuman</h2>
    <p class="text-center">silahkan isi data edit pengumuman dibawah ini!</p>
    <form method="post" action="/pengumuman" enctype="multipart/form-data">
        @csrf
        <div class="form-group center">
            <label for="siswa">Nama Siswa</label>
            <select class="form-control" aria-valuetext="{{ $data->nm_siswa }}" id="siswa_id" name="siswa_id" required>
                <option value="">-- Pilih Nama Siswa --</option>
                @foreach($siswa as $data)
                    <option value="{{ $data->id }}">{{ $data->nm_siswa }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nm_kelas">Nama Kelas</label>
            <select class="form-control" aria-valuetext="{{ $data->nm_kelas }}" id="kelas_id" name="kelas_id" required>
                <option value="">-- Pilih Nama Kelas --</option>
                @foreach($kelas as $data)
                    <option value="{{ $data->id }}">{{ $data->nm_kelas }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nm_guru">Nama Guru</label>
            <select class="form-control" aria-valuetext="{{ $data->nm_guru }}" id="guru_id" name="guru_id" required>
                <option value="">-- Pilih Nama Guru --</option>
                @foreach($guru as $data)
                    <option value="{{ $data->id }}">{{ $data->nm_guru }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="">-- Pilih Status --</option>
                <option value="lulus">Lulus</option>
                <option value="tidak_lulus">Tidak Lulus</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>

@endsection