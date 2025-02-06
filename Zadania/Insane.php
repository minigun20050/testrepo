<?php
function function4($str, $numChanger) {
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
            array_push($wynik, chr($suma));
    }
    return implode("", $wynik);
}
echo("<br>" . "4) ");
print(function4('rwtjwrj', 1));
?>

<?php
                                                        //copypaste
// echo("<br>" . "8) ");
// function power($x, $y, $p)
// {
// 	$res = 1; 
// 	$x = $x % $p; 
// 	while ($y > 0)
// 	{
// 		if ($y & 1)
// 			$res = ($res*$x) % $p;
// 		$y = $y>>1;
// 		$x = ($x*$x) % $p;
// 	}
// 	return $res;
// }
// function miillerTest($d, $n)
// {
// 	$a = 2 + rand() % ($n - 4);
// 	$x = power($a, $d, $n);
// 	if ($x == 1 || $x == $n-1)
// 	return true;
// 	while ($d != $n-1)
// 	{
// 		$x = ($x * $x) % $n;
// 		$d *= 2;
// 		if ($x == 1)	 return false;
// 		if ($x == $n-1) return true;
// 	}
// 	return false;
// }
// function isPrime( $n, $k)
// {
// 	if ($n <= 1 || $n == 4) return false;
// 	if ($n <= 3) return true;
// 	$d = $n - 1;
// 	while ($d % 2 == 0)
// 		$d /= 2;
// 	for ($i = 0; $i < $k; $i++)
// 		if (!miillerTest($d, $n))
// 			return false;
// 	return true;
// }
// 	$k = 4; 
// 	echo "All primes smaller than 100: \n";
// 	for ($n = 1; $n < 10; $n++)
// 	if (isPrime($n, $k))
// 		echo $n , " ";
                                                        //copypaste
?>


<?php
// function function8($liczba) {
//     $arr = [];
//     for ($i=1; $i <= $liczba; $i++) { 
//         $q = gmp_init($i);
//         if (gmp_prob_prime($q) == 2) {
//             array_push($arr, $q);
//         }
//     }
//     return $q;
// }
// echo("<br>" . "8) ");
// var_dump(function8(30));
?>