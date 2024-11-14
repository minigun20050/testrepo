<?php
require_once('./Player.php');
$player1 = new Player('Ala', 'Makota', rand(1900, 2000), rand(150.210), rand(50, 100));
$player2 = new Player('Marysia', 'Sierotka', rand(1900, 2000), rand(150.210), rand(50, 100));
$player3 = new Player('Jakis', 'Random', rand(1900, 2000), rand(150.210), rand(50, 100));
$player1->game = 'LoL';
$player2->game = 'CS';
$player3->game = 'HL';
$players = [$player1, $player2, $player3];
foreach($players as $player) {
    var_dump($player->getAge());
    var_dump($player->getGame());
}
?>