<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }
    .modal-content {
        width: 400px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 50px auto;
        padding: 20px;
        position: relative;
    }
    .modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .modal-header img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }
    .modal-header h2 {
        font-size: 24px;
        margin: 0 10px;
        flex-grow: 1;
    }
    .close-button {
        font-size: 24px;
        cursor: pointer;
    }
    .modal-body label {
        display: block;
        margin: 10px 0 5px;
        font-weight: bold;
    }
    .modal-body input, .modal-body textarea {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .modal-body textarea {
        resize: none;
    }
    .modal-footer {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }
    .modal-footer button {
        padding: 10px 20px;
        margin-left: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn-add {
        background-color: #8ba4ff;
        color: white;
    }
    .btn-cancel {
        background-color: red;
        color: white;
    }
</style>

<!-- Modal Event -->
<div class="modal fade" id="event" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <!-- Nama User -->
              <h2>Create Event</h2>
              <!-- Tombol Close -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/event" method="POST" enctype="multipart/form-data">
                @csrf
                    {{-- <input type="number" name="id_pengguna" id="" value="{{session('account')['id']}}" hidden> --}}
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
          </div>
            </form>
      </div>
    </div>
</div>
