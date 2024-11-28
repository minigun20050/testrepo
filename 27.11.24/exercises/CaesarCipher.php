<?php
function CaesarCipher($str, $numChanger) {
    $costam = str_split($str, 1);
    $wynik = [];
    for($i = 0; $i <= count($costam) - 1; $i++) {
        $ascii = ord($costam[$i]);
        $suma = $ascii+$numChanger;
        if ($suma > 122) {
            array_push($wynichr($suma - 122 + 97));
        }
    }
    return $wynik;
}
var_dump(CaesarCipher('abcd', 3));
?>