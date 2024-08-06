<?php
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound();
}

trait Action {
    public function catchMouse() {
        echo $this->name . " is catching a mouse.\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo $this->name . " says: Woof Woof!\n";
    }
}

class Cat extends Animal {
    use Action;

    public function makeSound() {
        echo $this->name . " says: Meow Meow!\n";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

$dog->makeSound(); 
$cat->makeSound(); 
$cat->catchMouse();

?>
