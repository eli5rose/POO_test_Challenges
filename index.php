<?php

require_once 'car.class.php' ;
require_once 'bike.class.php';

$lada = new Car("red", 4,"Plane fuel");
$lada->setNbWheels(4);
$lada->setCurrentSpeed(200);
$lada->start();

$startOn = $lada->start();
echo $startOn;
$lada->forward();
echo $lada->forward();
echo "<br>The speed of my Lada is : " . $lada->getCurrentSpeed() . " km/h ! <br>";
echo $lada->brake();
echo "<br> Its speed is ". $lada->getCurrentSpeed() . ' km/heure !!!<br/> ';
echo $lada->brake();

$bike = new Bicycle("red");
$bike->setCurrentSpeed(75);
echo $bike->forward();
echo "<br> The speed of my bike is ". $bike->getCurentSpeed(). ' km/h!! <br/> ';
echo $bike->brake();
echo "<br> Its speed is ". $bike->getCurentSpeed() . ' km/h!!<br/> ';
echo $bike->brake();


?>
