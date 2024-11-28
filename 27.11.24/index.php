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
$dir = 'exercises';
if (is_dir($dir)) {
    if ($opendir = opendir($dir)) {
?>
    <header>
        <h1>Katalog <?= $dir ?>:</h1>
    </header>
    <nav>
        <ul>
<?php
        while(($file = readdir($opendir)) !== false) {
            if ($file != "." && $file != ".." && $file != "index.php") {
?>
            <li><a href="<?= $dir . '/' . $file ?>"><?= explode('.', $file)[0] ?></a></li>
<?php
            }
        }
?>
        </ul>
    </nav>
<?php
    }
    else {
?>
    <header>
        <h1>Nie można otworzyć katalogu!</h1>
    </header>
<?php
    }
}
else {
?>
    <header>
        <h1>To nie jest katalog!</h1>
    </header>
<?php
}
?>
</body>
</html>