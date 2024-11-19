<?php
class Locomotive {
    private $type, $assignment;
    public $velocity, $lenght, $weight;
    public $engineStarted = false;
    public function __construct($type, $assignment) {
        if($type == 'S' || $type == 'P' || $type == 'E') $this->type = $type;
        else throw new Exception('Bledny typ lokomotywy');

        if ($type == 'S' || $type == 'E') {
            if ($assignment == 'M' || $assignment == 'P' || $assignment == 'U' || $assignment == 'T') $this->assignment = $assignment;
            else throw new Exception('Bledne przypisanie lokomotywy');
        }
        else {
            if($assignment == 'O' || $assignment == 'P' || $assignment == 'T') $this->assignment = $assignment;
        }
        
    }
    public function startEngine() {
        $this->engineStarted = true;
    }
    public function stopEngine() {
        $this->engineStarted = false;
    }
    public function getTypeAssignment() {
        return $this->type.$this->assignment;
    }
}
?>