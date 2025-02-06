<?php
function factorial($a) {
    $t = [
        'wynik'=> 1,
        'skladniki' => []
    ];
    for ($i = $a; $i >= 1; $i--) { 
        array_push($t['skladniki'], $i);
        $t['wynik'] *= $i;
    }
    return $t;
}
var_dump(factorial(5));
?>