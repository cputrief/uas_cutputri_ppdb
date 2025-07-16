@extends('layouts.template')

@section('nama_hal')
	Form Data Pengumuman
@endsection

@section('active4')
	active
@endsection

@section('table')
<div class="container">
    <br>
    <a href="/pengumuman"><button type="button" class="btn-close ti-arrow-left">Back</button></a>
    <h2 class="text-center">Form Data Pengumuman</h2>
    <p class="text-center">silahkan isi data pengumuman dibawah ini!</p>
    <form method="post" action="/pengumuman" enctype="multipart/form-data">
        @csrf
        <!-- Siswa -->
        <div class="form-group">
            <label for="siswa_id">Nama Siswa</label>
            <select name="siswa_id" class="form-control" required>
                <option value="" disabled selected>-- Pilih Siswa --</option>
                @foreach ($siswa as $s)
                    <option value="{{ $s->id }}">{{ $s->nm_siswa }}</option>
                @endforeach
            </select>
        </div>

        <!-- Kelas -->
        <div class="form-group">
            <label for="kelas_id">Nama Kelas</label>
            <select name="kelas_id" class="form-control" required>
                <option value="" disabled selected>-- Pilih Kelas --</option>
                @foreach ($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->nm_kelas }}</option>
                @endforeach
            </select>
        </div>

        <!-- Guru -->
        <div class="form-group">
            <label for="guru_id">Nama Guru</label>
            <select name="guru_id" class="form-control" required>
                <option value="" disabled selected>-- Pilih Guru --</option>
                @foreach ($guru as $g)
                    <option value="{{ $g->id }}">{{ $g->nm_guru }}</option>
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