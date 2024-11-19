<?php
abstract class Train {
    public $name;
    public $type;
    public $relation;
    protected $carriages = [];
    protected $locomotives = [];
    abstract public function addLocomotive($type, $assignment);
    abstract public function addCarriage($type, $volume);
    abstract public function setRelation($start, $end);
    abstract public function getLocomotives();
    abstract public function getCarriages();
}
?>