<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;


class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $guru = Guru::all();
        return view('guru.index',compact('guru','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $guru = Guru::all();
        return view('guru.tambah',compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $guru = new Guru;
        $guru->nm_guru = $request->nm_guru;
        $guru->nip = $request->nip;
        $guru->jk = $request->jk;
        $guru->pangkat = $request->pangkat;
        $guru->alamat = $request->alamat;
        $guru->save();

        return redirect('/guru');
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
        $guru = Guru::find($id);
        return view('guru.edit',compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $guru = Guru::find($id);
        $guru->nm_guru = $request->nm_guru;
        $guru->nip = $request->nip;
        $guru->jk = $request->jk;
        $guru->pangkat = $request->pangkat;
        $guru->alamat = $request->alamat;
        $guru->save();

        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $guru = Guru::find($id);
        $guru->delete();

        return redirect('/guru');
    }
}
