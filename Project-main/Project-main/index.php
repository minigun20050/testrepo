<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./stylecalendar.css">
    <script src="./themechange.js"></script>
</head>
<body class="dark">
<?php
require_once('./database.php');
?>
<header>
    <img src="./logo no text.png" alt="logonotexterror" id="logo">
    <div>
            <button id="themeToggle"></button>
            <button id="login">Login</button>
    </div>
</header>
<nav>
    <ul>
        <li><a id="firstnavlink" href="http://notik.nameless.pw/Project-main/kalendarz.php">Calendar</a></li>
        <li><a href="http://notik.nameless.pw/Project-main/index.html">Strona główna</a></li>
    </ul>
</nav>
<main>
    <h1>Dodaj wydarzenie</h1>
    <?php if (isset($_GET['success'])): ?>
    <!-- <p style="color: green;">Wydarzenie zostało dodane pomyślnie!</p> -->
    <?php endif; ?>
    <form method="POST" action="./dodaj_wydarzenie.php">
        <div>
            <label for="i1">Date</label><input id="i1" name="i1" type="date">
        </div>
        <div>
            <label for="i2">Time</label><input id="i2" name="i2" type="time">
        </div>
        <div>
            <label for="i3">Data</label><input id="i3" name="i3" type="text">
        </div>
        <input type="submit" id="mainsubm">
    </form>
    <h2>Lista wydarzeń</h2>
    <table>
        <tr id="list">
            <th id="listdate">Date</th>
            <th id="listtime">Time</th>
            <th id="listdata">Data</th>
            <th></th>
        </tr>
<?php
$qu = "SELECT * FROM db";
$result = mysqli_query($conn, $qu);
while ($smth = mysqli_fetch_array($result)):
?>
    <tr>
        <td><?php echo htmlspecialchars($smth["Date"]); ?></td>
        <td><?php echo htmlspecialchars($smth["Time"]); ?></td>
        <td><?php echo htmlspecialchars($smth["Description"]); ?></td>
        <td id="deleteandsubmit">
            <form method="POST" action="./edytuj_wydarzenie.php">
                <input type="hidden" name="id" value="<?php echo $smth["id"]; ?>">
                <input type="submit" value="Edit" id="submit">
            </form>
            <form method="POST" action="./usun_wydarzenie.php">
                <input type="hidden" name="id" value="<?php echo $smth["id"]; ?>">
                <input type="submit" value="Delete" id="delete">
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