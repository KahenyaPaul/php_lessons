<?php

// Purpose of learning object oriented programming in PHP

// class definition
class Car {
    // Properties (variables)
    public $make = 'Toyota';
    public $model = 'Corolla';
    public $color = 'Black';
    public $price = 1000000;
    // Methods (functions)
    public function displayCar() {
        echo "This is a " . $this->color . " " . $this->make . " " . $this->model . " and it costs " . $this->price . " rupees.";
    }
}



?>