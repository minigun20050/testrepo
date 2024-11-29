<?php
function shapedetector($liczba) {
    $a = ['kolo', 'polkolo', 'trojkat', 'czworokat', 'pieciokat', 'szesciokat', 'siedmiokat', 'osmokat', 'dziewieciokat', 'dziesieciokat'];
    if($liczba < 1 || $liczba > 10){
        throw new Exception("bledna wartosc");
    } else {
        return $a[$liczba - 1];
    }
}
try {
    shapedetector(1);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>