<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Account</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 400px;
    padding: 20px;
    box-sizing: border-box;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.header h1 {
    font-size: 20px;
    margin: 0;
}

.header .close-btn {
    font-size: 24px;
    cursor: pointer;
}

.profile {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.profile img {
    border-radius: 50%;
    width: 50px;
    height: 50px;
    margin-right: 10px;
}

.profile .name {
    font-size: 16px;
    font-weight: bold;
}

.profile .edit-photo {
    margin-left: auto;
    background-color: #a2b8fc;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    color: white;
    font-size: 14px;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.input-group input,
.input-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

.submit-btn {
    width: 100%;
    background-color: #a2b8fc;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.input-group select {
    appearance: none;
    background: url('data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns%3D%27http%3A//www.w3.org/2000/svg%27 width%3D%2716%27 height%3D%2716%27 viewBox%3D%270 0 16 16%27%3E%3Cpath fill%3D%27%23333%27 d%3D%27M4 6l4 4 4-4z%27/%3E%3C/svg%3E') no-repeat right 10px center;
    background-size: 10px;
    padding-right: 30px;
    cursor: pointer;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Ubah Data Account</h1>
            <!-- tombol silang -->
            <span class="close-btn">&times;</span>
        </div>
        {{-- <div class="profile">
            <!-- foto profil -->
            <img src="profile-picture.png" alt="Profile Picture">
            <div class="name">{{ $pengguna->username }}</div>
            <button class="edit-photo">Ubah Foto</button>
        </div> --}}
        <form action="{{ route('penggunas.update', $pengguna->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group">
                <!-- Input username -->
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ $pengguna->username }}" required>
            </div>
            <div class="input-group">
                <!-- Input email -->
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $pengguna->email }}" required>
            </div>
            <div class="input-group">
                <!-- Input role -->
                <label for="role">Role</label>
                <input type="text" id="role" name="role" value="{{ $pengguna->role }}" required>
            </div>
            <div class="input-group">
                <!-- Input status -->
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="Aktif" {{ $pengguna->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Nonaktif" {{ $pengguna->status == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                </select>
            </div>
            
            <button type="submit" class="submit-btn">Ubah</button>
        </form>
    </div>
</body>
</html>
