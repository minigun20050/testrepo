<?php
include "index.php";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["i1"];
    $time = $_POST["i2"];
    $data = $_POST["i3"];
    $query = "INSERT INTO db (Description, Date, Time) VALUES('$data', '$date', '$time')";
    if(mysqli_query($conn, $query)) {
        header("Location: dodaj_wydarzenie.php?success=1");
        exit();
    }
}
?>