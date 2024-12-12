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

<?php
function function6(...$table) {
    $arr = [];
    foreach ($table as $x) {
        if (ctype_digit($x)) {
            array_push($arr, $x);
        }
    }
    return $arr;
}
echo("<br>" . "6) ");
var_dump(function6("6", "53125", "235g4", "gr", "sefheshf"));
?>

<?php
function function7($nazwa) {
    $merkury = ["4.4 km/s", "15840 km/h", "4400 m/s"];
    $wenus = ["10.4 km/s", "37440 km/h", "10400 m/s"];
    $ziemia = ["11.2 km/s", "40320 km/h", "11200 m/s"];
    $mars = ["7.8 km/s", "28080 km/h", "7800 m/s"];
    $jowisz = ["59.5 km/s", "214200 km/h", "59500 m/s"];
    $saturn = ["35.5 km/s", "127800 km/h", "35500 m/s"];
    $uran = ["21.3 km/s", "76680 km/h", "21300 m/s"];
    $neptun = ["23.6 km/s", "84960 km/h", "23600 m/s"];
    switch ($nazwa) {
        case 'merkury':
        case 'Merkury':
            return "Merkury" . "<br>" . $merkury[0] . "<br>" . $merkury[1] . "<br>" . $merkury[2];
            break;
        case 'wenus':
        case 'Wenus':
            return "Wenus" . "<br>" . $wenus[0] . "<br>" . $wenus[1] . "<br>" . $wenus[2];
            break;
        case 'ziemia':
        case 'Ziemia':
            return "Ziemia" . "<br>" . $ziemia[0] . "<br>" . $ziemia[1] . "<br>" . $ziemia[2];
            break;
        case 'mars':
        case 'Mars':
            return "Mars" . "<br>" . $mars[0] . "<br>" . $mars[1] . "<br>" . $mars[2];
            break;
        case 'jowisz':
        case 'Jowisz':
            return "Jowisz" . "<br>" . $jowisz[0] . "<br>" . $jowisz[1] . "<br>" . $jowisz[2];
            break;
        case 'saturn':
        case 'Saturn':
            return "Saturn" . "<br>" . $saturn[0] . "<br>" . $saturn[1] . "<br>" . $saturn[2];
            break;
        case 'uran':
        case 'Uran':
            return "Uran" . "<br>" . $uran[0] . "<br>" . $uran[1] . "<br>" . $uran[2];
            break;
        case 'neptun':
        case 'Neptun':
            return "Neptun" . "<br>" . $neptun[0] . "<br>" . $neptun[1] . "<br>" . $neptun[2];
            break;
        default:
            print "Error";
            break;
    }
}
echo("<br>" . "7) ");
print(function7("ziemia"));
?>

<?php
// h = (v^2 / 2 * g) * sin^2 a
// S = (v^2 / g) * sin*2 a
//v - скорость в м/с  ||  a - угол броска в градусах  ||  g = 9.81
function function8($pocz, $kat) {
    $da = $kat * 2;
    $g = 9.81;
    $h = pow($pocz, 2) / ($g * 2) * pow((sin(deg2rad($kat))), 2);
    $s = (pow($pocz, 2) / $g) * (sin(deg2rad($da)));
    return "H = " . round($h, 2) . "m " . "S = " . round($s, 2) . "m";
}
echo("<br>" . "8) ");
print(function8(10, 5));
?>
