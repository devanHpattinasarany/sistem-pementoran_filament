<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'jenis_kelamin',
        'ttl',
        'no_hp',
    ];
}
