<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 600px;
            margin: 200px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
            display: block;
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
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-left: 5px;
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

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container" id="notification">
        <button class="close-button" onclick="closeNotification()">&times;</button>
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

    <script>
        function closeNotification() {
            var notification = document.getElementById("notification");
            notification.style.display = "none";
        }
    </script>

</body>

</html>
