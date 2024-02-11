<?php
// constructor is a magic method
Class Person {

    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;



}
    public function displayPerson() {
        return "This is " . $this->name . " and he is " . $this->age . " years old.";
    }
}