<?php
// function kalkulator($liczba1, $liczba2, $operator) {
//     if($operator == '+') {
//         echo($liczba1+$liczba2);
//     }
//     if($operator == '-') {
//         echo($liczba1-$liczba2);
//     }
//     if($operator = '/') {
//         if ($liczba2 == 0) {
//             echo('pamietaj nie dzielic przez zero');
//         } else {
//             echo($liczba1 / $liczba2);
//         }
//     }
//     if($operator == '*') {
//         echo($liczba1*$liczba2);
//     }
//     if($operator == '**') {
//         echo($liczba1**$liczba2);
//     }
// }
// kalkulator(10000, 1, '**');

class Calculator {
    public $liczba1, $liczba2;
    public function __construct($liczba1, $liczba2)
    {
        $this->liczba1 = $liczba1;
        $this->liczba2 = $liczba2;    
    }
    public function dodawanie() {
        return $this->liczba1 + $this->liczba2;
    }
    public function odejmowanie() {
        return $this->liczba1 - $this->liczba2;
    }
    public function mnozenie() {
        return $this->liczba1 * $this->liczba2;
    }
    public function dzielenie() {
        if($this->liczba2 == 0) {
            return "Nie mozna podzielic na 0";
        } else {
        return $this->liczba1 / $this->liczba2;
        }
    }
}
$oblicznia = new Calculator(10,2933);
echo $oblicznia->mnozenie();
echo $oblicznia->dzielenie();
echo $oblicznia->dodawanie();
echo $oblicznia->odejmowanie();
?>