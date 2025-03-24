<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'email',
        'role',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function pemeriksaanSebagaiPasien()
    {
        return $this->hasMany(Periksa::class, 'id_pasien');
    }

    public function pemeriksaanSebagaiDokter()
    {
        return $this->hasMany(Periksa::class, 'id_dokter');
    }
}