<?php
require_once 'bike.class.php';
require_once 'car.class.php';
require_once 'skateboard.class.php';
require_once 'motorway.php';
require_once 'pedestrianway.php';
require_once 'residentialway.php';

$newmotorway = new Motorway();
$newpedestrianway = new PedestrianWay();
$newresidentialway = new ResidentialWay();

$mazda = new Car("red", 4,"electric");
$bike = new Bicycle("blue", 3);
$skateboard = new Skateboard("green", 1);

$newmotorway->addVehicle($mazda);
$newmotorway->addVehicle($bike);
$newmotorway->addVehicle($skateboard);

$newpedestrianway->addVehicle($mazda);
$newpedestrianway->addVehicle($bike);
$newpedestrianway->addVehicle($skateboard);

$newresidentialway->addVehicle($mazda);
$newresidentialway->addVehicle($bike);
$newresidentialway->addVehicle($skateboard);

var_dump($newmotorway);
var_dump($newpedestrianway);
var_dump($newresidentialway);

?>