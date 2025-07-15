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


<div>
    <h2>Pengumuman <small>Admin</small></h2><br>

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <div class="d-flex align-items-center flex-wrap gap-2">
            <a href="/pengumuman/tambah">
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
                <th>Nama Siswa</th>
                <th>Nama Kelas</th>
                <th>Nama Guru</th>
                <th>status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengumuman as $data)
            <tr>
                <td>{{ $nomor++ }}</td>
                <td>{{ $data->siswa->nm_siswa }}</td>
                <td>{{ $data->kelas->nm_kelas }}</td>
                <td>{{ $data->guru->nm_guru }}</td>
                <td>
                    <span class="label label-sm label-warning">{{ $data->status }}</span>
                </td>
                <td>
                    <div class="btn-group">
                        <!-- Detail -->
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalDetail{{ $data->id }}">
                            <i class="fa fa-search-plus"></i>
                        </button>

                        <!-- Edit -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit{{ $data->id }}">
                            <i class="fa fa-pencil"></i>
                        </button>

                        <!-- Hapus -->
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus{{ $data->id }}">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </td>
            </tr>
            
            @empty
            <tr>
                <td colspan="7" class="text-center">Data Tidak Ada</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{-- MODALS --}}
    @foreach ($pengumuman as $data)
    <!-- Modal Detail -->
    <div class="modal fade" id="modalDetail{{ $data->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog"><div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr><td>Nama Siswa</td><td>: {{ $data->siswa->nm_siswa }}</td></tr>
                    <tr><td>Nama Kelas</td><td>: {{ $data->kelas->nm_kelas }}</td></tr>
                    <tr><td>Nama Guru</td><td>: {{ $data->guru->nm_guru }}</td></tr>
                    <tr><td>Status</td><td>: {{ $data->status }}</td></tr>
                </table>
            </div>
        </div></div>
    </div>
<!-- Modal Edit -->
<div class="modal fade" id="modalEdit{{ $data->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog"><div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Data Pengumuman</h5>
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
            <form action="/pengumuman/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" name="nm_siswa" value="{{ $data->siswa->nm_siswa }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Kelas</label>
                    <input type="text" name="nm_kelas" value="{{ $data->kelas->nm_kelas }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Guru</label>
                    <input type="text" name="nm_guru" value="{{ $data->guru->nm_guru }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="Lulus" {{ $data->status == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                        <option value="Tidak Lulus" {{ $data->status == 'Tidak Lulus' ? 'selected' : '' }}>Tidak Lulus</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div></div>
</div>


    <!-- Modal Hapus -->
    <div class="modal fade" id="modalHapus{{ $data->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog"><div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                Yakin ingin menghapus Siswa <strong>{{ $data->nm_siswa }}</strong>?
            </div>
            <div class="modal-footer">
                <form action="/pengumuman/{{ $data->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div></div>
        
    </div>
    @endforeach

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
