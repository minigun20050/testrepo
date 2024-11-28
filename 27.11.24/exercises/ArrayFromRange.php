<?php

function ArrayFromRange($a, $b) {
    $arr = [];
    if($a < $b)
        for ($i = $a; $i <= $b; $i++)
            array_push($arr, $i);
    else 
        for ($i = $b; $i <= $a; $i++)
            array_push($arr, $i);

    return $arr;
}
var_dump(ArrayFromRange(1, 7))
?>