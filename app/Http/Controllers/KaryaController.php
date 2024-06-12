<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Karya;
use App\Models\Komentar;
use Illuminate\Support\Facades\Storage;

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
            'judul' => 'required',
            'deskripsi' => 'required',
            'jenisKarya' => 'required',
            'karya' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the image
        ]);

        // Handle file upload
        if ($request->hasFile('karya')) {
            $file = $request->file('karya');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $filename, 'public');
        }

        // Assuming you have a Karya model
        $karya = new Karya();
        $karya->pengguna_id = $validatedData['idPengguna'];
        $karya->judulKarya = $validatedData['judul'];
        $karya->deskripsi = $validatedData['deskripsi'];
        $karya->jenisKarya = $validatedData['jenisKarya'];
        $karya->namaFile = $filePath ?? null; // Save the file path to the database

        // Save the new Karya to the database
        $berhasil = $karya->save();

        // Redirect to a specific route or return a response
        if ($berhasil) {
            return redirect('dashboard')->with('success', 'Karya created successfully!');
        } else {
            return redirect('dashboard')->with('error', 'Karya created failed');
        }
    }



    // Display the specified resource
    public function show($id)
    {
        $karya = Karya::where('id_karya', $id)->first();
        return view('detailKarya', ['karya' => $karya]);
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        // $karya = Karya::findOrFail($id);
        $karya = Karya::where('id_karya', $id)->first();
        return view('forms.editKarya', ['karya' => $karya]);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        // dd($request);
        $valdata = $request->validate([
            'judulKarya' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'jenisKarya' => 'required|string|max:255'
        ]);


        // dd($valdata);

        $karya = Karya::where('id_karya', $id)->first();

        if ($karya) {
            $berhasil = DB::update(
                'UPDATE `karyas`
            SET `judulKarya` = ?, `deskripsi` = ?, `jenisKarya` = ?, `updated_at` = ?
            WHERE `id_karya` = ?',
                [$valdata['judulKarya'], $valdata['deskripsi'], $valdata['jenisKarya'], now(), $id]
            );

            if ($berhasil) {
                return redirect('/dashboard');
            } else {
                return redirect('/dashboard')->with('error', 'Update failed');
            }
        } else {
            return redirect('/dashboard')->with('error', 'Karya not found');
        }
    }


    // Remove the specified resource from storage
    public function destroy($id)
    {
        // Find the Karya by ID
        $karya = Karya::where('id_karya', $id)->first();
        $komentar = Komentar::where('karya_id', $id)->get();

        if ($komentar) {
            foreach ($komentar as $k) {
                $k->delete();
            }
        }

        // Check if Karya exists
        if ($karya) {
            // Assuming the Karya model has a 'file_path' attribute that stores the file path
            $filePath = $karya->file_path;

            // Delete the file from the storage if it exists
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
            }

            // Delete the Karya manually using the Eloquent delete method
            $deleted = $karya->delete();

            // Check if the deletion was successful
            if ($deleted) {
                // Redirect with a success message
                return redirect('/dashboard')->with('success', 'Karya deleted successfully!');
            } else {
                // Redirect with an error message
                return redirect('/dashboard')->with('error', 'Failed to delete Karya!');
            }
        } else {
            // Redirect with an error message if Karya not found
            return redirect('/dashboard')->with('error', 'Karya not found!');
        }
    }
}
