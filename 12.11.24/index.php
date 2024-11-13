<?php
class Footballteam {
    public $name, $win, $loose, $players;
    public function __construct($name) {
        $this -> name = $name; 
    }
}
class Player {
    public $PlayerName, $birthYear, $height, $weight, $width;
    public function __construct($PlayerName, $birthYear, $height, $weight, $width) {
        $this -> PlayerName = $PlayerName;
        $this -> birthYear = $birthYear;
        $this -> height = $height;
        $this -> weight = $weight;
        $this -> width = $width;
    }
    public function addPlayer($PlayerName, $birthYear, $height, $weight, $width) {
        $player = new Player($PlayerName, $birthYear, $height, $weight, $width);
        array_push($this->players, $player);
    }
}
function get_Win() {
    return $this -> win;
}
function get_Loose() {
    return $this -> loose;
}
function get_Name() {
    return $this -> name;
}
function addWin() {
    $this -> win ++;
    return $this -> win;
}
function addLoose() {
    $this -> loose ++;
    return $this -> loose;
}
function get_PlayerName() {
    return $this -> PlayerName;
}
function get_birthYear() {
    return $this -> birthYear;
}
function get_Height() {
    return $this -> height;
}
function get_Weight() {
    return $this -> weight;
}
function get_Width() {
    return $this -> width;
}
function get_Players() {
    $arr = [];
    foreach($this -> player as $player)
    array_push($arr, array(
        $player -> get_PlayerName();
        $player -> get_birthYear();
        $player -> get_Height();
        $player -> get_Weight();
        $player -> get_Width();
        ))
        return $arr;
}
?>