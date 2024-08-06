<?php 
class Fish extends Animal {
    use CanSwim;

    public function makeSound(): string {
        return "Blub!";
    }

    public function move(): string {
        return "The fish is swimming.";
    }

    public function eat(): string {
        return "The fish is eating.";
    }
}
?>