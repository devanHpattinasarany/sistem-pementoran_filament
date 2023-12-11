<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pementoran_record extends Model
{
    use HasFactory;
    protected $fillable = [
        'mahasiswa_npm',
        'dosen_nidn',
        'semester',
        'jenis_pertemuan',
        'ip_mahasiswa',
        'ipk_mahasiswa',
        'permasalahan',
        'catatan_tindak_lanjut',
        'status',
    ];
}
