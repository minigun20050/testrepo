<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $baza = "projekt";
    $user = "root";
    $password = "";
    $poloczenie = mysqli_connect($host, $user, $password, $baza);
    $id = $_POST["id"];
    $query = "SELECT * FROM wydarzenia WHERE id = $id";
    $rezultat = mysqli_query($poloczenie, $query);
    $iwiersz = mysqli_fetch_array($rezultat);
    if($iwiersz):
?>
<form method="POST" action="./update.php"> 
    <label for="i1">Data</label><input name="i1" type="date" value="<?php echo htmlspecialchars($iwiersz["wydarzenie_data"]); ?>">
    <label for="i2">Czas</label><input name="i2" type="time" value="<?php echo htmlspecialchars($iwiersz["wydarzenie_czas"]); ?>">
    <label for="i3">Dane</label><input name="i3" type="text" value="<?php echo htmlspecialchars($iwiersz["opis"]); ?>">
    <input type="hidden" name="id" value="<?php echo $iwiersz["id"]; ?>">
    <input type="submit" value="Edytuj">
</form>
<a href="./index.php">Powrót do dodawania wydarzeń</a>
<?php
endif;
}
?>