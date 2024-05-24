<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PenggunaController extends Controller
{
    public function index()
    {
        // Mengambil semua data pengguna
        $penggunas = Pengguna::all();

        // Menampilkan data pengguna di view
        return view('listUser', compact('penggunas'));
    }

    public function updateStatus(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'status' => 'required|in:aktif,non-aktif',
        ]);

        try {
            // Mencari pengguna berdasarkan id
            $pengguna = Pengguna::findOrFail($id);

            // Update status pengguna
            $pengguna->status = $request->status;
            $pengguna->save();

            return redirect()->back()->with('success', 'Status akun berhasil diperbarui');
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui status akun');
        }
    }
}
