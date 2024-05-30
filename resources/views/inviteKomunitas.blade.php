<!DOCTYPE html>
<html>

<head>
  <title>Undangan Komunitas</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      width: 600px;
      margin: 200px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .search-bar {
      position: relative;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
    }

    .search-bar input {
      flex-grow: 1;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      margin-right: 10px;
    }

    .search-bar i {
      position: absolute;
      top: 12px;
      left: 12px;
      color: #ccc;
    }

    .search-button {
      padding: 10px 20px;
      background-color: #6969ff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .kirim-button {
      background-color: #6969ff;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .kirim-button:hover {
      opacity: 0.9;
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
    <h1>Undangan Komunitas</h1>

    <form class="search-bar">
      <i class="fas fa-search"></i>
      <input type="text" placeholder="Cari Berdasarkan Email">
      <button class="search-button">Cari</button>
    </form>

    <button class="kirim-button">Kirim Undangan Masuk Komunitas</button>
  </div>

  <script>
    function closeNotification() {
      var notification = document.getElementById("notification");
      notification.style.display = "none";
    }
  </script>
</body>

</html>