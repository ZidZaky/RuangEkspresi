<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Anggota;
use App\Models\Komunitas;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all();
        return view('pages.list-Anggota', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function join(Request $request, $id)
    {
        // Memastikan pengguna terautentikasi
        // if (Auth::check()) {
        //     return redirect()->route('komunitas.index')->with('error', 'Anda harus masuk untuk bergabung dengan komunitas');
        // }

        // $userId = Auth::id(); // Mengambil ID pengguna yang saat ini masuk

        // Memastikan pengguna belum menjadi anggota komunitas ini
        $existingMember = Anggota::where('id_pengguna', $request->id_pengguna)
            ->where('komunitas_id', $id)
            ->first();

        if ($existingMember) {
            return redirect()->route('komunitas.index')->with('error', 'Anda sudah menjadi anggota komunitas ini');
        }

        // Menambahkan pengguna sebagai anggota komunitas
        Anggota::create([
            'role' => 'Anggota', // Default role
            'id_pengguna' => $request->id_pengguna,
            'komunitas_id' => $id,
        ]);

        return redirect()->route('komunitas.index')->with('success', 'Anda berhasil bergabung dengan komunitas');
    }

    public function exit(Request $request, $id)
    {
        // Memastikan pengguna terautentikasi
        // if (Auth::check()) {
        //     return redirect()->route('komunitas.index')->with('error', 'Anda harus masuk untuk bergabung dengan komunitas');
        // }

        // $userId = Auth::id(); // Mengambil ID pengguna yang saat ini masuk

        // Memastikan pengguna belum menjadi anggota komunitas ini
        $existingMember = Anggota::where('id_pengguna', $request->id_pengguna)->first();

        if ($existingMember) {
            $existingMember->delete();
            return redirect('/komunitas')->with('success', 'Anda sudah menjadi anggota asing komunitas ini');
        }

        return redirect('/komunitas')->with('error', 'Anda gagal exit dengan komunitas');
    }


    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('pages.editAnggota', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'role' => 'required|string|max:255',
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->role = $validatedData['role'];
        $anggota->save();

        return redirect()->route('anggota.index')->with('success', 'Peran anggota berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus dari komunitas');
    }
}
