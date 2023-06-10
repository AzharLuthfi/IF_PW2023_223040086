<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit;
}
require('functions.php');

$title = 'Dashboard';

if (isset($_GET['button-search'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM 
            clients
        WHERE
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%' 

        ";
    $clients = query($query);
} else {
    $clients = query("SELECT * FROM clients");
}


require('views/index.view.php');