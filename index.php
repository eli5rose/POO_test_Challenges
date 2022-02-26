<?php

require_once 'vehicle.class.php';
require_once 'car.class.php';
require_once 'bike.class.php';
require_once 'LightableInterface.interface.php';

$bike = new Bicycle("green", 1);

echo $bike->switchOn();
var_dump($bike);

$toyota = new Car("orange", 4,"electric");
$toyota->switchOn();
var_dump($toyota);

$toyota->switchOff();
var_dump($toyota);

$bike->setCurrentSpeed(20);
echo $bike->switchOn();
var_dump($bike);

echo $bike->switchOff();
var_dump($bike);
?>