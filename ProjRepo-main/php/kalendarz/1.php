<?php
$host = "localhost";
$baza = "projekt";
$user = "root";
$password = "";
$poloczenie = mysqli_connect($host, $user, $password, $baza);
if($poloczenie == null) {
    die("błąd w połączeniu");
}
else {
    echo "połączenie zostało nawiązane";
}
?>