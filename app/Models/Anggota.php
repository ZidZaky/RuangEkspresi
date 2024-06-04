<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    use HasFactory;

    protected $fillable = [
       'role',
       'id_pengguna',
    ];

    protected $primaryKey = 'id'; // Menentukan nama kolom ID
}
