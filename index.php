<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HANZ STORE | Top Up Termurah Sejagat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="navbar">
            <img src="gambar/logo.jpg" alt="HANZ STORE">
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari di HanzStore">
                <button class="search-btn">
                    <img src="logo/icon.png" alt="Search">
                </button>
            </div>
            <button type="button" class="login-btn" onclick="halamanLogin()">Daftar</button>
        </div>
        <h2>Promo Mingguan</h2>
        <div class="slideshow-container">
            <div class="slides fade">
                <img class="promo-img" src="gambar/mlbbSlide.jpg" alt="Promo 1">
            </div>
            <div class="slides fade">
                <img class="promo-img" src="gambar/mlbbSlideKof.jpg" alt="Promo 2">
            </div>
            <div class="slides fade">
                <img class="promo-img" src="gambar/ffSlide.jpg" alt="Promo 3">
            </div>
            <div class="slides fade">
                <img class="promo-img" src="gambar/pubgSlide.jpg" alt="Promo 4">
            </div>
        </div>
        <br>
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </header>
    <div class="game-list">
        <h2>List Game</h2>
        <div class="recommendation-list" style="cursor:pointer;">
            <div class="recommendation-item">
                <img id="mlbb" src="gambar/1.jpg" alt="Mobile Legends">
            </div>
            <div class="recommendation-item">
                <img id="ff" src="gambar/2.jpg" alt="Free Fire">
            </div>
            <div class="recommendation-item">
                <img id="pubg" src="gambar/3.jpg" alt="PUBG">
            </div>
        </div>
    </div>

    <main>
    <section class="keunggulan">
      <h2>Keuntungan Top Up Game di HANZ STORE</h2>
      <ul>
        <li>
          <h3>Mudah, Cepat, dan Aman</h3>
          <p>Proses top up game di HANZ STORE sangat mudah dan cepat. Anda hanya perlu memilih game yang ingin di-top up, memasukkan ID game, dan memilih metode pembayaran. HANZ STORE menggunakan sistem keamanan yang canggih untuk memastikan keamanan transaksi Anda.</p>
        </li>
        <li>
          <h3>Tersedia Berbagai Pilihan Game dan Metode Pembayaran</h3>
          <p>HANZ STORE menyediakan top up game untuk berbagai jenis game, seperti Mobile Legends, Free Fire, PUBG Mobile, Ragnarok M, dan masih banyak lagi. HANZ STORE juga menyediakan berbagai pilihan metode pembayaran, seperti transfer bank, e-wallet, dan minimarket.</p>
        </li>
        <li>
          <h3>Harga Termurah dan Promo Menarik</h3>
          <p>HANZ STORE menawarkan harga top up game yang termurah di Indonesia. HANZ STORE juga sering mengadakan promo menarik, seperti diskon dan cashback.</p>
        </li>
        <li>
          <h3>Layanan Pelanggan yang Ramah dan Cepat</h3>
          <p>Tim customer service HANZ STORE selalu siap membantu Anda jika Anda mengalami kesulitan saat melakukan top up game. Anda dapat menghubungi customer service HANZ STORE melalui live chat, email, atau telepon.</p>
        </li>
      </ul>
    </section>

    <section class="call-to-action">
      <h2>Yuk, top up game di HANZ STORE sekarang!</h2>
      <p>Dapatkan pengalaman top up game yang mudah, cepat, aman, dan murah! Jangan lupa ikuti promo menarik dari HANZ STORE!</p>
      <a href="#">Top Up Sekarang</a>
    </section>
  </main>



    <footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="gambar/logo.jpg" alt="HANZ STORE">
            <p>HANZ STORE - Top Up Termurah Sejagat</p>
        </div>
        <div class="footer-links">
            <h3>Navigasi</h3>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Promo</a></li>
                <li><a href="#">Game List</a></li>
                <li><a href="#">Keunggulan</a></li>
                <li><a href="#">Kontak Kami</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <h3>Ikuti Kami</h3>
            <ul>
                <li><a href="#"><img src="logo/fb.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="logo/ig.png" alt="Instagram"></a></li>
                <li><a href="#"><img src="logo/yt.png" alt="YouTube"></a></li>
            </ul>
        </div>
        <div class="footer-contact">
            <h3>Hubungi Kami</h3>
            <p>Email: support@hanzstore.com</p>
            <p>Telepon: +62 123 456 789</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 HANZ STORE. All rights reserved.</p>
    </div>
</footer>

    <script src="script.js"></script>
</body>
</html>
