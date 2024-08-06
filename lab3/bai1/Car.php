<?php 
    namespace Lab;
    class Car extends Vehicle{
        public $numberOfDoors;
        public function __construct($name, $speed, $numberOfDoors){
            parent::__construct($name, $speed);
            $this->numberOfDoors = $numberOfDoors;
        }
        public function honk(){
            return $this->name . "đang kêu";
        }
    }