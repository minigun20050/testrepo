<?php
function sumOfMulti(...$a) {
    $b = 0;
    foreach ($a as $k => $wartosc) {
        $b += $wartosc * $k;
    }
    return $b;
}

echo sumOfMulti(4,1,5,7,3);
?>