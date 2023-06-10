<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit;
}
require('functions.php'); ?>
<?php
$id = $_GET["id"];
if (hapus($id)) {
    echo "

    <script>
    alert('data berhasil dihapus');
    document.location.herf = 'index.php';
    </script>

    ";
    header('location:index.php');


} else {
    echo "

    <script>
    alert('data gagal dihapus');
    document.location.herf = 'index.php';
    </script>

    ";
}
?>