<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $primaryKey = 'no_anggota';

    protected $fillable = [
        'nama_anggota',
        'no_telp',
        'alamat',
        'email',
        'password',
        'id_anggota'
    ];

    protected $hidden = [
        'password'
    ];
}
