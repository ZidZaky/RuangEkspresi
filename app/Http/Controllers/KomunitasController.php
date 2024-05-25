<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Komunitas;

class KomunitasController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama_komunitas' => 'required|string|max:255',
            'deskripsi' => 'required',
            'id_pengguna' => 'required|exists:penggunas,id',
            'id_permohonan' => 'required|exists:permohonan_komunitas,id_permohonan',
        ]);

        // Membuat komunitas baru
        $komunitas = Komunitas::create($validatedData);

        if ($komunitas) {
            return redirect('dashboard')->with('success', 'Komunitas berhasil ditambahkan');
        } else {
            return redirect('karya/create')->with('error', 'Gagal menambahkan komunitas');
        }
    }

    public function update(Request $request, $id_komunitas)
    {
        try {
            // Validasi data input
            $validatedData = $request->validate([
                'nama_komunitas' => 'sometimes|required|string|max:255',
                'deskripsi' => 'sometimes|required',
                'id_pengguna' => 'sometimes|required|exists:penggunas,id',
                'id_permohonan' => 'sometimes|required|exists:permohonan_komunitas,id_permohonan',
            ]);

            // Mencari komunitas berdasarkan id
            $komunitas = Komunitas::findOrFail($id_komunitas);

            // Update data komunitas
            $komunitas->update($validatedData);

            return redirect('dashboard')->with('success', 'Komunitas berhasil diubah');
        } catch (ModelNotFoundException $e) {
            return redirect('dashboard')->with('error', 'Komunitas tidak ditemukan');
        } catch (\Exception $e) {
            return redirect('dashboard')->with('error', 'Terjadi kesalahan saat mengubah komunitas');
        }
    }
}
