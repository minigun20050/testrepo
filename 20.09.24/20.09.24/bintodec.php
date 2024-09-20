<?php
$bin = '10011101';
$binval = [128, 64, 32, 16, 8, 4, 2, 1];
$dec = 0;
for($i = 0; $i < strlen($bin); $i++) {
    if($bin[$i] == 1)
        $dec += $binval[$i];
}
echo $dec;
?>