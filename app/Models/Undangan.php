<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;

    protected $table = 'undangan_komunitas';

    protected $fillable = [
        'user_id',
        'komunitas_id',
        'invited_by',
        'type',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(Pengguna::class, 'user_id');
    }

    public function komunitas()
    {
        return $this->belongsTo(Komunitas::class, 'komunitas_id');
    }

    public function inviter()
    {
        return $this->belongsTo(Pengguna::class, 'invited_by');
    }
}
