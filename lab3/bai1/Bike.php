<?php
    namespace Lab;
    class Bike extends Vehicle{
        public $type;
        public function __construct($name, $speed, $type){
            parent::__construct($name, $speed);
            $this->type = $type;
        }
        public function ringBell(){
            return $this->name . "kêu";
        }

    }