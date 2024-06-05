<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komunitas;
use App\Models\Anggota;
use Illuminate\Support\Facades\DB;


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
        return view('pages.list-Komunitas', compact('komunitas'));
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
            'id_pengguna' => 'required|string',
            // 'id_permohonan' => 'exists:permohonan_komunitas,id_permohonan', // Jika menggunakan id_permohonan
        ]);

        // Membuat komunitas baru
        $komunitas = new Komunitas();
        $komunitas->nama_komunitas = $validatedData['nama_komunitas'];
        $komunitas->deskripsi = $validatedData['deskripsi'];
        $komunitas->id_pengguna = $validatedData['id_pengguna']; // Mengambil ID pengguna dari pengguna yang saat ini masuk
        // $komunitas->id_permohonan = $validatedData['id_permohonan']; // Jika menggunakan id_permohonan
        $komunitas->save();
        $komunitasBaru = Komunitas::orderBy('id_komunitas', 'desc')->first();
        $komunitasId = $komunitasBaru->id_komunitas;
            // Ambil ID komunitas yang baru saja disimpan


            // Debugging: pastikan ID komunitas diambil dengan benar
            if (is_null($komunitasId)) {
                return redirect()->route('komunitas.index')->with('error', 'Gagal mengambil ID komunitas yang baru disimpan');
            }

            // Menyimpan data ke tabel anggota_komunitas
            DB::table('anggota_komunitas')->insert([
                'role' => 'owner',
                'id_pengguna' => $validatedData['id_pengguna'],
                'komunitas_id' => $komunitasId
            ]);

            // Menambahkan flash message dan redirect
            return redirect()->route('komunitas.index')->with('success', 'Data komunitas sukses');

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
        return view('pages.show-komunitas', compact('komunitas'));
    }

    /**
     * Menampilkan form untuk mengedit resource yang ditentukan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAnggota($id)
    {
        // Mengambil semua anggota yang memiliki komunitas_id sesuai dengan $id
        $anggota = Anggota::where('komunitas_id', $id)->get();
        // $komunitas = Komunitas::where('id_komunitas', $id)->get();
        // dd($komunitas);
        // Mengembalikan view dengan data anggota
        return view('pages.list-Anggota', ['anggota' => $anggota, 'id_komunitas'=>$id]);
    }

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
        return redirect('/komunitas/detail/'.$id)->with('success', 'Data komunitas berhasil diperbarui');
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
