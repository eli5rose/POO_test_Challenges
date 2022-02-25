<?php
require_once 'bike.class.php';
require_once 'car.class.php';
require_once 'truck.class.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);


$truck = new Truck(600,"red",5,"petrol");
echo $truck->forward(70);
echo "<br>The speed of the truck is ".$truck->getCurrentSpeed()." km/h !!! since it got fuel, it's  ".$truck->isFull(0)."<br/>";
echo $truck->forward(90);
echo "The speed is ".$truck->getCurrentSpeed()." km/h since it's tank is ".$truck->isFull(1)."<br/>";
echo $truck->brake();
var_dump($truck);

$truck2 = new Truck(500,"green",5,"gas");
echo $truck2->forward(35);
echo "<br>The speed of the truck is ".$truck2->getCurrentSpeed()." km/h !!! since it got fuel, it's  ".$truck2->isFull(0)."<br/>";
echo $truck2->forward(74);
echo "The speed is ".$truck2->getCurrentSpeed()." km/h since it's tank is ".$truck2->isFull(1)."<br/>";
echo $truck2->brake();
var_dump($truck2);

?>