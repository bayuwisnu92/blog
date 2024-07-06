<?php
require_once(__DIR__ . '/../init/init.php');
$link = mysqli_connect('localhost', 'root', '', 'blogku');

if (!$link) {
    die('Connection error: ' . mysqli_connect_error());
}

// Jika koneksi berhasil, Anda bisa melanjutkan kode di sini.
// Misalnya, Anda bisa menulis echo "Connected successfully";

?>
