<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $table = 'pemeriksaans';

    protected $fillable = [
        'id_pemeriksaan',
        'nama_pemilik',
        'nomor_telepon',
        'klinik',
        'nama_hewan',
        'jenis_hewan',
        'jam_temu',
        'tanggal',
        'layanan',
        'status',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
