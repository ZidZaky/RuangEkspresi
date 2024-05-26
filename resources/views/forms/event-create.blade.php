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
              <!-- input nama -->
              <label for="event-name">Nama</label>
              <input class="form-control" type="text" id="event-name" placeholder="Tambahkan nama eventmu" required>
              <!-- input deskripsi -->
              <label for="event-description">Deskripsi</label>
              <textarea class="form-control" id="event-description" rows="4" placeholder="Tambahkan deskripsi eventmu" required></textarea>
              <!-- input start tanggal -->
              <label for="start-date">Tanggal mulai</label>
              <input type="date" class="form-control" id="start-date" required>
              <!-- input end tanggal -->
              <label for="end-date">Tanggal Selesai</label>
              <input type="date" class="form-control" id="end-date" required>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn-add" data-dismiss="modal">Tambah</button>
          </div>
      </div>
    </div>
</div>
