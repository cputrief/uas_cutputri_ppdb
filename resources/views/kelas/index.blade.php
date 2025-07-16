@extends('layouts.template')

@section('title')
    Data Kelas
@endsection

@section('nama_hal')
    Kelas
@endsection

@section('active2')
	active
@endsection

@section('table')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Kelas</h4>
                        <p class="category">Here is a Table Data Kelas</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <a href="/kelas/tambah">
                            <button type="button" class="btn btn-primary pull-right ti-plus">Tambah Data</button>
                        </a><br><br>

                        <table class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kelas as $data)
                                <tr>
                                    <td>{{ $nomor++ }}</td>
                                    <td>{{ $data->nm_kelas }}</td>
                                    <td>
                                        <span class="label label-sm label-warning">{{ $data->status }}</span>
                                    </td>
                                    <td>
                                        {{-- Tombol Edit --}}
                                        <a href="/kelas/edit/{{$data->id}}" class="btn btn-sm btn-info">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>

                                        {{-- Tombol Hapus dengan konfirmasi JavaScript --}}
                                        <form action="/kelas/{{ $data->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus kelas {{ $data->nm_kelas }}?')">
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
                                    <td colspan="4" class="text-center">Data kelas belum tersedia.</td>
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
