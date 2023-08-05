<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class alamatPelamar extends Model
{
    use Notifiable;

    protected $fillable = [
        'nama_pelamar',
        'label',
        'alamat',
        'kecamatan',
        'kota',
        'provinsi',
        'detail',
        'kode',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
