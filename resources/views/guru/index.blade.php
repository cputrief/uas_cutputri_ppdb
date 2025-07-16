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
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Data Siswa</h4>
                        <p class="category">Here is a Table Data Siswa</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead class="center">
                                <th>No</th>
                                <th>Nama Guru</th>
                                <th>NIK</th>
                                <th>JK</th>
                                <th>Alamat</th>
                            </thead>
                            <tbody>
                                @forelse ($guru as $item)
                                <tr>
                                    <td>1</td>
                                    <td>Sri Maharani</td>
                                    <td>1109674539871</td>
                                    <td>Perempuan</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Launch demo modal
                                          </button>

                                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                  ...
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </td>
                                </tr> 
                                @empty
                                    
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