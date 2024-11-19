<?php
abstract class Blackjack {
    /**
     * Tablica graczy.
     * Zawiera informacje o graczu w postaci imienia.
     * Dodatkowo tablica zawiera informacje o aktualnej ilości punktów.
     * Nie może być modyfikowana podczas gry!
     * Jej modyfikacja powoduje zakończenie aktualnej gry i rozpoczęcie nowej.
     * Przykładowo dla dwójki graczy:
     * $players = [
     *   0 => ['name' => 'Jan Niezbędny', 'points' => 0],
     *   1 => ['name' => 'Piotr Potrzebny', 'points' => 0]
     * ];
     */
    protected $players = [];
    /**
     * Tablica wielowymiarowa kart posiadanych przez graczy.
     * Pierwszym wymiarem jest indeks z tablicy graczy, a drugim lista kart posiadanych przez gracza.
     */
    protected $playerCards = [];
    /**
     * Lista dostępnych kart.
     * Każdy kolor zawiera na początku rozgrywki tyle samo kart.
     * Lista kart ustalana jest na podstawie tego, co zostanie ustawione za pomocą metody setDeckAndValues().
     * Tablice zawierają jedynie informację o typie karty.
     * Dane z tej tablicy są usuwane w momencie ich wylosowania przez gracza.
     * Pamiętaj, że w talii kart są 4 kolory: diamonds, hearts, clubs, spades i w każdym kolorze są te same typy kart.
     */
    protected $cardsAvailable = [
        'diamonds',
        'hearts',
        'clubs',
        'spades'
    ];
    /**
     * Asocjacyjna tablica (słownik) jednowymiarowa zawierająca wartości kart.
     * Tablica ustawiana jest na podstawie metody setDeckAndValues().
     * Format zapisu:
     * 'Karta' => Wartość
     */
    protected $cardsValues = [];
    /**
     * Ustawienie talii kart wraz z wartościami poszczególnych kart.
     * Według ustawień w tej metody wypełniana jest tablica dostępnych kart oraz rozliczane są punkty dla graczy.
     * 
     * Dostępne karty:
     * A, K, Q, J, 10, 9, 8, 7, 6, 5, 4, 3, 2
     * 
     * Domyślną wartością dla kart oznaczonych liczbą jest ta liczba.
     * Domyślną wartością dla figur (K, Q, J) jest 10.
     * Figura A może mieć domyślną wartość 1 lub 11.
     * 
     * @return null
     */
    abstract public function setDeckAndValues(...$cards);
    /**
     * Metoda ustawiająca nazwę gracza.
     * Po ustawieniu wprowadza informację do tablicy graczy.
     * 
     * @param int $playerId
     * @param string $playerName
     * 
     * @return null
     */
    abstract public function setPlayerName($playerId, $playerName);
    /**
     * Metoda ustawiająca ilość punktów gracza.
     * Po ustawieniu wprowadza informację do tablicy graczy.
     * 
     * @param int $playerId
     * @param string $playerPoints
     * 
     * @return null
     */
    abstract public function setPlayerPoints($playerId, $playerPoints);
    /**
     * Pobierz kartę dla gracza.
     * Metoda ma za zadanie wylosować kartę, dodać do puli kart gracza, dodać punkty za kartę do punktacji gracza, a następnie usunąć ją z listy dostępnych.
     * @param int $playerId
     * 
     * @return null
     */
    abstract public function takeCardForPlayer($playerId);
    /**
     * Metoda sprawdzająca aktualną punktację.
     * Jeśli którykolwiek z graczy przekroczy limit 21 punktów, metoda zwraca indeks gracza.
     * W przeciwnym razie zwraca wartość -1 (minus jeden).
     * Zwrócenie indeksu gracza automatycznie zakańcza grę.
     * 
     * @return int
     */
    abstract protected function checkCount();
    /**
     * Metoda pobierająca ilosć punktów jednego gracza.
     * 
     * @return int
     */
    abstract public function getPlayerPoints($playerId);
    /**
     * Metoda pobiera z tablicy $players ilość punktów wszystkich graczy.
     * 
     * @return array
     */
    abstract public function getAllPlayersPoints();
    /**
     * Metoda zwraca nazwę gracza.
     * 
     * @return string
     */
    abstract public function getPlayerName($playerId);
}
?>