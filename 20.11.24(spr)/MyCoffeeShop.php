<?php
require_once('./CoffeeShop.php');
class MyCoffeeShop extends CoffeeShop {
    private $lastFulfillOrder = 0;
    public function __construct($name) {
        $this->name = $name;
        $this->menu = [];
        $this->clients = [];
        $this->orders = [];
    }
    public function addNewClient($name) {
        array_push($this->clients, $name);
    }
    public function addNewOrder($clientId, $items) {
        array_push($this->orders, ['client' => $clientId, 'items' => $items, 'fulfill' => false]);
    }
    public function fulfillOrder() {
        $this->orders[$this->lastFulfillOrder]['fulfill'] = true;
        $this->lastFulfillOrder++;
    }
    public function getOrders($clientId = -1) {
        if($clientId == -1) return $this->orders;
        else {
            if($clientId < count($this->clients)) {
                $orders = [];
                foreach($this->orders as $k => $order)
                    if($order['client'] == $clientId)
                        array_push($orders, $this->orders[$k]);
                return $orders;
            }
            else return false;
        }
    }
    public function getClients() {
        return $this->clients;
    }
    public function getDrinks() {
        $drinks = [];
        foreach($this->menu as $k => $pos)
            if($pos['type'] == 'drink')
                array_push($drinks, $this->orders[$k]);
        return $drinks;
    }
    public function getFood() {
        $food = [];
        foreach($this->menu as $k => $pos)
            if($pos['type'] == 'food')
                array_push($food, $this->orders[$k]);
        return $food;
    }
}
?>