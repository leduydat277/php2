<?php

    require_once 'Vehicle.php';
    require_once 'Car.php';
    require_once 'Bike.php';

    use Lab\Vehicle;
    use Lab\Car;
    use Lab\Bike;

    class Main{
        public function run(){
           
            $car = new Car("audi", 120, 4);
            echo $car->move() . "\n";
            
            echo $car->honk() . "\n";
            echo "Số cánh cửa là: " . $car->numberOfDoors . "\n";


            $bike = new Bike("xe đạp", 30, "địa hình");
            echo $bike->move() . "\n";
            echo $bike->ringBell() . "\n";
            echo "Loại xe là: " . $bike->type . "\n";
            }
    }
    $main = new Main();
    $main->run();