<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function index()
    {
        $komentar = Komentar::all();
        return view('pages/list-komentar', ['komentarList' => $komentar]);
    }

    public function create()
    {
        return view('forms/create-komentar');
    }

    public function store(Request $request)
    {
        $komentar = new Komentar;
        $komentar->komentar = $request->komentar;
        $komentar->tanggal_komentar = now();
        $komentar->pengguna_id = $request->id_pengguna;
        $komentar->karya_id = $request->karya_id;
        $komentar->save();
        return redirect('/dashboard');
    }

    function destroy($id)
    {
        $komentar = Komentar::where('id', $id);
        $komentar->delete();
        return redirect('/dashboard')->with('success','Komentar Telah Dihapus');
    }
}
