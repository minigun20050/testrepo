<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $baza = "projekt";
    $user = "root";
    $password = "";
    $poloczenie = mysqli_connect($host, $user, $password, $baza);
    $id = $_POST["id"];
    $data = $_POST["i1"];
    $czas = $_POST["i2"];
    $dane = $_POST["i3"];
    $query_new = "UPDATE wydarzenia SET opis = '$dane', wydarzenie_czas = '$czas', wydarzenie_data = '$data' WHERE id = '$id'";
    if(mysqli_query($poloczenie, $query_new)) {
        header("Location: index.php?success=1");
        exit();
    }
}
?>