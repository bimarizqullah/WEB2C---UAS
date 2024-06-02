<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HANZ STORE | Free Fire</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <div class="navbar">
            <button class="openbtn" onclick="openNav()">☰</button>
            <img id="logo" src="gambar/logo.jpg" alt="HANZ STORE" style="cursor:pointer">
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari di HanzStore">
                <button class="search-btn">
                    <img src="logo/icon.png" alt="Search">
                </button>
            </div>
            <button type="button" class="login-btn" onclick="halamanLogin()">Daftar</button>
        </div>
        <h2 style="text-align:center">Promo Mingguan</h2>
        <div class="slideshow-container">
            <div class="slides fade">
                <img class="promo-img" src="gambar/ffSlide.jpg" alt="Promo 1">
            </div>
            <div class="slides fade">
                <img class="promo-img" src="gambar/ffSlide2.png" alt="Promo 2">
            </div>
        </div>
        <br>
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
    </header>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Beranda</a>
        <a href="#">Promo</a>
        <a href="#">Game List</a>
        <a href="#">Keunggulan</a>
        <a href="#">Testimoni</a>
    </div>
    <h2 style="text-align:center">__________________________________________________________________________</h2>
   <form action="checkoutFf.php" method="POST" id="confirm">
    <div class="container">
        <div class="user-id-section">
            <img src="logo/no1.png" alt="nomor">
            <h2>Masukkan User ID</h2>
            <input type="text" id="user-id" name="user_id" placeholder="User ID" required>
            <input type="text" id="user-name" name="username" placeholder="Username" required>
            <button type="button" onclick="checkUserId()">?</button>
        </div>
        <div class="top-up-section">
            <img src="logo/no2.png" alt="nomor">
            <h2>Pilih Nominal Top Up</h2>
            <div class="item-info">
                <span id="item-info">9,482 item dibeli dalam satu jam terakhir</span>
            </div>
            <div class="items">
                <div class="item" onclick="selectItem('5 diamonds', 901)">
                    <h3>5 Diamonds</h3>
                    <p>Rp. 901</p>
                </div>
                <div class="item" onclick="selectItem('12 diamonds', 1802)">
                    <h3>12 Diamonds</h3>
                    <p>Rp. 1.802</p>
                </div>
                <div class="item" onclick="selectitemff('50 diamonds', 7207)">
                    <h3>50 Diamonds</h3>
                    <p>Rp. 7.207</p>
                </div>
                <div class="item" onclick="selectitemff('70 diamonds', 9009)">
                    <h3>70 Diamonds</h3>
                    <p>Rp. 9.009</p>
                </div>
                <div class="item" onclick="selectitemff('140 diamonds', 18018)">
                    <h3>140 Diamonds</h3>
                    <p>Rp. 18.018</p>
                </div>
                <div class="item" onclick="selectitemff('355 diamonds', 45045)">
                    <h3>355 Diamonds</h3>
                    <p>Rp. 45045</p>
                </div>
                <div class="item" onclick="selectitemff('720 diamonds', 90090)">
                    <h3>720 Diamonds</h3>
                    <p>Rp. 90.090</p>
                </div>
                <div class="item" onclick="selectitemff('1450 diamonds', 180180)">
                    <h3>1450 Diamonds</h3>
                    <p>Rp. 180.180</p>
                </div>
                <div class="item" onclick="selectItem('2180 diamonds', 270270)">
                    <h3>2180 Diamonds</h3>
                    <p>Rp. 270.270</p>
                </div>
                <div class="item" onclick="selectItem('3640 diamonds', 450450)">
                    <h3>3640 Diamonds</h3>
                    <p>Rp. 450.450</p>
                </div>
                <div class="item" onclick="selectItem('7290 diamonds', 900901)">
                    <h3>7290 Diamonds</h3>
                    <p>Rp. 900.901</p>
                </div>
                <div class="item" onclick="selectItem('36500 diamonds', 4504505)">
                    <h3>36500 Diamonds</h3>
                    <p>Rp. 4.504.505</p>
                </div>
                <div class="item" onclick="selectItem('73100 diamonds', 9009009)">
                    <h3>73100 Diamonds</h3>
                    <p>Rp. 9.009.009</p>
                </div>
            </div>
        </div>
        <div class="checkout-section">
            <img src="logo/no3.png" alt="nomor">
            <h2>Pilih Metode Pembayaran</h2>
            <div class="checkout-option" onclick="selectCheckoutff('Shopee')">
                <img src="logo/shopee.png" alt="shopeeLogo">
                <h3>Shopee</h3>
            </div>
            <div class="checkout-option" onclick="selectCheckoutff('Gopay')">
                <img src="logo/gopay.png" alt="gopayLogo">
                <h3>Gopay</h3>
            </div>
            <div class="checkout-option" onclick="selectCheckoutff('Dana')">
                <img src="logo/dana.png" alt="danaLogo">
                <h3>Dana</h3>
            </div>
        </div>
        <div class="order">
            <img src="logo/no3.png" alt="nomor">
            <h2>Pemesanan</h2>
            <button id="notifyButton" type="button" class="order-btn" onclick="showPopup()">Pesan</button>
            <div id="overlay" class="overlay"></div>
                <div id="popup" class="popup">
                    <h2>Konfirmasi Pemesanan</h2>
                    <p>Id: <span id="userIdSpanff"></span></p>
                    <p>Username: <span id="usernameSpanff"></span></p>
                    <p>Kategori: <span id="itemnameSpanff"></span></p>
                    <p>Harga: <span id="priceSpanff"></span></p>
                    <p>Metode Pembayaran: <span id="paymentMethodSpanff"></span></p>
                    <div class="classButton">
                    <button type="button" id="closeButton" class="order-btn">Batalkan Pesanan</button>
                    <button type="button" id="closeButton2" onclick="confirmOrderff()" class="order-btn">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="item_name" id="hidden-item-name" required>
        <input type="hidden" name="price" id="hidden-price" required>
        <input type="hidden" name="payment_method" id="hidden-payment-method" required>
    </div>
</form>

    <h2 style="text-align:center">__________________________________________________________________________</h2>
    

        <main>
            <section class="keunggulan">
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

            <section class="testimoni">
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
    </di>
    </div>
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
                    <li><a href="index.php #game-list">Game List</a></li>
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
                <p>Email: support@hanzstore.com</p>
                <p>Telepon: +62 812 3456 789</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 HANZ STORE. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
    