<?php
class Triangle {
    public $a, $b, $c, $p;
    function __construct($a, $b, $c)
    {
        if ($a < $b + $c && $b < $c + $a && $c < $c + $a) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        } else {
            throw new Exception("Nie jest trojkat");
        }
    }
    public function obwod() {
        return $this->a + $this->c + $this->c;
    }
    public function pole() {
        $p = $this->obwod()/2;
        return sqrt($p*($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
}
try {
    $pita = new Triangle(9, 6, 3);
    echo $pita->pole();
} catch(Exception $e) {
    echo $e->getMessage();
}
?>