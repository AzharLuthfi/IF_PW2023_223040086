<?php
require('functions.php');
$title='Home';
$students = [
    [
        "nama"=> "Muhamad Azhar Luthfiadi",
        "npm"=> "12345",
        "email"=> "Muhamad Azhar@gmail.com",
    ],

    [
        "nama"=> "Muhamad Luthfiadi",
        "npm"=> "67890",
        "email"=> "Muhamad@gmail.com",
    ],
];

// dd($_SERVER["REQUEST_URI"]);
// /IF_PW2023_223040086/kuliah/pertemuan8/
require('views/index.view.php');

?>

