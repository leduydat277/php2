<?php 
namespace b7;
class person{
    public $name;
    public $age;
    public $gender;
    public function __construct($name,$age,$gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
        
    }

?>