<?php 
class Cat extends Animal {
    public function makeSound(): string {
        return "Meow!";
    }

    public function move(): string {
        return "The cat is walking.";
    }

    public function eat(): string {
        return "The cat is eating.";
    }
}

?>