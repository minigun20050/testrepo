<?php
function function1($dna) {
    $dna = str_replace("T", "1", $dna);
    $dna = str_replace("A", "2", $dna);
    $dna = str_replace("G", "3", $dna);
    $dna = str_replace("C", "4", $dna);
    $dna = str_replace("1", "A", $dna);
    $dna = str_replace("2", "U", $dna);
    $dna = str_replace("3", "C", $dna);
    $dna = str_replace("4", "G", $dna);
    return $dna;
}
echo("1) ");
print(function1("TAGC"));
?>

<?php
function function2($A) {
    $n = pow(2, $A) - 1;
    return $n;
}
echo("<br>" . "2) ");
print(function2(5));
?>

<?php
function function3($ciag) {
    $whole = explode(" ", $ciag);
    $first = $whole[0];
    $second = $whole[2];
    $ex = 1;
    if (substr_count($ciag, "+")) {
        return $first + $second;
    } elseif (substr_count($ciag, "/") && $second == 0) {
        print "-1 (Idiot)";
    } elseif (substr_count($ciag, "-")) {
        return $first - $second;
    } elseif (substr_count($ciag, "/") && $second != 0) {
        return $first / $second;
    } elseif (substr_count($ciag, "*")) {
        return $first * $second;
    }
}
echo("<br>" . "3) ");
print(function3("12 / 0"));
?>

<?php
function function5($metoda, $liczby) {
    $arr = [];
    $arr = str_split($liczby);
	if ($metoda == "asc") {
		sort($arr);
        return $arr;
	} if ($metoda == "desc") {
        rsort($arr);
        return $arr;
	} else {
		print "asc or desc";
	}
}
echo("<br>" . "5) ");
var_dump(function5("desc", 14297));
?>