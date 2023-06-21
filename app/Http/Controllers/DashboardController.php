<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\Pos;
use App\Models\Provinces;
use App\Models\Stasiun;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $j_provinsi = Provinces::count();
        $j_kota = Cities::count();
        $j_pos = Pos::count();
        $j_stasiun = Stasiun::count();
        return view('dashboard.index', compact('j_provinsi', 'j_kota', 'j_pos', 'j_stasiun'));
    }
}
