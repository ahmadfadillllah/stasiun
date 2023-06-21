<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use Illuminate\Http\Request;

class PosController extends Controller
{
    //
    public function index()
    {
        $pos = Pos::all();
        return view('pos.index', compact('pos'));
    }

    public function insert(Request $request)
    {

        $request->validate([
        'name' => 'required|max:255',
        ],
    [
        'name.required' => 'Nama harus diisi',
    ]);

        try {
            Pos::create([
                'name' => $request->name,
            ]);

            return redirect()->back()->with('success', 'Pos telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('success', 'Pos gagal ditambahkan');
        }
    }

    public function update($id, Request $request)
    {
        try {
            Pos::whereId($id)->update([
                'name' => $request->name,
            ]);

            return redirect()->back()->with('success', 'Pos telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Pos::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Pos telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
