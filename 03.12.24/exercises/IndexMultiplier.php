<?php
$tab = [1, 9, 2, -8, 3, 4, 5, -7, 11, 4];
function indexMultiplier($tab) {
    $wynik = 0;
    for ($i = 0; $i < count($tab); $i++) { 
        $wynik += $tab[$i] * $i;
    }
    return $wynik;
}
echo indexMultiplier($tab);
?>