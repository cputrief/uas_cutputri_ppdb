@extends('layouts.template')

@section('title')
    Pengumuman
@endsection

@section('nama_hal')
    Pengumuman
@endsection

@section('active4')
	active
@endsection

@section('table')
<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">


<div class="content px-4">
    <h2>Pengumuman <small>Admin</small></h2><br>

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3 ">
        <div class="d-flex align-items-center flex-wrap gap-2">
            <a href="/pengumuman/tambah">
                <button type="button" class="btn btn-success pull-right">
                    <i class="fa fa-plus"></i> Tambah Data
                </button>
            </a>

            <div id="buttons-container" class="d-flex gap-2"></div>
        </div>
    </div>

    <table id="static-table" class="table table-striped table-bordered table-hover">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Nama Kelas</th>
                <th>Nama Guru</th>
                <th>status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengumumans as $data)
            <tr>
                <td>{{ $nomor++ }}</td>
                <td>{{ $data->siswa->nm_siswa ?? '-' }}</td>
                <td>{{ $data->kelas->nm_kelas ?? '-' }}</td>
                <td>{{ $data->guru->nm_guru ?? '-' }}</td>
               
                <td class="hidden-480">
                    <span class=" {{ $data->status == 'Full' ? 'text-success' : 'text-danger' }}">
                        {{ $data->status }}
                    </span>
                </td>
                <td>
                    {{-- Tombol Edit --}}
                    <a href="/pengumuman/edit/{{$data->id}}" class="btn btn-sm btn-info">
                        <i class="fa fa-pencil"></i> Edit
                    </a>

                    {{-- Tombol Hapus dengan konfirmasi JavaScript --}}
                    <form action="/pengumuman/{{ $data->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus pengumuman {{ $data->siswa->nm_siswa ?? ini}}?')">
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
                <td colspan="7" class="text-center">Data Tidak Ada</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables core -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- Export & print plugins -->
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function () {
        $('#static-table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf', 'print'
            ],
            paging: true,
            responsive: true,
            ordering: true,
            language: {
                url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json" // Bahasa Indonesia
            }
        });
    });
    </script>
    
</class=>

@endsection
