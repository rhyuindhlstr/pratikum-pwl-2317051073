<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kartu Profil</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #ffb6c1, #ffc1e3, #ffd6eb);
      overflow: hidden;
    }

    /* Background bubble animasi */
    .bubble {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.2);
      animation: float 10s infinite ease-in-out;
    }

    .bubble:nth-child(1) { width: 120px; height: 120px; bottom: 10%; left: 10%; animation-duration: 12s; }
    .bubble:nth-child(2) { width: 80px; height: 80px; top: 15%; right: 15%; animation-duration: 8s; }
    .bubble:nth-child(3) { width: 150px; height: 150px; top: 30%; left: 25%; animation-duration: 15s; }

    @keyframes float {
      0%, 100% { transform: translateY(0) scale(1); }
      50% { transform: translateY(-30px) scale(1.05); }
    }

    .card {
      text-align: center;
      background: rgba(255, 255, 255, 0.35);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      padding: 40px 30px;
      border-radius: 25px;
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
      max-width: 380px;
      width: 100%;
      color: #333;
      position: relative;
      z-index: 1;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 18px 45px rgba(0, 0, 0, 0.2);
    }

    .profile-img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto 15px;
      border: 5px solid rgba(255, 255, 255, 0.7);
    }

    .profile-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h2 {
      margin: 10px 0 5px;
      font-size: 24px;
      font-weight: bold;
      color: #222;
    }

    p {
      margin: 0;
      font-size: 15px;
      color: #555;
    }

    .info {
      background: rgba(255, 255, 255, 0.55);
      margin: 12px 0;
      padding: 12px;
      border-radius: 12px;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      font-size: 15px;
      color: #333;
    }

    .social-icons {
      margin-top: 18px;
    }

    .social-icons a {
      text-decoration: none;
      margin: 0 12px;
      font-size: 24px;
      color: #333;
      transition: transform 0.2s ease, color 0.2s ease;
    }

    .social-icons a:hover {
      transform: scale(1.3);
      color: #ff4d94;
    }

    /* Tombol tambahan */
    .btn {
      display: inline-block;
      margin-top: 18px;
      padding: 10px 18px;
      background: linear-gradient(135deg, #ff80aa, #ffb6d9);
      color: white;
      border-radius: 25px;
      font-size: 14px;
      text-decoration: none;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn:hover {
      background: linear-gradient(135deg, #ff6699, #ff99cc);
      transform: scale(1.05);
    }
  </style>
  <!-- CDN Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <!-- background bubble -->
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>

  <div class="card">
    <!-- Foto profil -->
    <div class="profile-img">
      <img src="{{ asset('profil.jpg') }}" alt="Foto Profil">
    </div>
    
    <!-- Nama dan deskripsi -->
    <h2>Rahayu</h2>
    <p>Mahasiswa Ilmu Komputer | Universitas Lampung</p>

    <!-- Informasi -->
    <div class="info"><span>Nama:</span> <span>Rahayu</span></div>
    <div class="info"><span>Kelas:</span> <span>B</span></div>
    <div class="info"><span>NPM:</span> <span>2317051073</span></div>

    <!-- Ikon sosial -->
    <div class="social-icons">
      <a href="#"><i class="fab fa-tiktok"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-github"></i></a>
    </div>

    <!-- Tombol tambahan -->
    <a href="#" class="btn">Contact Me</a>
  </div>
</body>
</html>