<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota_komunitas'; // Nama tabel yang benar

    protected $fillable = [
        'role',
        'id_pengguna',
        'komunitas_id',
    ];

    protected $primaryKey = 'id'; // Menentukan nama kolom ID jika berbeda dengan 'id'
}
