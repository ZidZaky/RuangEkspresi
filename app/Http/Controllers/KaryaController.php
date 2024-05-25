<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Karya;

class KaryaController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        //
    }

    // Show the form for creating a new resource
    public function create()
    {
        //
        return view('createKarya');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'idPengguna' => 'required',
            'judulKarya' => 'required',
            'tema' => 'required',
            'deskripsi' => 'required'
        ]);

        // Assuming you have a Karya model
        $karya = new Karya();
        $karya->pengguna_id = $validatedData['idPengguna'];
        $karya->judulKarya = $validatedData['judulKarya'];
        $karya->tema = $validatedData['tema'];
        $karya->deskripsi = $validatedData['deskripsi'];

        // Save the new Karya to the database
        $berhasil= $karya->save();

        // Redirect to a specific route or return a response

        if ($berhasil) {
            return redirect('dashboard')->with('success', 'Karya created successfully!');
        } else {
            return redirect('karya/create')->with('error', 'buat karya gagal');
        }
    }


    // Display the specified resource
    public function show($id)
{
    $karya = Karya::findOrFail($id);
    return view('detailKarya', ['karya' => $karya]);
}

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $karya = Karya::findOrFail($id);
        return view('editKarya',['karya'=>$karya]);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $valdata=$request->validate([
            'judulKarya' => 'required|string|max:255',
            'tema' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
        ]);

        $karya = Karya::findOrFail($id);
        $karya->judulKarya = $valdata['judulKarya'];
        $karya->tema = $valdata['tema'];
        $karya->deskripsi = $valdata['deskripsi'];
        $berhasil = $karya->save();
        if ($berhasil) {
            # code...
            return redirect('dashboard')->with('success', 'Karya updated successfully!');
        } else {
            return redirect('dashboard')->with('error', 'Karya update failed!');
        }
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        // Find the Karya by ID
        $karya = Karya::findOrFail($id);

        // Delete the Karya
        $karya->delete();

        // Redirect with a success message
        return redirect('/dashboard')->with('success', 'Karya deleted successfully!');
    }
}
