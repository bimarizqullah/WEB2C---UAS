<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HANZ STORE | Login</title>
    <link rel="stylesheet" href="styles2.css" />
    <link rel="stylesheet" type="text" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="login">
    <div class="login-container">
      <div class="login-left">
        <img src="gambar/logo.jpg" alt="Logo"/>
      </div>
      <div class="login-right">
        <form method="POST" action="process_register.php">
          <label for="username">Masukkan Username</label>
          <input type="text" id="username" name="username" required/>

          <label for="email">Masukkan Email</label>
          <input type="email" id="email" name="email" required/>

          <label for="email_confirm">Konfirmasi Email</label>
          <input type="email" id="email_confirm" name="email_confirm" required />

          <label for="password">Masukkan Kata Sandi</label>
          <input type="password" id="password" name="password" required/>

          <label for="password_confirm">Konfirmasi Kata Sandi</label>
          <input type="password" id="password_confirm" name="password_confirm" required />

          <button type="submit" class="register-button">
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
  </body>
  <script src="script.js"></script>
</html>
