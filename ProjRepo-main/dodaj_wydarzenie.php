<?php
include "index.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["i1"];
    $czas = $_POST["i2"];
    $dane = $_POST["i3"];
    $query = "INSERT INTO wydarzenia (opis, wydarzenie_data, wydarzenie_czas) VALUES('$dane', '$data', '$czas')";
    if(mysqli_query($poloczenie, $query)) {
        header("Location: dodaj_wydarzenie.php?success=1");
        exit();
    }
}
?>