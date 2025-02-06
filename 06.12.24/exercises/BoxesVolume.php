<?php
$boxes = [
    [2, 3, 2],
    [6, 6, 7],
    [1, 2, 1]
];
function boxesVolume($boxes) {
    $wynik = 0;
    for ($i = 0; $i < count($boxes); $i++)
        $boxes[$i][0]*$boxes[$i][1]*$boxes[$i][2];
    return $wynik;
}
echo boxesVolume($boxes);
?>