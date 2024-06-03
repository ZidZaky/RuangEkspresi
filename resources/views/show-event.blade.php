<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="logo.png" alt="Travesia">
          Travesia
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Destination</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Chat</a>
            </li>
          </ul>
          <form class="d-flex">
            <button class="btn btn-outline-primary me-2" type="button">Sign In</button>
            <button class="btn btn-primary" type="button">Sign Up</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="search-bar">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Jakarta → Malang" aria-label="Search">
          <button class="btn btn-primary" type="submit">Cari</button>
        </form>
      </div>

      <div class="bus-schedule">
        <div class="time-place">
          <div class="time">15.00</div>
          <div class="place"><span class="dot"></span>Jakarta </div>
          <div class="terminal">Terminal Pasar Senen</div>
        </div>
        <div class="duration">8 jam</div>
        <div class="time-place">
          <div class="time">22.00</div>
          <div class="place"><span class="end-dot"></span>Malang</div>
          <div class="terminal">Terminal Kota Batu</div>
        </div>
        <div class="price">Rp500.000</div>
      </div>
      <div class="divider"></div>
      <div class="bus-schedule">
        <div class="time-place">
          <div class="time">14.20</div>
          <div class="place"><span class="dot"></span>Jakarta</div>
          <div class="terminal">Terminal Tanjung Priok</div>
        </div>
        <div class="duration">8 jam</div>
        <div class="time-place">
          <div class="time">21.12</div>
          <div class="place"><span class="end-dot"></span>Malang</div>
          <div class="terminal">Terminal Landung Sari</div>
        </div>
        <div class="price">Rp430.000</div>
      </div>
      <div class="divider"></div>
      <div class="bus-schedule">
        <div class="time-place">
          <div class="time">07.00</div>
          <div class="place"><span class="dot"></span>Jakarta</div>
          <div class="terminal">Terminal Pasar Baru</div>
        </div>
        <div class="duration">8 jam</div>
        <div class="time-place">
          <div class="time">14.12</div>
          <div class="place"><span class="end-dot"></span>Malang</div>
          <div class="terminal">Terminal Kota Malang</div>
        </div>
        <div class="price">Rp480.000</div>
      </div>
      <div class="divider"></div>
      <div class="bus-schedule">
        <div class="time-place">
          <div class="time">20.00</div>
          <div class="place"><span class="dot"></span>Jakarta</div>
          <div class="terminal">Terminal Kampung Rambutan</div>
        </div>
        <div class="duration">
            <i class="bi bi-arrow-right arrow-icon"></i>
            7 jam
        </div>
        <div class="time-place">
          <div class="time">03.00</div>
          <div class="place"><span class="end-dot"></span>Malang</div>
          <div class="terminal">Terminal Batu</div>
        </div>
        <div class="price">Rp560.000</div>
      </div>
      <div class="divider"></div>
      <div class="bus-schedule">
        <div class="time-place">
          <div class="time">12.20</div>
          <div class="place"><span class="dot"></span>Jakarta</div>
          <div class="terminal">Terminal SCBD</div>
        </div>
        <div class="duration">8 jam</div>
        <div class="time-place">
          <div class="time">19.20</div>
          <div class="place"><span class="end-dot"></span>Malang</div>
          <div class="terminal">Terminal Arjosari</div>
        </div>
        <div class="price">Rp430.000</div>
        
    </div>

    <style>
      body {
          background-color: #f8f9fa;
      }
      .navbar {
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .navbar-brand img {
          height: 30px;
      }
      .search-bar {
          margin: 20px 0;
      }
      .bus-schedule {
          background-color: #ffffff;
          padding: 10px;
          margin-bottom: 10px;
          border-radius: 10px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          display: flex;
          justify-content: space-between;
          align-items: center;
      }
      .bus-schedule .time-place {
          display: flex;
          flex-direction: column;
          align-items: center;
          flex: 1;
      }
      .bus-schedule .time-place .time {
          font-size: 1.2rem;
          font-weight: bold;
      }
      .bus-schedule .time-place .place {
          font-size: 0.9rem;
          color: #666;
      }
      .bus-schedule .time-place .terminal {
          font-size: 0.75rem;
          color: #999;
      }
      .bus-schedule .duration {
          color: #666;
          text-align: center;
          flex: 0.5;
      }
      .bus-schedule .price {
          font-size: 1rem;
          font-weight: bold;
          color: #333;
          text-align: right;
          flex: 0.5;
      }
      .bus-schedule .time-place .time,
      .bus-schedule .time-place .place  {
          display: flex;
          align-items: center;
          justify-content: center;
      }
      .bus-schedule .time-place .place .dot {
          width: 8px;
          height: 8px;
          border-radius: 50%;
          background-color: #0d6efd;
          margin-right: 3px;
      }
      .bus-schedule .time-place .place .end-dot {
          background-color: #6c757d;
          width: 8px;
          height: 8px;
          border-radius: 50%;
          background-color: #0d6efd;
          margin-right: 3px;
      }
      .divider {
          width: 100%;
          height: 1px;
          background-color: #ddd;
          margin: 5px 0;
      }
  </style>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
