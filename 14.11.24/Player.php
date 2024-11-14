<?php
class Player {
    private $firstName, $lastName, $birthYear, $height, $weight;
    public $game;
    public function __construct($firstName, $lastName, $birthYear, $height, $weight) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthYear = $birthYear;
        $this->height = $height;
        $this->weight = $weight;
    }
    public function getFullName() {
        return (object)array(
            'firstName' => $this->firstName,
            'lastName' => $this->lastName
        );
    }
    public function getAge() {
        $array = (array)$this->getFullName();
        $array['age'] = date("Y") - $this->birthYear;
        return (object)$array;
    }
    public function getHeight() {
        $array = (array)$this->getFullName();
        $array['height'] = $this->height;
        return (object)$array;
    }
    public function getWeight() {
        $array = (array)$this->getFullName();
        $array['weight'] = $this->weight;
        return (object)$array;
    }
    public function getGame() {
        $array = (array)$this->getFullName();
        $array['game'] = $this->game;
        return (object)$array;
    }
    public function getBMI() {
        $array = (array)$this->getFullName();
        $array['BMI'] = $this->weight / $this->height ** 2;
        if ($array['BMI']) {
            
        }
        return (object)$array;
    }
}
?> 