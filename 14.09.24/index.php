<?php
$a = 123;
$b = 321;
var_dump($a & $b);
$c = 273;
$d = 137;
echo '<br>';
var_dump($c | $d);
echo '<br>';
var_dump($a ^ $c);
echo '<br>';
var_dump(~$a);
echo '<br>';
var_dump(~$b);
echo '<br>';
var_dump(~$c);
echo '<br>';
var_dump(~$d);
echo '<br>';
echo decbin($a) . ' << 4 = ' . decbin($a << 4);
echo '<br>';
echo decbin($d) . ' >> 2 = ' . decbin($a << 2);
echo '<br>';
echo $a <=> $b;
echo '<br>';
echo $b <=> $a;
echo '<br>';
echo $a <=> $a;
?>