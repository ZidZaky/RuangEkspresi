<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function index() {
        $event = Event::all();
        return view('manage-event', ['eventList' => $event]);
    }

    function search(Request $request) {
        // $event = Event::all();
        // $search = $request->search;
        // $event = event::where('name_event', 'LIKE', '%'.$search.'%')->get();
        // return view('event/index', ['eventList' => $event]);
    }

    function create()
    {
        return view('create-event');
    }

    function store(Request $request)
    {
        $event = new Event;
        $event->nama_event = $request->nama_event;
        $event->tanggal_mulai = $request->tanggal_mulai;
        $event->tanggal_selesai = $request->tanggal_selesai;
        $event->deskripsi_event = $request->deskripsi_event;
        $event->id_pengguna = 1;
        $event->id_komunitas = 1;
        $event->save();
        return redirect('/event');
    }

    function show($id)
    {
        $event = Event::find($id);
        return view('');
    }

    function edit()
    {

    }

    function update()
    {
        
    }

    function destroy(Event $event) {
        $event->delete();
        return redirect('/event');
    }
}
