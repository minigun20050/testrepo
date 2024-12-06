<?php
function pandigitalNumbers($number) {
    $str = strval($number);
    $requiredDigits = range(0, 9);
    $digits = array_unique(str_split($str));
    sort($digits);
    $check = array_diff($requiredDigits, $digits);
    if(count($check) == 0) return true;
    else return $check;
}
var_dump(pandigitalNumbers(12347346349687100509732521545256237585953));
?>