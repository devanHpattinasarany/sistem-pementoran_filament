<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'dosen_id',
        'nama',
        'alamat',
        'jenis_kelamin',
        'ttl',
        'program_studi',
        'no_hp',
    ];
}
