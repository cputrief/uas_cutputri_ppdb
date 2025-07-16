@extends('layouts.template')

@section('title')
    Data Siswa
@endsection

@section('nama_hal')
    Siswa
@endsection

@section('active5')
	active
@endsection

@section('table')
<div class="content center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Siswa</h4>
                        <p class="category">Here is a Table Data Siswa</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <a href="/siswa/tambah">
                            <button type="button" class="btn btn-primary pull-right ti-plus">Tambah Data</button>
                        </a><br><br>

                        <table class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>JK</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($siswas as $data)
                                <tr>
                                    <td>{{ $nomor++ }}</td>
                                    <td>{{ $data->nisn }}</td>
                                    <td>{{ $data->nm_siswa }}</td>
                                    <td>{{ $data->jk }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>
                                        {{-- Tombol Edit --}}
                                        <a href="/siswa/edit/{{$data->id}}" class="btn btn-sm btn-info">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>

                                        {{-- Tombol Hapus dengan konfirmasi JavaScript --}}
                                        <form action="/siswa/{{ $data->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus Siswa {{ $data->nm_siswa }}?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr> 
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">Data siswa belum tersedia.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
