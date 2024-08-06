<?php
// Show errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include_once 'bai1/Car.php';
include_once 'bai1/Bike.php';


class Main {
    public function main() {
        $car = new Car("red", 4, 4);
        $bike = new Bike("blue", 2, "Road"); 

        $car->move();
        echo  "</br>";
        $bike->move();
        echo  "</br>";
       $car->honk();
       echo  "</br>";
        $bike->ringBell();
        echo "</br>";
        echo "Bài 2:";
        echo "</br>";
        $rectangle = new Rectangle();
        $cricle = new Circle();
        $rectangle->draw();
        echo "</br>";
        $cricle->draw();
    }
    
    
}

$main = new Main();
$main->main();
?>