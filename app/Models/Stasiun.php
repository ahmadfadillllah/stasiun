<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stasiun extends Model
{
    use HasFactory;

    protected $table = 'stasiun';

    protected $fillable = [
        'id_provinsi',
        'id_kota',
        'id_kecamatan',
        'id_desa',
        'id_pos',
        'tahun_alat',
    ];

    public function provinsi()
    {
        return $this->belongsTo(Provinces::class, 'id_provinsi');
    }

    public function kota()
    {
        return $this->belongsTo(Cities::class, 'id_kota');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Districts::class, 'id_kecamatan');
    }

    public function desa()
    {
        return $this->belongsTo(Villages::class, 'id_desa');
    }

    public function pos()
    {
        return $this->belongsTo(Pos::class, 'id_pos');
    }
}
