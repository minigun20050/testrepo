<?php
$dbhost = "localhost"; 
$dbname = "products";
$dbuser = "root";
$dbpass = "";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn) {
    die("Brak połączenia z bazą danych!!!<br>" . mysqli_connect_error());
}
var_dump($_SERVER['QUERY_STRING']);
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
    <form method="get">
        <div>
            <div><label>Id</label><input type="number" name="find[id]"></div>
            <div><label>Nazwa</label><input type="text" name="find[prod_name]"></div>
            <div><label>Cena</label><input type="number" name="find[price]"></div>
            <div><label>Ilosc</label><input type="number" name="find[quantity]"></div>
            <div><input type="submit"></div>
        </div>
    </form>
<?php
function sortowanie($sort){
    if($sort == 'id' || $sort == 'prod_name' || $sort=='price' || $sort == 'quantity') return $sort; 
    else return 'id';
}
function wyszukiwanie($find) {
    if($find != null) {
        $text = ' WHERE';
        foreach ($find as $k => $v) {
            if($v != ""){
                switch ($k) {
                    case 'prod_name': $text .= ' ' . $k . ' LIKE \'%' . $v . '%\''; break;
                    default : $text .= ' ' . $k . '=\'' . $v . '\'';
                }
            }
        }
        return $text;
    }
}
switch (isset($_GET['dir']) ? $_GET['dir'] : false) {
    case 'asc':
    case 'ASC':
        $query = 'SELECT * FROM products ' . wyszukiwanie(isset($_GET['find']) ? $_GET['find'] : null) . ' ORDER BY '. sortowanie($_GET['sort']) .' ASC';
        break;
    case 'desc':
    case 'DESC':
        $query = 'SELECT * FROM products ' . wyszukiwanie(isset($_GET['find']) ? $_GET['find'] : null) . ' ORDER BY '. sortowanie($_GET['sort']) .' DESC';
        break;
    default:
        $query = 'SELECT * FROM products ' . wyszukiwanie(isset($_GET['find']) ? $_GET['find'] : null) . ' ORDER BY id ASC';
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
    <table>
        <tr>
            <th>
                <a href="index.php?sort=id&amp;dir=<?= (isset($_GET['dir']) && $_GET['dir'] == 'desc') ? 'asc' : 'desc' ?>">
                    ID
                </a>
            </th>
            <th>
                <a href="index.php?sort=prod_name&amp;dir=<?= (isset($_GET['dir']) && $_GET['dir'] == 'desc') ? 'asc' : 'desc' ?>">
                    Nazwa produktu
                </a>
            </th>
            <th>
                <a href="index.php?sort=price&amp;dir=<?= (isset($_GET['dir']) && $_GET['dir'] == 'desc') ? 'asc' : 'desc' ?>">
                    Cena
                </a>
            </th>
            <th>
                <a href="index.php?sort=quantity&amp;dir=<?= (isset($_GET['dir']) && $_GET['dir'] == 'desc') ? 'asc' : 'desc' ?>">
                    Ilość
                </a>
            </th>
        </tr>
<?php
    while($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['prod_name'] ?></td>
            <td><?= $row['price'] ?></td>
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