<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$base = 'products';

$conn = mysqli_connect($host, $user, $pass, $base);
if (!$conn) {
    die('Blad polaczenia z baza danych: ' . mysqli_connect_error());
}
?>