<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/IF_pw2023_223040086/tubes/admin_page/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'myshop') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = $data['nama'];
  $email = $data['email'];
  $password = $data['password'];

  // $gambar = $data['gambar'];
  //upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }


  $query = "INSERT INTO
              clients
            VALUES
              (null, '$nama', '$email', '$password', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);

}

function hapus($id)
{
  $conn = koneksi();
  $query = "DELETE FROM
              clients
            WHERE
            id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah ada gambar yg diupload
  if ($error === 4) {
    echo "
    <script>
    alert('gambar belum di upload');
    </script>
    ";
    return false;
  }

  // cek apakah yg diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "
    <script>
    alert('yang anda upload bukan gambar');
    </script>
    ";
    return false;
  }

  // cek apakah yg diupload terlalu besar
  if ($ukuranFile > 1000000) {
    echo "
    <script>
    alert('ukuran gambar terlalu besar');
    </script>
    ";
    return false;
  }

  //lolos pengecekan, gambar siap diupload
  // generate nama baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
  return $namaFileBaru;

}

function ubah($data)
{
  $conn = koneksi();

  $id = $data["id"];
  $nama = $data['nama'];
  $email = $data['email'];
  $password = $data['password'];
  $gambarlama = $data['gambarlama'];

  //apakah user pilih gambar baru atau tidak

  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarlama;
  } else {
    $gambar = upload();
  }


  $query = "UPDATE
              clients
            SET
              nama = '$nama',
              email = '$email',
              password = '$password',
              gambar = '$gambar'
            WHERE 
              id=$id
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);

}

function registrasi($data)
{
  $conn = koneksi();

  $username = strtolower(stripslashes($data['username']));
  $email = $data['email'];
  $password = mysqli_real_escape_string($conn, $data['password']);


  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM users WHERE username='$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "
    <script>
    alert('username sudah terdaftar');
    </script>
    ";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO
              users
            VALUES
              (null, '$username', '$email', '$password')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}