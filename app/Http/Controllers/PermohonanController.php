<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Permohonan;


class PermohonanController extends Controller
{
    public function ajukanPermohonan(Request $request)
    {
        $request->validate([
            'nama_komunitas' => 'required|string|max:255',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai',
        ]);

        $user = Auth::user();

        $permohonan = new Permohonan();
        $permohonan->nama_komunitas = $request->nama_komunitas;
        $permohonan->deskripsi = $request->deskripsi;
        $permohonan->tanggal_mulai = $request->tanggal_mulai;
        $permohonan->tanggal_selesai = $request->tanggal_selesai;
        $permohonan->pengguna_id = $user->id;
        $permohonan->status = 'Pending';
        $permohonan->save();

        return redirect()->back()->with('success', 'Permohonan bergabung berhasil diajukan');
    }

   
}
