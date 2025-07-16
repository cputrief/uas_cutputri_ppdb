<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dasboard;
use App\Models\Kelas;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Pengumuman;
class dasboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jumlah_kelas = Kelas::count(); // Hitung jumlah data di tabel kelas
        $jumlah_guru = Guru::count();
        $jumlah_siswa = Siswa::count();
        $jumlah_pengumuman = Pengumuman::count();
    return view('home', compact('jumlah_kelas','jumlah_guru','jumlah_siswa','jumlah_pengumuman')); // Kirim ke home.blade.php

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
