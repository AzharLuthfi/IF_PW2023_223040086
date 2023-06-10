<?php

define('BASE_URL', '/IF_PW2023_223040086/kuliah/pertemuan8/');

function dd($_value)
{
echo"<pre>";
var_dump($_value);
echo"</pre>";
die();
}

function uriIs ($uri) {
return($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? "active" : "";
}


?>