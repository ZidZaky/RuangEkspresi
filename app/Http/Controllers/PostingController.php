<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;
use App\Models\Komunitas;
class PostingController extends Controller
{
    public function index()
    {
        $posting=Posting::all();
        return view('pages.list-posting',['posting'=>$posting]);
    }

   
    public function create()
    {
        //
        return view('');
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable', // Validation for the image
            
        ]);

        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $filename, 'public');
        }

        // Assuming you have a Karya model
        $posting = new Posting();
        $posting->title = $validatedData['title'];
        $posting->deskripsi = $validatedData['deskripsi'];
        $posting->komunitas_id = 1;
        $posting->foto = $filePath ?? 'null'; // Save the file path to the database

        // Save the new Karya to the database
        $berhasil = $posting->save();

        // Redirect to a specific route or return a response
        if ($berhasil) {
            return redirect('dashboard')->with('success', 'Posting created successfully!');
        } else {
            return redirect('dashboard')->with('error', 'Posting created failed');
        }
    }



    // Display the specified resource
    public function show($id)
    {
        $posting = Posting::where('komunitas_id', $id)->get();
        return view('pages.show-posting', ['posting' => $posting]);
    }
    // Show the form for editing the specified resource
    public function edit($id)
    {
        // $karya = Karya::findOrFail($id);
        $karya = Karya::where('id', $id)->first();
        return view('', ['posting' => $posting]);
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $valdata = $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
        ]);


        // dd($valdata);

        $posting = posting::where('id', $id)->first();

        if ($posting) {
            $berhasil = DB::update(
                'UPDATE `postings`
            SET `title` = ?, `deskripsi` = ?, `komunitas_id` = ?, `updated_at` = ?
            WHERE `id` = ?',
                [$valdata['title'], $valdata['deskripsi'], $valdata['komunitas_id'], now(), $id]
            );

            if ($berhasil) {
                return redirect('/dashboard');
            } else {
                return redirect('/dashboard')->with('error', 'Update failed');
            }
        } else {
            return redirect('/dashboard')->with('error', 'Posting not found');
        }
    }


    // Remove the specified resource from storage
    public function destroy(Posting $posting)
    {
        Posting::destroy($posting->id);

        return redirect('/');
    }
}