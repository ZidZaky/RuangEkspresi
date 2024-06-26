<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    protected $table='postings';

    protected $fillable = [
        'title',
        'deskripsi',
        'foto',
    ];

    protected $primaryKey = 'id'; // Menentukan nama kolom ID
}
