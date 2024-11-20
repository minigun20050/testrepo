<?php
/**
 * Klasa abstrakcyjna CoffeeShop
 * UWAGA:
 * Bez komentarzy plik ma 15 linii, natomiast z nimi jest dokładnie 100 linii.
 */
abstract class CoffeeShop {
    /**
     * Nazwa sklepu.
     * 
     * @var string $name
     */
    public $name;
    /**
     * Tablica wielowymiarowa zawierająca wszystkie pozycje menu w sklepie.
     * 
     * W każdym rodzaju każdy element posiada składowe:
     *  name - nazwa produktu
     *  price - cena produktu
     *  duration - czas przygotowania w sekundach
     *  type - typ produktu, którym może być food lub drink
     * 
     * @var array{name: string, price: float, duration:int, type:string} $menu
     */
    public $menu;
    /**
     * Tablica zawierająca zamówienia.
     * Każde zamówienie posiada następujące informacje:
     *  client - numer ID klienta
     *  items - tablica zamówionych produktów (klucze z tablicy $menu)
     *  fulfill - flaga sprawdzająca, czy zamówienie zostało wykonane
     * 
     * @var array{client:int, items:array, fulfill:boolean} $orders
     */
    public $orders;
    /**
     * Tablica zawierająca informacje o klientach przebywających w sklepie.
     * Każdy klient ma nadaną nazwę, klucz tablicy powiązany z imieniem jest jednocześnie numerem ID klienta.
     * 
     * @var array $clients
     */
    public $clients;
    /**
     * Metoda dodająca nowego klienta do tablicy $clients.
     * Na wejściu podajemy nazwę klienta.
     * 
     * @param string $name
     * @return null
     */
    abstract public function addNewClient($name);
    /**
     * Metoda dodająca nowe zamówienie do tablicy $orders.
     * Na wejściu podajemy ID klienta oraz numery ID zamówionych produktów w formie tablicy.
     * 
     * @param int $clientId
     * @param array $items
     * @return null
     */
    abstract public function addNewOrder($clientId, $items);
    /**
     * Metoda wykonania zamówienia.
     * Zamówienia wykonujemy metodą FIFO - zaczynamy od początku tablicy.
     * Wykonanie zamówienia zmienia flagę fulfill z false na true.
     * 
     * Jeśli zamówienie zostało wykonane poprawnie, metoda zwraca wartość zamówienia.
     * Jeśli w tablicy nie ma zamówień do wykonania, zwraca false.
     * 
     * @return boolean
     */
    abstract public function fulfillOrder();
    /**
     * Metoda pobierająca zamówienia.
     * Wartość -1 oznacza pobranie wszystkich zamówień.
     * W przeciwnym razie pobierane są zamówienia klienta z podanym ID.
     * Jeśli klient o podanym ID nie istnieje, metoda zwraca false.
     * 
     * @param int $clientId
     * @return array|boolean
     */
    abstract public function getOrders($clientId = -1);
    /**
     * Metoda pobiera listę klientów w formie tablicy.
     * 
     * @return array
     */
    abstract public function getClients();
    /**
     * Metoda pobiera listę napojów w formie tablicy.
     * 
     * @return array
     */
    abstract public function getDrinks();
    /**
     * Metoda pobiera listę posiłków w formie tablicy.
     * 
     * @return array
     */
    abstract public function getFood();
}
?>