<?php
    namespace Lab;
    class Vehicle {
        public $name;
        public $speed;
        public function __construct($name, $speed){
            $this->name = $name;
            $this->speed = $speed;
        }
        public function move(){
            return $this->name . "đang di chuyển với vận tốc" . $this->speed . "km/h";
        }
    }