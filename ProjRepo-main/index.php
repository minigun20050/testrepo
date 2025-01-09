<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
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
<header>
    <nav>
        <ul>
            <li><a href="#">Dodaj wydarzenie</a></li>
            <li><a href="./kalendarz.php">Kalendarz</a></li>
            <li><a href="./index.html">Strona główna</a></li>
            <li><a href="#">Logowanie</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Dodaj wydarzenie</h1>
    <?php if (isset($_GET['success'])): ?>
    <p style="color: green;">Wydarzenie zostało dodane pomyślnie!</p>
    <?php endif; ?>
    <form method="POST" action="./dodaj_wydarzenie.php">
        <label for="i1">Data</label><input name="i1" type="date">
        <label for="i2">Czas</label><input name="i2" type="time">
        <label for="i3">Dane</label><input name="i3" type="text">
        <input type="submit">
    </form>
    <h2>Lista wydarzeń</h2>
    <table>
        <tr>
            <th>Data</th>
            <th>Czas</th>
            <th>Opis</th>
        </tr>
<?php
$qu = "SELECT * FROM wydarzenia";
$rezultat = mysqli_query($poloczenie, $qu);
while ($iwiersz = mysqli_fetch_array($rezultat)):
?>
    <tr>
        <td><?php echo htmlspecialchars($iwiersz["wydarzenie_data"]); ?></td>
        <td><?php echo htmlspecialchars($iwiersz["wydarzenie_czas"]); ?></td>
        <td><?php echo htmlspecialchars($iwiersz["opis"]); ?></td>
        <!-- Czwarty przycisk do edycji -->
         <td>
            <form method="POST" action="./edytuj_wydarzenie.php">
                <input type="hidden" name="id" value="<?php echo $iwiersz["id"]; ?>">
                <input type="submit" value="Edytuj">
            </form>
        </td>
    </tr>
<?php
endwhile;
?>
    </table>
</main>
</body>
</html>