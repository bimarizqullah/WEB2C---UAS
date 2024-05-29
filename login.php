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
        <form>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />

          <label for="password">Kata sandi</label>
          <input type="password" id="password" name="password" required />

          <button
            type="button"
            class="login-button"
            onclick="login()"
          >
            Masuk
          </button>

          <div class="separator">OR</div>

          <button type="button" class="email-button" onclick="halamanRegistrasi()">
            Registrasi 
          </button>
        </form>
      </div>
    </div>
    </div>
    </body>
    <script src="script.js"></script>
  </body>
</html>
