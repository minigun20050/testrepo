<?php
require_once('./Blackjack.php');
class BlackjackGame extends Blackjack {
    public function __construct($playerCount, $playerNames = []) {
        if(count($playerNames) == $playerCount) {
            for($i = 0; $i < $playerCount; $i++) {
                $this->setPlayerName($i, $playerNames[$i]);
                $this->setPlayerPoints($i, 0);
                $this->playerCards[$i] = array();
            }
        }
    }
    public function setPlayerName($playerId, $playerName) {
        $this->players[$playerId]['name'] = $playerName;
    }
    public function setPlayerPoints($playerId, $playerPoints) {
        $this->players[$playerId]['points'] = $playerPoints;
    }
    public function getPlayerName($playerId) {
        return $this->players[$playerId]['name'];
    }
    public function getPlayerPoints($playerId) {
        return $this->players[$playerId]['points'];
    }
    public function getAllPlayersPoints() {
        $points = [];
        foreach($this->players as $k => $v) array_push($points, $v['points']);
        return $points;
    }
    public function setDeckAndValues(...$cards) {
        $this->cardsValues = $cards[0];
        foreach($this->cardsAvailable as $v) $this->cardsAvailable[$v] = array_keys($cards[0]);
    }
    public function takeCardForPlayer($playerId) {
        if(!$this->checkCount()) {
            $card = $this->shuffleCard();
            array_push($this->playerCards[$playerId], $card['card']);
            $this->setPlayerPoints($playerId, $this->getPlayerPoints($playerId) + $this->cardsValues[$card['card']]);
            array_splice($this->cardsAvailable[$card['color']], array_search($card['card'], (array)$this->cardsAvailable[$card['color']]), 1);
            return true;
        }
        else return false;
    }
    private function shuffleCard() {
        $color = $this->cardsAvailable[rand(0, 3)];
        $cardFromColor = rand(0, count((array)$this->cardsAvailable[$color]) - 1);
        $card = $this->cardsAvailable[$color][$cardFromColor];
        return [ 'color' => $color, 'card' => $card ];
    }
    protected function checkCount() {
        foreach($this->getAllPlayersPoints() as $v) if($v >= 21) return true;
        return false;
    }
}
?>