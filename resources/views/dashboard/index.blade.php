@extends('layouts.template')
@section('title')
    Dasboard
@endsection

@section('nama_hal')
    Dasboard
@endsection

@section('active1')
    active
@endsection

@section('card')
<div class="content">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card" style="cursor: pointer;">
                <a href="/kelas" style="text-decoration: none; color: inherit;">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-blackboard"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                    <p>Kelas</p>
                                    30
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                <i class="ti-reload"></i> Updated now
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-success text-center">
                                <i class="ti-view-list-alt"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Guru</p>
                                35 
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-calendar"></i> Last day
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-danger text-center">
                                <i class="ti-user"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Siswa</p>
                                23
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-timer"></i> In the last hour
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="icon-big icon-info text-center">
                                <i class="ti-announcement"></i>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                <p>Pengumuman</p>
                                4
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-bell"></i> Updated now
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <th>Nama Siswa</th>
                                <th>NIK</th>
                                <th>JK</th>
                                <th>Alamat</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sri Maharani</td>
                                    <td>1109674539871</td>
                                    <td>Perempuan</td>
                                    <td>Aceh singkil</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="header">
                        <h4 class="title">Data Guru</h4>
                        <p class="category">Here is a Table Data Guru</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead class="center">
                                <th>No</th>
                                <th>Nama Guru<br>/ NIP</th>
                                <th>JK</th>
                                <th >Pangkat<br> Gol_Ruang</th>
                                <th>Jenis Guru</th>
                                <th>Alamat</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ida Sari<br>09674539871</td>
                                    <td>Perempuan</td>
                                    <td>Pembina <br>VI-A</td>
                                    <td>Wali Kelas</td>
                                    <td>Aceh Singkil</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
