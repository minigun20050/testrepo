<?php
require_once('./BlackjackGame.php');
$bj = new BlackjackGame(2, ['Ala', 'Sierotka']);
$bj->setDeckAndValues(['A' => 11, 'K' => 10, 'Q' => 10, 'J' => 10, '10' => 10, '9' => 9, '8' => 8, '7' => 7, '6' => 6, '5' => 5, '4' => 4, '3' => 3, '2' => 2]);
$nextTurn = true;
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 2; $j++) { 
        if(!$bj->takeCardForPlayer($j)) {
            $nextTurn = false;
            break;
        }
    }
}
var_dump($bj->getAllPlayersPoints());
?>