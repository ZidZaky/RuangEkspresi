@extends('layouts.layout')

@section('title', 'Manage Anggota Komunitas')

@section('content')

   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Update Data Event
  </button>

  <!-- Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
           <img class="vector" src="../assets/images/Ellipse 25.png">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
           <div class="mb-3">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Event</h1>
           </div>

           <form action="/event/update/{{ $eventList->id_event }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

           <div class="mb-3">
               <label for="nama_event" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama_event"
                  name="nama_event" value="{{ $eventList->nama_event }}">
           </div>
           <div class="mb-3">
              <label for="deskripsi_event" class="form-label">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi_event" name="deskripsi_event" value="">{{ $eventList->deskripsi_event }}</textarea>
           </div>

            <div class="col-md-6">
                <div class="mb-3">
                  <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="tanggal_mulai"
                  name="tanggal_mulai" value="{{ $eventList->tanggal_mulai }}">
                 </div>
                <div class="mb-3">
                  <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                   <input type="date" class="form-control" id="tanggal_selesai"
                  name="tanggal_selesai" value="{{ $eventList->tanggal_selesai }}">
                </div>
            </div>

        <div class="modal-footer">
              <button type="submit" class="btn btn-secondary" data-dismiss="modal">Update</button>
              <button type="submit" class="btn btn-primary">Cancel</button>
        </div>
      </form>

      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@endsection
