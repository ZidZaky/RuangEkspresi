<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        // Mengambil semua data pengguna
        $penggunas = Pengguna::all();

        // Menampilkan data pengguna di view
        return view('listUser', compact('penggunas'));
    }
}
