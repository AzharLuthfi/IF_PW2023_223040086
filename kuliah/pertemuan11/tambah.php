<?php
require('functions.php');

$title = 'Form Tambah Data';

//insert data ketabel mahasiswa ketika tombol diklik
if(isset($_POST['tambah'])) {
if (tambah($_POST) > 0){
    echo"<script>
    alert('data berhasil dimasukan');
    document.location.href = 'index.php';
    </script>";
}

}

require('views/tambah.view.php');



?>