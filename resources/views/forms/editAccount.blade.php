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
<div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Nama User -->
                <h2>Edit Profile</h2>
                <!-- Tombol Close -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/account/{{ session('account')['id'] }}/updateProfile" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="input-group">
                        <!-- Input username -->
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="{{ $pengguna->username }}">
                    </div>
                    <div class="input-group">
                        <!-- Input email -->
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ $pengguna->email }}">
                    </div>
                    <div class="input-group">
                        <!-- Input pp -->
                        <label for="profile">Photo Profile</label>
                        <input type="file" id="profile" name="profile">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="submit-btn">Ubah</button>
            </div>
            </form>
        </div>
    </div>
</div>
