<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit;
}
require('functions.php');

$title = 'Form Update Data';

$id = $_GET["id"];

$client = query("SELECT * FROM clients WHERE id = $id")[0];


//insert data ketabel mahasiswa ketika tombol diklik
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
    alert('data berhasil dimasukan');
    document.location.href = 'index.php';
    </script>";
    }

}
require('views/update.view.php');



?>