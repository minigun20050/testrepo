<?php
$dbhost = "localhost";
$dbname = "products";
$dbuser = "root";
$dbpass = "";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn) {
    die("Brak połączenia z bazą danych!!!<br>" . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
    <table>
        <tr>
            <th id="tr">
                <a href="index.php?sort=id">
                    ID
                </a>
            </th>
            <th id="tl">Nazwa produktu</th>
            <th id="tr">Cena</th>
            <th>Ilość</th>
        </tr>
<?php
    while($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <td id="tr"><?= $row['id'] ?></td>
            <td id="tl"><?= $row['prod_name'] ?></td>
            <td id="tr"><?= $row['price'] ?></td>
            <td><?= $row['quantity'] ?></td>
        </tr>
<?php
    }
?>
    </table>
<?php
}
mysqli_close($conn);
?>
</body>
</html>