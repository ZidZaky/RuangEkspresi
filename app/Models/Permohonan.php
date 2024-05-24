<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $table = 'permohonan_komunitas'; // Nama tabel yang sesuai dengan model

    protected $primaryKey = 'id_permohonan'; // Primary key dari tabel

    protected $fillable = [
        'nama_komunitas',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'pengguna_id',
        'status',
    ];

    // Relasi dengan model Pengguna (User)
    public function pengguna()
    {
        return $this->belongsTo(User::class, 'pengguna_id', 'id');
    }

}
