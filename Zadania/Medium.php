<?php
function function1($r, $h) {
    return ($r * $r) * pi() * $h;
}
echo("1) ");
echo(round(function1(2, 5), 2) . "kg");
?>

<?php
function function2(...$a) {
    return array_sum($a);
}
echo("<br>" . "2) ");
var_dump(function2(1345, 1, 15, 555));
?>

<?php
// function function3($liczba, $d) {
//     if (condition) {
//         # code...
//     }
// }
// echo("<br>" . "3) ");
// var_dump(function3(1345, 1));
?>

<?php
function function4(...$a) {
    return array_sum($a) / count($a);
}
echo("<br>" . "4) ");
var_dump(function4(1345, 1, 15, 555));
?>

<?php
function function5(...$txt) {
    array_reverse($txt);
    return $txt;
}
echo("<br>" . "5) ");
var_dump(function5("yy", "yep", "tttx", "text?"));
?>

<?php
function function7($liczba) {
    $arr = [];
    for ($i=1; $i <= $liczba; $i++) { 
        if ($liczba % $i == 0) {
            array_push($arr, $i);
        }
    }
    return $arr;
}
echo("<br>" . "7) ");
var_dump(function7(192));
?>

<?php
// function function8(...$liczby) {
//     switch ($liczby) {
//         case '1, 2, 3, 4, 5, 6, 7, 8, 9, 10':
//             return "None";
//             break;
//         case '2, 3, 4, 5, 6, 7, 8, 9, 10':
//             return "1";
//             break;
//         case '1, 3, 4, 5, 6, 7, 8, 9, 10':
//             return "2";
//             break;
//         case '1, 2, 4, 5, 6, 7, 8, 9, 10':
//             return "3";
//             break;
//     }
// }
// echo("<br>" . "8) ");
// var_dump(function8(1, 3, 4, 5, 6, 7, 8, 9, 10));
?>