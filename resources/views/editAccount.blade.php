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
        .input-group input {
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
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Ubah Data Account</h1>
            <!-- tombol silang -->
            <span class="close-btn">&times;</span>
        </div>
        <div class="profile">
            <!-- foto profil -->
            <img src="profile-picture.png" alt="Profile Picture">
            <div class="name">Kevin Aluminium</div>
            <button class="edit-photo">Ubah Foto</button>
        </div>
        <div class="input-group">
            <!-- Input username -->
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Username">
        </div>
        <div class="input-group">
            <!-- Input Password -->
            <label for="password">Kata Sandi</label>
            <input type="password" id="password" placeholder="Kata Sandi">
        </div>
        <button class="submit-btn">Ubah</button>
    </div>
</body>
</html>
