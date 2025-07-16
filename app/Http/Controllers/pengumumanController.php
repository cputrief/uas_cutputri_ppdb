<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pengumuman;
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
        $pengumumans = Pengumuman::with(['siswa', 'kelas', 'guru'])->get();
        return view('pengumuman.index', compact('pengumumans', 'nomor'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pengumumans = Pengumuman::all();
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('pengumuman.tambah', compact('pengumumans', 'siswa','kelas','guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pengumumans = new Pengumuman;
        $pengumumans->siswa_id = $request->siswa_id;
        $pengumumans->kelas_id = $request->kelas_id;
        $pengumumans->guru_id = $request->guru_id;
        $pengumumans->status = $request->status;
        $pengumumans->save();

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
        $pengumumans = Pengumuman::findOrFail($id);
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('pengumuman.edit', compact('pengumumans', 'siswa','kelas','guru'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'pengumumans' => 'required',
        'siswa_id' => 'required',
        'kelas_id' => 'required',
        'guru_id' => 'required'
    ]);

    $pengumumans = Pengumuman::findOrFail($id);
    $pengumumans->siswa_id = $request->siswa_id;
    $pengumumans->kelas_id = $request->kelas_id;
    $pengumumans->guru_id = $request->guru_id;
    $pengumumans->status = $request->status;
    $pengumumans->save();


    return redirect('/pengumuman')->with('success', 'Pengumuman berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pengumumans = Pengumuman::find($id);
        $pengumumans->delete();

        return redirect('/pengumuman');
    }
}
