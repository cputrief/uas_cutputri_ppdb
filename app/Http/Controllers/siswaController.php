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
        $siswas = Siswa::all();
        return view('siswa.index',compact('siswas','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $siswas = Siswa::all();
        return view('siswa.tambah',compact('siswas'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $siswas = new Siswa;
        $siswas->nisn = $request->nisn;
        $siswas->nm_siswa = $request->nm_siswa;
        $siswas->jk = $request->jk;
        $siswas->alamat = $request->alamat;
        $siswas->save();

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
        $siswas = Siswa::find($id);
        return view('siswa.edit',compact('siswas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $siswas = Siswa::find($id);
        $siswas->nisn = $request->nisn;
        $siswas->nm_siswa = $request->nm_siswa;
        $siswas->jk = $request->jk;
        $siswas->alamat = $request->alamat;
        $siswas->save();

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $siswas = Siswa::find($id);
        $siswas->delete();

        return redirect('/siswa');
    }
}
