<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $siswa = Siswa::all();
        return view('siswa.index',compact('siswa','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $siswa = Siswa::all();
        return view('siswa.tambah',compact('siswa'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $siswa = new Siswa;
        $siswa->nisn = $request->nisn;
        $siswa->nm_siswa = $request->nm_siswa;
        $siswa->jk = $request->jk;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return redirect('/siswa');
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
        $siswa = Siswa::find($id);
        return view('siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $siswa = Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->nm_siswa = $request->nm_siswa;
        $siswa->jk = $request->jk;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('/siswa');
    }
}
