<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    protected $table = 'komunitas'; // Nama tabel yang sesuai dengan model

    protected $fillable = [
        'nama_komunitas',
        'deskripsi',
        'id_pengguna',
    ];

    // Relasi dengan model Pengguna (User)
    public function pengguna()
    {
        return $this->belongsTo(User::class, 'id_pengguna', 'id');
    }

    // Relasi dengan model PermohonanKomunitas

}
