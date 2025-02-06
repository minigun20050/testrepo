<?php
$a = [];

function reverse($a) {
    $arr = [];
    for($i = count($a) - 1; $i > 0; $i --){
        array_push($arr, $a[$i]);
    }
    return $arr;
}

var_dump(reverse([1, 2, 3, 4, 5, 6]));
reverse($a);
?>