<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\Kelas; 
use App\Models\Guru; 

class pengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $pengumuman = Pengumuman::all();
        return view('pengumuman.index', compact('pengumuman', 'nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pengumuman = Pengumuman::all();
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('pengumuman.tambah', compact('pengumuman', 'siswa','kelas','guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pengumuman = new Pengumuman;
        $pengumuman->siswa_id = $request->siswa;
        $pengumuman->kelas_id = $request->kelas;
        $pengumuman->guru_id = $request->guru;
        $pengumuman->status = $request->status;
        $pengumuman->save();

        return redirect('/pengumuman');
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
