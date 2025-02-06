<?php
function CaesarCipher($str, $numChanger) {
    $costam = str_split($str, 1);
    $wynik = [];
    for($i = 0; $i <= count($costam) - 1; $i++) {
        $ascii = ord($costam[$i]);
        $suma = $ascii+$numChanger;
        if (($ascii >= 97 && $ascii <= 122) && $suma > 122)
            array_push($wynik, chr($suma - 122 + 97));
        elseif (($ascii >= 65 && $ascii <= 90) && $suma > 90)
            array_push($wynik, chr($suma - 90 + 65));
        else
            array_push($wynik, chr($ascii));
    }
    return implode("", $wynik);
}
var_dump(CaesarCipher('aFbcdR', 3));
?>