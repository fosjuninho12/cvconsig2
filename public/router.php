<?php
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path;

// se existe arquivo físico (css/js/img/etc), deixa o servidor servir
if ($path !== "/" && file_exists($file) && !is_dir($file)) {
    return false;
}

// caso contrário, cai no app
require __DIR__ . "/index.php";
