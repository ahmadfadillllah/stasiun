<?php

namespace App\Http\Controllers;

use App\Models\DataStasiun;
use App\Models\Pos;
use App\Models\Stasiun;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $pos = Pos::all();
        $stasiun = Stasiun::with('provinsi', 'kota', 'kecamatan', 'desa', 'pos')->get();
        return view('data.index', compact('pos', 'stasiun'));
    }

    public function show($id)
    {
        $datastasiun = DataStasiun::all()->where('id_stasiun', $id)->sortBy('tahun_alat');
        return view('data.show', compact('datastasiun'));
    }

    public function insert(Request $request)
    {
        $request->validate([
        'id_provinsi' => 'required',
        'id_kota' => 'required',
        'id_kecamatan' => 'required',
        'id_desa' => 'required',
        'id_pos' => 'required',
        ],
        [
            'id_provinsi.required' => 'Provinsi harus diisi',
            'id_kota.required' => 'Kota/Kabupaten harus diisi',
            'id_kecamatan.required' => 'Kecamatan harus diisi',
            'id_desa.required' => 'Desa/Kelurahan harus diisi',
            'id_pos.required' => 'Nama Pos harus diisi',
        ]);

        try {
            Stasiun::create([
                'id_provinsi' => $request->id_provinsi,
                'id_kota' => $request->id_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_desa' => $request->id_desa,
                'id_pos' => $request->id_pos,
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
            ],
            [
                'id_provinsi.required' => 'Provinsi harus diisi',
                'id_kota.required' => 'Kota/Kabupaten harus diisi',
                'id_kecamatan.required' => 'Kecamatan harus diisi',
                'id_desa.required' => 'Desa/Kelurahan harus diisi',
                'id_pos.required' => 'Nama Pos harus diisi',
            ]);

        try {
            Stasiun::whereId($id)->update([
                'id_provinsi' => $request->id_provinsi,
                'id_kota' => $request->id_kota,
                'id_kecamatan' => $request->id_kecamatan,
                'id_desa' => $request->id_desa,
                'id_pos' => $request->id_pos,
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

    public function datainsert(Request $request)
    {
        $request->validate([
        'tahun_alat' => 'required',
        ]);

        try {
            DataStasiun::create([
                'tahun_alat' => $request->tahun_alat,
                'id_stasiun' => $request->id_stasiun,
                'januari' => $request->januari,
                'februari' => $request->februari,
                'maret' => $request->maret,
                'april' => $request->april,
                'mei' => $request->mei,
                'juni' => $request->juni,
                'juli' => $request->juli,
                'agustus' => $request->agustus,
                'september' => $request->september,
                'oktober' => $request->oktober,
                'november' => $request->november,
                'desember' => $request->desember,
            ]);

            return redirect()->back()->with('success', 'Data Stasiun telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function dataupdate($id, Request $request)
    {

        try {
            DataStasiun::whereId($id)->update([
                'januari' => $request->januari,
                'februari' => $request->februari,
                'maret' => $request->maret,
                'april' => $request->april,
                'mei' => $request->mei,
                'juni' => $request->juni,
                'juli' => $request->juli,
                'agustus' => $request->agustus,
                'september' => $request->september,
                'oktober' => $request->oktober,
                'november' => $request->november,
                'desember' => $request->desember,
            ]);

            return redirect()->back()->with('success', 'Data Stasiun telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function datadestroy($id)
    {
        try {
            DataStasiun::whereId($id)->delete();

            return redirect()->back()->with('success', 'Data Stasiun telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

}
