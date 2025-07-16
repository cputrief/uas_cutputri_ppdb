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

@section('table')

@endsection

@section('card')
<div class="content">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
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
                                <h5 id="jumlah-kelas">{{ $jumlah_kelas }}</h5>
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
                                <h5 id="jumlah-guru">{{ $jumlah_guru }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-calendar"></i> Updated now
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
                                <h5 id="jumlah-siswa">{{ $jumlah_siswa }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-timer"></i> Updated now
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
                                <h5 id="jumlah-pengumuman">{{ $jumlah_pengumuman }}</h5>
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
{{-- table --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="row mt-4 px-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Statistik Data</h4>
                                <p class="category">Grafik Jumlah Data di Sistem</p>
                            </div>
                            <div class="content">
                                <canvas id="dashboardChart" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                 
    
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateJumlahKelas() {
        $.get('/jumlah-kelas', function(data) {
            $('#jumlah-kelas').text(data);
        });
    }

    // Jalankan setiap 5 detik
    setInterval(updateJumlahKelas, 5000);
    // Jalankan langsung saat load
    updateJumlahKelas();
</script>

{{-- grafik --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('dashboardChart').getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Kelas', 'Guru', 'Siswa', 'Pengumuman'],
            datasets: [{
                label: 'Jumlah Data',
                data: [
                    {{ $jumlah_kelas }},
                    {{ $jumlah_guru }},
                    {{ $jumlah_siswa }},
                    {{ $jumlah_pengumuman }}
                ],
                backgroundColor: [
                    '#f39c12', '#00a65a', '#f56954', '#00c0ef'
                ],
                borderColor: [
                    '#e08e0b', '#008d4c', '#d73925', '#00acd6'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            animation: {
                duration: 1500, // waktu animasi dalam ms
                easing: 'easeOutBounce' // efek animasi (bisa diganti)
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            }
        }
    });
</script>


    
@endsection



