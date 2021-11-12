<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_laporan',
        'foto_laporan',
        'nama_pelapor',
        'username',
        'isi_laporan',
        'tanggal_dibuat',
        'tanggal_diedit'
    ];

    public $timestamps = false;

}
