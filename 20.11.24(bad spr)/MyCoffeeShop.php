<?php
require_once('./CoffeeShop.php');
class MyCoffeeShop extends CoffeeShop {
    public function __construct($name, $menu = [], $clients = [], $orders = []) {
        $this->name = $name ['name'];
        $this->menu = $menu ['name'. 'price'. 'duration'. 'type'];
        $this->clients = $clients ['name'. 'clientID'];
        $this->orders = $orders ['clientID'. $menu. 'fulfill'];
    }
    public function addNewClient($name) {
        array_push($clients, $this->$name);
    }
    public function getClients() {
        
    }
    public function addNewOrder($clientId, $items) {
        array_push($orders, $clientId, $items = []);
    }
    public function getOrders($clientId = -1) {
        
    }
    public function getDrinks() {
        
    }
    public function getFood() {
        
    }
    public function fulfillOrder() {
        // if () {
        //     return;
        // } else {
        //     return false;
        // }
        
    }

}
?>