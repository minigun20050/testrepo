<?php
function IsSymmetrical($a) {
    $length = strlen((string)$a);
    if($length % 2 == 0) {
        $arrFull = str_split($a, 1);
        $arrFHalf = [];
        $arrSHalf = [];
        $half = ($length / 2);
        foreach($arrFull as $key => $b)
            ($key < $half) ? array_push($arrFHalf, $b) : array_push($arrSHalf, $b);
        $arrSHalf = array_reverse($arrSHalf);
        foreach ($arrSHalf as $k => $c)
            if ($arrSHalf[$k] == $c) return true;
        return false;
    }
    else return false;
}
var_dump(IsSymmetrical(17171717));
?>