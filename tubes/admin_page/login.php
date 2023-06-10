<?php
session_start();
require('functions.php');

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];
  $conn = koneksi();

  //ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM users WHERE id= $id");
  $row = mysqli_fetch_assoc($result);

  //cek cookie dan username
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}


if (isset($_SESSION["login"])) {
  header("location:index.php");
  exit;
}



if (isset($_POST['login'])) {
  $conn = koneksi();

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      //set sesion
      $_SESSION['login'] = true;

      //cek remember me
      if (isset($_POST['remember'])) {
        //buat cookienya

        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);

      }

      header("location:index.php");
      exit;
    }
  }
  $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login Travelgo</title>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style-login.css" />

  <!-- Father icons -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <?php if (isset($error)): ?>
    <h4 styles=" color: red; font-style: poppins; background-color: #fff;">Username/Password Salah</h4>
  <?php endif; ?>

  <div class="wrapper">
    <div class="title">login</div>
    <form action="" method="post">
      <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="masukan username" required />
      </div>
      <div class="field">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="masukan password" required />
      </div>
      <div class="pass-link">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" name="remember" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            remember Me
          </label>
        </div>

      </div>
      <button type="submit" name="login" id="login" class="login">login</button>

      <div class="signup-link">
        Belum manjadi anggota<br /><a href="registrasi.php">
          Registrasi Disini!</a>
      </div>
    </form>
  </div>

  <!-- Father icons -->
  <script>
    feather.replace();
  </script>
</body>

</html>