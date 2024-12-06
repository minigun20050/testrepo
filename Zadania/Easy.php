<?php
function function1($liczba) {
    if ($liczba <= 0) {
        return true;
    } else {
        return false;
    }
}
echo("1) ");
var_dump(function1(0));
?>

<?php
function function2($liczba1, $liczba2) {
    if ($liczba1 == $liczba2) {
        return true;
    } else {
        return false;
    }
}
echo("<br>" . "2) ");
var_dump(function2(1345, 1344));
?>

<?php
function function3($i, $p) {
    return (100 * ($i / $p));
}
echo("<br>" . "3) ");
echo(round((function3(56, 111)), 0) . "%");
?>

<?php
function function4($year) {
    if ($year % 100 == 0) {
        if ($year % 400 == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        return $year % 4 == 0;
    }
}
echo("<br>" . "4) ");
var_dump(function4(2024));
?>

<?php
function function5(...$a) {
    $arr = [];
    array_push($arr, $a);
    return $arr;
}
echo("<br>" . "5) ");
var_dump(function5(1345, 1344, 0, 123));
?>

<?php
function function6($str) {
    return strlen($str);
}
echo("<br>" . "6) ");
echo(function6("123"));
?>

<?php
function function7($n) {
    $arr = [];
    for ($i=0; $i <= $n; $i++) { 
        array_push($arr, $i * $i);
    }
    return array_sum($arr);
}
echo("<br>" . "7) ");
echo(function7(13));
?>