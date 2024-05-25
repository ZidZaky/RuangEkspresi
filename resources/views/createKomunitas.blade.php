@extends('layouts.layout')

@section('content')

   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Add New komunitas
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
           <h1 class="modal-title fs-5" id="exampleModalLabel">Add New komunitas</h1>
         </div>

         <div class="mb-3">
             <label for="destinasi_awal" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama"
                name="nama"required>
         </div>
         <div class="mb-3">
            <label for="destinasi_awal" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
         </div>

      </div>

      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tambah</button>
            <button type="submit" class="btn btn-primary">Cancel</button>
      </div>

    </div>
  </div>
</div>

@endsection
