<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komunitas;
use Illuminate\Support\Facades\Auth;

class KomunitasController extends Controller
{
    /**
     * Menampilkan daftar resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komunitas = Komunitas::all();
        return view('pages.listKomunitas', compact('komunitas'));
    }
    

    /**
     * Menampilkan form untuk membuat resource baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.komunitas-create');
    }
    /**
     * Menyimpan resource baru ke dalam storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi permintaan
        $validatedData = $request->validate([
            'nama_komunitas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'id_pengguna'=>'required|string',
            // 'id_permohonan' => 'exists:permohonan_komunitas,id_permohonan', // Jika menggunakan id_permohonan
        ]);
    
        // Membuat komunitas baru
        $komunitas = new Komunitas();
        $komunitas->nama_komunitas = $validatedData['nama_komunitas'];
        $komunitas->deskripsi = $validatedData['deskripsi'];
        $komunitas->id_pengguna = $validatedData['id_pengguna']; // Mengambil ID pengguna dari pengguna yang saat ini masuk
        // $komunitas->id_permohonan = $validatedData['id_permohonan']; // Jika menggunakan id_permohonan
        $komunitas->save();
    
       // Menambahkan flash message dan redirect
       return redirect()->route('komunitas.index')->with('success', 'Data komunitas  sukses');
    }
    /**
     * Menampilkan resource yang ditentukan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Mencari komunitas berdasarkan ID
        $komunitas = Komunitas::findOrFail($id);
        return view('pages.listKomunitas', compact('komunitas'));
    }

    /**
     * Menampilkan form untuk mengedit resource yang ditentukan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komunitas = Komunitas::findOrFail($id);
        return view('editkomunitas', compact('komunitas'));
    }
    
    /**
     * Memperbarui resource yang ditentukan di storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi permintaan
        $validatedData = $request->validate([
            'nama_komunitas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);
    
        // Mencari komunitas berdasarkan ID
        $komunitas = Komunitas::findOrFail($id);
        $komunitas->nama_komunitas = $validatedData['nama_komunitas'];
        $komunitas->deskripsi = $validatedData['deskripsi'];
        $komunitas->save();
    
        // Menambahkan flash message dan redirect
        return redirect()->route('komunitas.index')->with('success', 'Data komunitas berhasil diperbarui');
    }
    

    /**
     * Menghapus resource yang ditentukan dari storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
