<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('./database.php');
    $id = $_POST["id"];
    $query = "SELECT * FROM db WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $smth = mysqli_fetch_array($result);
    if($smth):
?>
<form method="POST" action="./delete.php"> 
    <label for="i1">Date</label><input name="i1" type="date" value="<?php echo htmlspecialchars($smth["Date"]); ?>">
    <label for="i2">Time</label><input name="i2" type="time" value="<?php echo htmlspecialchars($smth["Time"]); ?>">
    <label for="i3">Data</label><input name="i3" type="text" value="<?php echo htmlspecialchars($smth["Description"]); ?>">
    <input type="hidden" name="id" value="<?php echo $smth["id"]; ?>">
    <input type="submit" value="Delete">
</form>
<a href="http://notik.nameless.pw/Project-main/index.php">Powrót do dodawania wydarzeń</a>
<?php
endif;
}
?>