<?php
$coords = [
    'x' => [2, 3, 7, 4, 12, 11],
    'y' => [5, 3, 9, 11, 5, 31]
];
function convertCartesian($coords) {
    $cartesian = [];
    for ($i=0; $i < count($cartesian['x']); $i++)
        array_push($cartesian, [$coords['x'][$i], $coords['y'][$i]]);
    return $cartesian;
}
var_dump(convertCartesian($coords));
?>