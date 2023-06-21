<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use App\Models\Stasiun;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $pos = Pos::all();
        $stasiun = Stasiun::with('provinsi', 'kota', 'kecamatan', 'desa', 'pos')->get();
        // dd($stasiun);
        return view('data.index', compact('pos', 'stasiun'));
    }

    public function insert(Request $request)
    {
// dd($request->all());
        $request->validate([
        'id_provinsi' => 'required',
        'id_kota' => 'required',
        'id_kecamatan' => 'required',
        'id_desa' => 'required',
        'id_pos' => 'required',
        'tahun_alat' => 'required',
        ],
        [
            'id_provinsi.required' => 'Provinsi harus diisi',
            'id_kota.required' => 'Kota/Kabupaten harus diisi',
            'id_kecamatan.required' => 'Kecamatan harus diisi',
            'id_desa.required' => 'Desa/Kelurahan harus diisi',
            'id_pos.required' => 'Nama Pos harus diisi',
            'tahun_alat.required' => 'Tahun Alat Dipakai harus diisi',
        ]);

        try {
            Stasiun::create([
                'id_provinsi' => $request->id_provinsi,
                'id_kota' => $request->id_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_desa' => $request->id_desa,
                'id_pos' => $request->id_pos,
                'tahun_alat' => $request->tahun_alat,
            ]);

            return redirect()->back()->with('success', 'Stasiun telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'id_provinsi' => 'required',
            'id_kota' => 'required',
            'id_kecamatan' => 'required',
            'id_desa' => 'required',
            'id_pos' => 'required',
            'tahun_alat' => 'required',
            ],
            [
                'id_provinsi.required' => 'Provinsi harus diisi',
                'id_kota.required' => 'Kota/Kabupaten harus diisi',
                'id_kecamatan.required' => 'Kecamatan harus diisi',
                'id_desa.required' => 'Desa/Kelurahan harus diisi',
                'id_pos.required' => 'Nama Pos harus diisi',
                'tahun_alat.required' => 'Tahun Alat Dipakai harus diisi',
            ]);

        try {
            Stasiun::whereId($id)->update([
                'id_provinsi' => $request->id_provinsi,
                'id_kota' => $request->id_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_desa' => $request->id_desa,
                'id_pos' => $request->id_pos,
                'tahun_alat' => $request->tahun_alat,
            ]);

            return redirect()->back()->with('success', 'Stasiun telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Stasiun::whereId($id)->delete();

            return redirect()->back()->with('success', 'Stasiun telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

}
