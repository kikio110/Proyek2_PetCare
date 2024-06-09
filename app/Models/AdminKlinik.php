<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKlinik extends Model
{
    use HasFactory;
    protected $table = 'admin_kliniks';

    protected $fillable = [
        // 'user_id',
        'nama_klinik',
        'nomor_telepon',
        'alamat',
        'jam_buka',
        'foto',
    ];

    public function klinik()
    {
        return $this->belongsTo(AdminKlinik::class);
    }
}
