<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            width: 600px;
            margin: 200px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .title {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .label {
            display: 10;
            margin-bottom: 5px;
        }

        .input-area {
            margin-bottom: 10px;
        }

        textarea {
            width: 95%;
            height: 80px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
            /* Add this to disable textarea resizing */
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1em;
        }

        .send-button {
            background-color: #708FFF;
            color: white;
        }

        .send-button:hover {
            background-color: #6888fc;
        }

        .cancel-button {
            background-color: #f44336;
            color: white;
        }

        .button-container {
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="user-profile">
            <img src="https://picsum.photos/50/50" alt="User Profile">
            <span>Dhanu W</span>
        </div>

        <div class="title">Permohonan Masuk Komunitas</div>

        <div class="label">Alasan</div>
        <div class="input-area">
            <textarea placeholder="Isikan Mengapa Alasan Anda Bergabung"></textarea>
        </div>

        <div class="button-container">
            <button class="send-button">Send</button>
            <button class="cancel-button">Cancel</button>
        </div>
    </div>

</body>

</html>