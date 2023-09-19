<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $anggotas = Db::table('anggotas')->get();
        return view('anggota.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.anggota');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'kode' => 'required',
        'nama' => 'required',
        'jk' => 'required',
        'jurusan' => 'required',
        'telp' => 'required|numeric|min:10',
        'alamat' => 'required',
    ]);

    $query = DB::table('anggotas')->insert([
        'kode_anggota' => $request['kode'],
        'nama_anggota' => $request['nama'],
        'jk_anggota' => $request['jk'],
        'jurusan_anggota' => $request['jurusan'],
        'no_telp_angggota' => $request['telp'],
        'alamat_anggota' => $request['alamat'],
    ]);
    
    return redirect()->route('anggota.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $anggotas = DB::table('anggotas')->where('id', $id)->get();
        return view('anggota.show', compact('anggotas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $anggotas = DB::table('anggotas')->where('id', $id)->get();
        return view('anggota.edit', compact('anggotas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'telp' => 'required|numeric|min:10',
            'alamat' => 'required',
        ]);

        $query = DB::table('anggotas')->where('id', $id)->update([
            'kode_anggota' => $request['kode'],
            'nama_anggota' => $request['nama'],
            'jk_anggota' => $request['jk'],
            'jurusan_anggota' => $request['jurusan'],
            'no_telp_angggota' => $request['telp'],
            'alamat_anggota' => $request['alamat'],
        ]);
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $anggotas = DB::table('anggotas')->where('id', $id)->delete();
        return redirect()->route('anggota.index');
    }
}