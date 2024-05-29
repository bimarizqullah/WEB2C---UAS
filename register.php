<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HANZ STORE | Register</title>
    <link rel="stylesheet" href="styles2.css" />
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="register">
        <div class="register-container">
            <div class="register-left">
                <img src="gambar/logo.jpg" alt="Logo"/>
            </div>
            <div class="register-right">
                <form>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required />

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required />

                    <label for="password">Kata sandi</label>
                    <input type="password" id="password" name="password" required />

                    <label for="confirm-password">Konfirmasi Kata sandi</label>
                    <input type="password" id="confirm-password" name="confirm-password" required />

                    <button type="button" class="register-button" onclick="register()">
                        Daftar
                    </button>

                    <div class="separator">OR</div>

                    <button type="button" class="login-button" onclick="halamanLogin()">
                        Masuk
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
