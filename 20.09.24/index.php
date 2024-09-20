<?php
$fib = [0, 1];
// $i = 2;

// for($i = 2; $i < 10; $i++) {
//     $val = $fib[count($fib) - 2] + $fib[count($fib) - 1];
//     array_push($fib, $val);
// }

// while ($i < 10) {
//     $i++;
//     $val = $fib[count($fib) - 2] + $fib[count($fib) - 1];
//     array_push($fib, $val);
// }

// do {
//     $val = $fib[count($fib) - 2] + $fib[count($fib) - 1];
//     array_push($fib, $val);
//     $i++;
// } while ($i < 10);	

foreach($fib as $k => $v) {
    echo ($k + 1) . ' = ' . $v . '<br>';
}
?>