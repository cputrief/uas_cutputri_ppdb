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

    .modal {
        z-index: 1050 !important;
    }

    .modal-backdrop {
        z-index: 1040 !important;
    }
</style>

<div>
    <div>
        <h2>Data Kelas <small>Admin</small></h2>
    </div><br>

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div class="d-flex align-items-center flex-wrap gap-2">
            <a href="/kelas/tambah">
                <button type="button" class="btn btn-success">
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
                <th>Nama Kelas</th>
                <th>Status</th>
                <th>Clicks</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kelas as $data)
            <tr>
                <th scope="row">{{ $nomor++ }}</th>
                <td>{{ $data->nm_kelas }}</td>
                <td>
                    <span class="label label-sm label-warning">{{ $data->status }}</span>
                </td>
                <td>
                    <div class="action-buttons">
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalDetail{{$data->id}}">
                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                        </button>
                        {{-- edit --}}
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit{{$data->id}}">
                            <i class="ace-icon fa fa-pencil bigger-130"></i>

                        </button>
                        {{--modal edit  --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                          
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                          
                                <div class="modal-body">
                                  <table class="table">
                                    <tbody>
                                      <tr>
                                        <td>Nama Kelas</td>
                                        <td>: {{ $data->nm_kelas }}</td>
                                      </tr>
                                      <tr>
                                        <td>Status</td>
                                        <td>: {{ $data->status }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                          
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                          
                              </div>
                            </div>
                          </div>
                          {{-- end detail --}}
                          <a href="/tambah{{$data->id}}" class="btn btn-succes btn-sm">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                        </a>
                          
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus{{$data->id}}">
                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                        </button>
                        <form action="kelas/{{$data->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="alert('yakin data ini ingin dihapus')" class="btn btn-danger">Hapus</button>
                        </form>
                        <div class="modal fade" id="modalHapus{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{$data->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel{{$data->id}}">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Yakin ingin menghapus data kelas <strong>{{ $data->nm_kelas }}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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

    <!-- MODALS DITARUH DI SINI (SETELAH TABEL) -->
  

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
                    table.buttons().container().appendTo('#buttons-container');
                }
            });
        });
    </script>
</div>

@endsection
