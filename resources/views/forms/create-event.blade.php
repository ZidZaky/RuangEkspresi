@extends('layouts.layout')

@section('title')
    Create Event
@endsection

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="user-info d-flex align-items-center">
                    <img src="https://img.freepik.com/free-photo/3d-rendering-zoom-call-avatar_23-2149556785.jpg?t=st=1716558949~exp=1716562549~hmac=211ee1b1078120088091030a3c58c727926a85b13009c783363c0ae922dd6dd9&w=826" alt="Profile Picture" class="profile-pic">
                    <span class="user-name">Zidan Platinum</span>
                </div>
                <div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <h1 class="modal-title fs-5 ms-3" id="exampleModalLabel">Add Data Event</h1>
            
            <div class="modal-body">
                <form method="POST" action="/karya">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Tambahkan nama eventmu">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Tambahkan deskripsi eventmu"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalMulai" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggalMulai" name="tanggalMulai" placeholder="Tambahkan tanggal mulai eventmu">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalSelesai" class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggalSelesai" name="tanggalSelesai" placeholder="Tambahkan tanggal selesai eventmu">
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-tambah">Tambah</button>
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div>
    <h1>Buat Karya</h1>
</div>

<style>
    .modal-body {
        font-family: Arial, sans-serif;
    }
    .modal-header {
        border-bottom: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .user-info {
        display: flex;
        align-items: center;
    }
    .profile-pic {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }
    .user-name {
        font-size: 16px;
        font-weight: bold;
    }
    .modal-footer {
        border-top: none;
    }
    .btn-close {
        background: none;
        border: none;
    }
    .btn-tambah {
        background-color: #708FFF;
        border-color: #708FFF;
        color: white;
        margin-left: 10px;
    }
    .btn-cancel {
        background-color: #FF4242;
        border-color: #FF4242;
        color: white;
    }
</style>

<!-- Modal Event -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <img class="vector" src="../assets/images/Ellipse 25.png">
              <!-- Nama User -->
              <h2>Zidan Platinum</h2>
              <!-- Tombol Close -->
              <span class="close-button" data-bs-dismiss="modal" aria-label="Close">&times;</span>
          </div>
          <div class="modal-body">
          <form action="/event" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="text" id="id_pengguna" name="id_pengguna" value="{{session('account')['id']}}" hidden>
              <!-- input nama -->
              <label for="nama_event">Nama</label>
              <input class="form-control" type="text" id="nama_event" name="nama_event" placeholder="Tambahkan nama eventmu" required>
              <!-- input deskripsi -->
              <label for="deskripsi_event">Deskripsi</label>
              <textarea class="form-control" id="deskripsi_event" name="deskripsi_event" rows="4" placeholder="Tambahkan deskripsi eventmu" required></textarea>
              <!-- input start tanggal -->
              <label for="tanggal_mulai">Tanggal mulai</label>
              <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
              <!-- input end tanggal -->
              <label for="tanggal_selesai">Tanggal Selesai</label>
              <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn-add" data-dismiss="modal">Tambah</button>
              <button type="submit" class="btn-cancel">Cancel</button>
          </div>
          </form>
      </div>
    </div>
</div>
