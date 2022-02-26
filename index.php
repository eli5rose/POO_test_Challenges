<?php
require_once 'car.class.php';

$car = new Car("blue");

try{
    $car->start();
    $car->setHasParkBrake(true);
}

catch(Exception $e){
    
    echo "Put down parkbrake. Starting...<br>";
} 

finally {
    echo "My car rolls like a donut...";
} 

$car1 = new Car("green");
$car1->setHasParkBrake(false);

try{
    $car1->start();
}

catch(Exception $e){
    echo "Put down parkbrake. Starting...<br>";
} 
finally{
    echo "My car rolls like a donut...";
} 
?>