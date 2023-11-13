<?php

namespace App\Http\Controllers;

use App\Models\CalonKetos;
use Illuminate\Http\Request;

class CalonKetosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CalonKetos::all();
        return view('calonketos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('calonketos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'foto' => 'required',
        ]);

        //Nambah foto
        if ($request->file('foto')) {
            $img = $request->file('foto');
            $foto = time() . '-' . $img->getClientOriginalName();
            $lokasi = 'img';
            $img->move($lokasi, $foto);
        }

        $data = new CalonKetos();
        $data->nama  = $request->nama;
        $data->kelas  = $request->kelas;
        $data->foto  = $foto;
        $data->jumlah_suara  = 0;
        $data->save();
        return redirect()->route('pilketos.index')->with('success', 'Data Berhasil Di Tambah');
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
        $data = CalonKetos::findOrFail($id);
        return view('calonketos.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',

        ]);

        $data = CalonKetos::findOrFail($id);
        if ($request->file('foto')) {
            $img = $request->file('foto');
            $foto = time() . '-' . $img->getClientOriginalName();
            $lokasi = 'img';
            $img->move($lokasi, $foto);

            $data->nama  = $request->nama;
            $data->kelas  = $request->kelas;
            $data->foto = $foto;
        } else {

            $data->nama  = $request->nama;
            $data->kelas  = $request->kelas;
        }
        $data->save();
        return redirect()->route('pilketos.index')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CalonKetos::findOrfail($id)->delete();
        return redirect()->route('pilketos.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
