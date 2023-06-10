<?php
require('functions.php');

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    $conn = koneksi();
    header('location:login.php');

  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrasi Travelgo</title>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/style-login.css" />

  <!-- Father icons -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <div class="wrapper">
    <div class="title">Registrasi</div>
    <form action="" method="post">
      <div class="field">
        <label for="">Username</label>
        <input type="text" name="username" id="username" placeholder="masukan nama kamu" required />
      </div>
      <div class="field">
        <label for="">Email</label>
        <input type="email" name="email" id="email" placeholder="masukan email" required />
      </div>
      <div class="field">
        <label for="">Password</label>
        <input type="password" name="password" id="password" placeholder="masukan password" required />
      </div>
      <button type="submit" name="register" id="register" class="sign_up">
        Registrasi
      </button>
      <div class="signup-link">
        Sudah memiliki akun<br /><a href="login.php"> login Disini!</a>
      </div>
    </form>
  </div>

  <!-- Father icons -->
  <script>
    feather.replace();
  </script>
</body>

</html>