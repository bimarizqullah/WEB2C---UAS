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
            <button class="openbtn" onclick="openNav()">☰</button>
            <img src="gambar/logo.jpg" alt="HANZ STORE" style="cursor:pointer">
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari di HanzStore">
                <button class="search-btn">
                    <img src="logo/icon.png" alt="Search">
                </button>
            </div>
            <button type="button" class="login-btn" onclick="halamanLogin()">Daftar</button>
        </div>
        <h2 id="promo">Promo Mingguan</h2>
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
                <img class="promo-img" src="gambar/ffSlide2.png" alt="Promo 4">
            </div>
            <div class="slides fade">
                <img class="promo-img" src="gambar/pubgSlide.jpg" alt="Promo 5">
            </div>
            <div class="slides fade">
                <img class="promo-img" src="gambar/pubgSlide2.jpg" alt="Promo 6">
            </div>
        </div>
        <br>
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
        </div>
    </header>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Beranda</a>
        <a href="#promo">Promo</a>
        <a href="#game-list">Game List</a>
        <a href="#keunggulan">Keunggulan</a>
        <a href="#testimoni">Testimoni</a>
    </div>

    <div id="main">
        <div  id="game-list" class="game-list">
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
            <section id="keunggulan" class="keunggulan">
                <h2>Keunggulan Top Up Game di HANZ STORE</h2>
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

            <section id="testimoni"  class="testimoni">
                <h2>Testimoni Pelanggan</h2>
                <div class="testimoni-item">
                    <p class="testimoni-isi">"Top up game di HANZ STORE itu mudah banget! Cuma beberapa klik, game saya sudah di-top up. Harganya juga murah dan banyak promonya. Pokoknya recommended banget!"</p>
                    <p class="testimoni-nama">- Budi, Jakarta</p>
                </div>
                <div class="testimoni-item">
                    <p class="testimoni-isi">"Saya selalu top up game di HANZ STORE karena prosesnya cepat dan aman. Customer servicenya juga ramah dan membantu. Terima kasih HANZ STORE!"</p>
                    <p class="testimoni-nama">- Ani, Surabaya</p>
                </div>
                <div class="testimoni-item">
                    <p class="testimoni-isi">"HANZ STORE itu tempat terbaik untuk top up game. Harganya murah, promonya banyak, dan pelayanannya memuaskan. Saya puas banget!"</p>
                    <p class="testimoni-nama">- Caca, Bandung</p>
                </div>
            </section>
        </main>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="gambar/logo.jpg" alt="HANZ STORE">
                <p>HANZ STORE - Top Up Termurah Sejagat</p>
            </div>
            <div class="footer-links">
                <h3>Navigasi</h3>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="#promo">Promo</a></li>
                    <li><a href="#game-list">Game List</a></li>
                    <li><a href="#keunggulan">Keunggulan</a></li>
                    <li><a href="#testimoni">Testimoni</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Ikuti Kami</h3>
                <ul>
                    <li><a href="https://www.facebook.com/"><img src="logo/fb.png" alt="Facebook"></a></li>
                    <li><a href="https://www.instagram.com/farhanrmdhan__?igsh=Z21yNHh2eG1lcGF6"><img src="logo/ig.png" alt="Instagram"></a></li>
                    <li><a href="https://youtu.be/melkrLge3WY?si=lyS1pCDCBoOdP0JO"><img src="logo/yt.png" alt="YouTube"></a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Hubungi Kami</h3>
                <p>Email: @hanzstore.com</p>
                <p>Telepon: +62 881 036 357 795 </p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 HANZ STORE. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
