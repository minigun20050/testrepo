<?php
function function8($liczba) {
    $arr = [];
    $tr = true;
    for ($i=2; $i <= $liczba; $i++) { 
        array_push($arr, $tr);
    }
    $arr = array_combine(range(1, count($arr)), $arr);
    // $i = 2;
    // if ($arr[$i] = true) {
    //     while ($i <= $liczba) {
    //         for ($j=pow($i, 2); $j < $liczba; $i**2 + $i, $i**2 + 2 * $i) { 
    //             $arr[$j] = false;
    //         }
    //     }
    // }

    // $i = $arr[0];
    // foreach (range(1, count($arr), $i * 2) as $key) {
    //     unset($arr[$key+1]);
    // }
    // $arr2 = array_merge($arr);

    // for ($a=0; $a < count($arr); $a++) { 
    //     if (($a % $i) == 0) unset ($arr[$i]);
    // }

    // return $;
    return $arr;

    // for ($i < $liczba; $i++) { 
    //     array_push($arr, $i);
    // }
    // foreach (range(1, count($arr), 2) as $key) {
    //     unset($arr[$key]);
    // }
    // $i = $arr[0];
}
echo("<br>" . "8) ");
var_dump(function8(30));
?>