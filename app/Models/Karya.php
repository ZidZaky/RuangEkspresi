<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    // Specify the table name if it's different from the default 'accounts' table
     protected $table = 'karyas';

    // Specify the primary key column if it's different from the default 'id' column
    protected $primaryKey = 'id';

    // Specify the columns that are mass assignable
    protected $fillable = [
        'judulKarya','tema','deskripsi',
    ];
}
