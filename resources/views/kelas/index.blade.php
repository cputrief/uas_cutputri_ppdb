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

<style>
    .custom-toolbar {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        gap: 10px;
    }

    .button-group {
        display: inline-flex;
        gap: 10px;
        flex-wrap: wrap;
    }
</style>

<div>
    <!-- Selanjutnya isi tombol dan tabel seperti yang sudah kita bahas -->
    <div>
        <div>
            <h2>Data Kelas <small>Admin</small></h2>
        </div><br>
    
        <!-- Semua tombol dalam satu baris -->
        <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
            <!-- Kiri: Semua tombol (Tambah + Export + Print) dalam satu group -->
            <div class="d-flex align-items-center flex-wrap gap-2">
                <!-- Tambah Data -->
                <a href="/kelas/tambah">
                    <button type="button" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah Data
                    </button>
                </a>
    
                <!-- Tombol export dan print dari DataTables -->
                <div id="buttons-container" class="d-flex gap-2"></div>
            </div>
        </div>
    
        <!-- Isi tabel -->
        <div>
            <table id="static-table" class="table table-striped table-bordered table-hover">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Status</th>
                        <th>Clicks</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $kelas as $data)
                    <tr>
                        <th scope="row">{{$nomor++}}</th>
                        <td>{{$data->nm_kelas}}</td>
                        <td>
                            <span class="label label-sm label-warning">{{$data->status}}</span>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus{{$data->id}}">
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-sm    " data-toggle="modal" data-target="#exampleModal">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>

                                    </button>
                        
                                <!-- Tombol trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus{{$data->id}}">
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                </button>
                        
                                <!-- Modal konfirmasi hapus -->
                                <div class="modal fade" id="modalHapus{{$data->id}}" tabindex="-1" aria-labelledby="modalLabel{{$data->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="modalLabel{{$data->id}}">Konfirmasi Hapus</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                            </div>
                                            <div class="modal-body">
                                                Yakin ingin menghapus data kelas <strong>{{ $data->nm_kelas }}</strong>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <form action="kelas/{{$data->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        
                    </tr>
                    @empty
                                <tr>
                                    <th colspan="5" scope="row">Data Tidak Ada</th>
                                </tr>
                            @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        $(document).ready(function () {
            let table = $('#static-table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'csvHtml5',
                        text: '<i class="fa fa-database"></i> Export CSV',
                        className: 'btn btn-outline-primary'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i> Print',
                        className: 'btn btn-outline-dark'
                    }
                ],
                initComplete: function () {
                    // Tempatkan tombol ke div custom
                    table.buttons().container().appendTo('#buttons-container');
                }
            });
        });
    </script>
</div>
@endsection

