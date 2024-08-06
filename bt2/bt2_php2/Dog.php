<?php 
class Dog extends Animal {
    public function makeSound(): string {
        return "Woof!";
    }

    public function move(): string {
        return "The dog is running.";
    }

    public function eat(): string {
        return "The dog is eating.";
    }
}
?>