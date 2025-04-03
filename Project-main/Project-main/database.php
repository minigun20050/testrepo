<?php
$host = "localhost";
$baza = "project";
$user = "root";
$password = "";
$conn = mysqli_connect($host, $user, $password, $baza);
if(!$conn) {
    http_response_code(500);
    die('Cannot initialize a connection to the database: ' . mysqli_error($connection));
}
?> 
