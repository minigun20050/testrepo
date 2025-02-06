<?php
require_once('./connect.php');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <th>ID</th>
        <th>Nazwa</th>
        <th>Cena</th>
        <th>Ilość</th>
        <th>Wartość</th>
        <th>Akcje</th>
        </tr>
<?php
$data = mysqli_query($conn, 'SELECT * FROM products LIMIT 10');
$rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
foreach ($rows as $value) {
?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['prod_name'] ?></td>
            <td><?= $value['price'] ?></td>
            <td><?= $value['quantity']?></td>
            <td><?= $value['price'] * $value['quantity'] ?></td>
            <td>
                <a href="index.php?cmd=edit&amp;id=<?= $value['id'] ?>">Zmień</a>
            </td>
        </tr>
<?php
}
?>
    </table>
    <table>
        <tr>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Produkty</th>
        </tr>
<?php
$list = mysqli_query($conn , 'SELECT id, first_name, last_name FROM users WHERE country = "Poland"');
$rows1 = mysqli_fetch_all($data, MYSQLI_ASSOC);
foreach ($rows1 as $value) {
    $prodid = mysqli_query($conn, 'SELECT id_product FROM user_products WHERE id_user = ' . $value['id']);
    $rows2 = mysqli_fetch_all($data, MYSQLI_ASSOC);
?>
    <tr>
        <td><?= $value['first_name'] ?></td>
        <td><?= $value['last_name'] ?></td>
        <td>
<?php
foreach ($rows2 as $value) {
    $prod = mysqli_query($conn, 'SELECT prod_name FROM products');
    
}
?>
        </td>
    </tr>
<?php
}
?>
</table>
</body>
</html>