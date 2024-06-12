<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komunitas;
use App\Models\Event;
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

    public function admin()
    {
        $komunitas = Komunitas::all();
        return view('pages.manage-komunitas', compact('komunitas'));
    }

    public function adminDelete($id)
    {
        $komunitas = Komunitas::findOrFail($id);
        $event = Event::where('id_komunitas', $komunitas->id_komunitas)->get();
        if ($event) {
            foreach ($event as $e) {
                $e->delete();
            }
        }

        $komunitas->delete();
        return redirect('/komunitas/admin');
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
        ]);

        // Membuat komunitas baru
        $komunitas = new Komunitas();
        $komunitas->nama_komunitas = $validatedData['nama_komunitas'];
        $komunitas->deskripsi = $validatedData['deskripsi'];
        $komunitas->id_pengguna = $validatedData['id_pengguna'];
        $komunitas->save();

        $komunitasBaru = Komunitas::orderBy('id_komunitas', 'desc')->first();
        $komunitasId = $komunitasBaru->id_komunitas;

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
        return view('pages.list-Anggota', ['anggota' => $anggota, 'id_komunitas' => $id]);
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
        return redirect('/komunitas/detail/' . $id)->with('success', 'Data komunitas berhasil diperbarui');
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

    /**
     * Mencari keyword di tabel penggunas, event, dan komunitas.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Search in pengguna table
        $penggunas = DB::table('penggunas')
            ->where('username', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%')
            ->orWhere('role', 'like', '%' . $keyword . '%')
            ->orWhere('status', 'like', '%' . $keyword . '%')
            ->get();

        // Search in event table
        $events = DB::table('events')
            ->where('nama_event', 'like', '%' . $keyword . '%')
            ->orWhere('deskripsi_event', 'like', '%' . $keyword . '%')
            ->get();

        // Search in komunitas table
        $komunitas = DB::table('komunitas')
            ->where('nama_komunitas', 'like', '%' . $keyword . '%')
            ->orWhere('deskripsi', 'like', '%' . $keyword . '%')
            ->get();

        return view('pages.search-results', compact('penggunas', 'events', 'komunitas', 'keyword'));
    }
}
