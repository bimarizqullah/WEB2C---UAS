<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HANZ STORE | User Session</title>
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
            <div class="user-info">
                <span id="user-name">Welcome, User</span>
                <button type="button" class="logout-btn" onclick="logout()">Logout</button>
            </div>
        </div>
    </header>
    <main>
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
        <h2>Your Session</h2>
        <div class="session-info">
            <p>Username: <span id="session-username">User123</span></p>
            <p>Email: <span id="session-email">user@example.com</span></p>
            <p>Session Start: <span id="session-start">2024-05-29 10:00:00</span></p>
        </div>
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