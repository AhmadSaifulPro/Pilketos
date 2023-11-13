<?php

namespace App\Http\Controllers;

use App\Models\CalonKetos;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PilihKetosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = CalonKetos::all();

        return view('Siswa.pilihketos', compact('data'));
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
        $jum_suara = CalonKetos::select('jumlah_suara')->where('id', $request->calon_ketos_id)->value('jumlah_suara');

        $tol_jum = $jum_suara + 1;
        // dd($jum_suara);


        $riwayat = new Riwayat();
        $riwayat->calon_ketos_id = $request->calon_ketos_id;
        $riwayat->nisn = auth()->guard('siswa')->user()->nisn;
        $riwayat->save();


        CalonKetos::where('id', $request->calon_ketos_id)->update([
            'jumlah_suara' => $tol_jum
        ]);


        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginsiswa');
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
