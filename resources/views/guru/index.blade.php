@extends('layouts.template')

@section('title')
    Data Guru
@endsection

@section('nama_hal')
    Guru
@endsection

@section('active3')
	active
@endsection

@section('table')
<div class="content center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Guru</h4>
                        <p class="category">Here is a Table Data Kelas</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <a href="/guru/tambah">
                            <button type="button" class="btn btn-primary pull-right ti-plus">Tambah Data</button>
                        </a><br><br>

                        <table class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Guru</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pangkat</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($guru as $data)
                                <tr>
                                    <td>{{ $nomor++ }}</td>
                                    <td>{{ $data->nm_guru }}</td>
                                    <td>{{ $data->jk }}</td>
                                    <td>{{ $data->pangkat }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>
                                        {{-- Tombol Edit --}}
                                        <a href="/guru/edit/{{$data->id}}" class="btn btn-sm btn-info">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>

                                        {{-- Tombol Hapus dengan konfirmasi JavaScript --}}
                                        <form action="/guru/{{ $data->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus Guru {{ $data->nm_guru }}?')">
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
                                    <td colspan="4" class="text-center">Data Guru belum tersedia.</td>
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
