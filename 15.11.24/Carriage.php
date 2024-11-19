<?php
class Carriage {
    public $type, $volume, $content;
    public function __construct($type, $volume) {
        if ($type == 'P' || $type == 'T') $this->type = $type;
        else throw new Exception('Bledny typ wagonu');
        $this->volume = $volume;
    }
    public function setContent($content) {
        $this->content = $content;
    }
    public function getType() {
        return $this->type;
    }
    public function getVolume() {
        if ($this->type == 'P') return $this->volume.'osob';
        else return $this->volume.'kg';
    }
    public function getContent() {
        return $this->content;
    }
}
?>