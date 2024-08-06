<?php
// Include the necessary files
include 'AnimalInterface.php';
include 'Animal.php';
include 'CanSwim.php';
include 'Dog.php';
include 'Cat.php';
include 'Fish.php';

// Create instances of each class
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");
$fish = new Fish("Goldie");

// Call methods and display results
echo $dog->getName() . " says: " . $dog->makeSound() . "\n";
echo $dog->move() . "\n";
echo $dog->eat() . "\n";

echo $cat->getName() . " says: " . $cat->makeSound() . "\n";
echo $cat->move() . "\n";
echo $cat->eat() . "\n";

echo $fish->getName() . " says: " . $fish->makeSound() . "\n";
echo $fish->move() . "\n";
echo $fish->swim() . "\n";
echo $fish->eat() . "\n";
?>
