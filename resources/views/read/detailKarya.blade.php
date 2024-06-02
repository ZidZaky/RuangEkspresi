<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #8ba4ff;
        padding: 10px 20px;
        color: white;
    }

    .post {
        background-color: white;
        margin: 20px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .user-info {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .user-info img {
        border-radius: 50%;
        margin-right: 10px;
    }

    .post-title {
        font-size: 24px;
        margin: 10px 0;
    }

    .post-description {
        font-size: 16px;
        margin: 10px 0;
    }

    .post-image {
        width: 100%;
        border-radius: 10px;
    }

    .comments {
        margin-top: 20px;
    }

    .comment {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        border-top: 1px solid #e0e0e0;
    }

    .comment:first-child {
        border-top: none;
    }

    .comment img {
        border-radius: 50%;
        margin-right: 10px;
    }

    .delete-button {
        color: red;
        cursor: pointer;
    }

    .hapus {
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .keluar {
        background-color: blue;
        color: white;
        cursor: pointer;
        padding: 5px 10px;
        border-radius: 5px;
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

    .modal-body input,
    .modal-body textarea {
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
<div class="modal fade" id="detailKarya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="header">
                    <div><a href="/dashboard" class="keluar"> Keluar</a></div>
                    <div>Detail Karya</div>
                    <div><a href="/karya/{{ $karya->created_at }}/edit" class="hapus"> Edit Postingan</a></div>

                </div>
            </div>
            <div class="post">
                <div class="user-info">
                    <img src="user-avatar.png" alt="User Avatar" width="50">
                    <div>
                        <div><strong>{{ $user->username }}</strong></div>
                        <div>{{ $karya->created_at }}</div>
                    </div>
                </div>
                <div class="post-title">{{ $karya->judulKarya }}</div>
                <div class="post-description">
                    <strong>{{ $karya->jenisKarya }}</strong><br>
                    {{ $karya->deskripsi }}
                </div>
                <img src="storage/{{ $karya->namaFile }}" alt="">

                <div class="comments">
                    <div class="comment">
                        <div class="user-info">
                            <img src="user-avatar.png" alt="User Avatar" width="30">
                            <div>Kevin Aluminium: Wah gambar ini memiliki beragam karakter dengan bentuk, sifat, dan
                                simbolismenya masing-masing.</div>
                        </div>
                        <div class="delete-button">Delete</div>
                    </div>
                    <div class="comment">
                        <div class="user-info">
                            <img src="user-avatar.png" alt="User Avatar" width="30">
                            <div>Zidan Platinum: I love This</div>
                        </div>
                        <div class="delete-button">Delete</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="submit-btn">Ubah</button>
            </div>
        </div>
    </div>
</div>
