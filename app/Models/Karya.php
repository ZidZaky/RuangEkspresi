<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    use HasFactory;

    protected $table = 'karyas'; // Sesuaikan dengan nama tabel Anda jika berbeda
    protected $primaryKey = 'id_karya'; // Sesuaikan dengan primary key Anda jika berbeda

    // Daftar kolom yang dapat diisi
    protected $fillable = [
        'judulKarya',
        'deskripsi',
        'jenisKarya',
        'namaFile',
        'pengguna_id',
        'created_at',
        'updated_at',
    ];
}