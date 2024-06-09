<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Komunitas;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function index() {
        $event = Event::all();
        return view('pages/manage-event', ['eventList' => $event]);
    }


    function search(Request $request) {
        $event = Event::all();
        $search =  $request->search;
        $event = event::where('name_event', 'LIKE', '%'.$search.'%')->get();
        return view('event/index', ['eventList' => $event]);
    }

    function create()
    {
        return view('forms/create-event');
    }

    function store(Request $request)
    {
        $event = new Event;
        $event->nama_event = $request->nama_event;
        $event->tanggal_mulai = $request->tanggal_mulai;
        $event->tanggal_selesai = $request->tanggal_selesai;
        $event->deskripsi_event = $request->deskripsi_event;
        $event->id_pengguna = $request->id_pengguna;
        $event->id_komunitas = $request->id_komunitas;
        $event->save();
        return redirect('/komunitas/event/'.$request->id_komunitas)->with('success', 'Data event sukses');;
    }

    function show($id)
    {
        $event = Event::where('Id_event', $id)->first();
        // dd($event);

        return view('pages/show-event',['event'=>$event]);
    }

    function showEventbyKomunitas($id)
    {
        $event = Event::where('id_komunitas', $id)->get();
        $Komunitas = Komunitas::where('id_komunitas',$id)->first();
        // $posting = Komunitas::where('id_komunitas',$id)->first();
        // dd($event);

        return view('pages/list-event-komunitas',['eventList'=>$event, 'komunitas'=>$Komunitas]);
    }

    function edit($id)
    {
        $event = Event::find($id);
        return view('forms/update-event', [
            'eventList' => $event
        ]);
    }

    function update(Request $request, $id)
    {
        $event = Event::find($id);
        $validateData = $request->validate([
            'nama_event' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi_event' => 'required',
            'id_pengguna' => 'required',
            'id_komunitas' => 'required'
        ]);

        $event->update([
            'nama_event' => $request->nama_event,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'deskripsi_event' => $request->deskripsi_event,
            'id_pengguna' => $request->id_pengguna,
            'id_komunitas' => $request->id_komunitas
        ]);

        return redirect('/komunitas/event'.$validateData['id_komunitas']);
    }

    function destroy(Event $event) {
        $id = $event->id_komunitas;
        // dd($id);
        $event->delete();
        return redirect('/komunitas/detail/'.$id)->with('success', 'Data Event dihapus');;
    }
}
