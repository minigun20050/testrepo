<?php
require_once('./Train.php');
require_once('./Locomotive.php');
require_once('./Carriage.php');
class TrainSet extends Train {
    public function __construct($name, $type)
    {
        $this->name = $name;
        if($type == 'P' || $type == 'ZT') $this->type = $type;
        else throw new Exception('Bledny typ pojazdu');
    }
    public function addLocomotive($type, $assignment) {
        if($this->type == 'P') array_push($this->locomotives, new Locomotive($type, $assignment));
        else throw new Exception('Typ ZT nie moze dolaczyc lokomotywy');
    }
    public function addCarriage($type, $volume) {
        if($this->type == 'P') array_push($this->carriages, new Carriage($type, $volume));
        else throw new Exception('Typ ZT nie moze dolaczyc wagonu');
    }
    public function setRelation($start, $end) {
        $this->relation = [$start, $end];
    }
    public function getLocomotives() {
        if($this->type == 'ZT') return $this->name;
        else return $this->locomotives;
    }
    public function getCarriages() {
        if($this->type == 'ZT') return $this->name;
        else return $this->carriages;
    }
}
?>