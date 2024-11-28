<?php
function Factors($a) {
    $arr = [];
    if($a >= 1) {
    for ($i = 1; $i <= $a; $i++) { 
        $wynik = $a / $i;
        if (is_int($wynik)) {
            array_push($arr, $i);
        }
    }
    } else {
        throw new Exception("Im just a chill guyyy");
    }
    return $arr;
}
try {
    var_dump(Factors(1000000000000000));
} catch (Exception $e) {
    echo $e->getMessage();
}
?>