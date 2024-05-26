<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        return view('listUser', compact('penggunas'));

    }

    public function create()
    {
        // Method not needed
    }

    public function store(Request $request)
    {
        // Method not needed
    }

    public function show($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('listUser', ['pengguna' => $pengguna]);
    }

    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('editAccount', ['pengguna' => $pengguna]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'role' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->username = $validatedData['username'];
        $pengguna->email = $validatedData['email'];
        $pengguna->role = $validatedData['role'];
        $pengguna->status = $validatedData['status'];

        $berhasil = $pengguna->save();

        if ($berhasil) {
            return redirect('penggunas')->with('success', 'Pengguna updated successfully!');
        } else {
            return redirect('penggunas')->with('error', 'Update pengguna failed!');
        }
    }

    public function destroy($id)
    {
        // Method not needed
    }
}
