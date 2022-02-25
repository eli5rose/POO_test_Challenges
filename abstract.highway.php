<?php
abstract class HighWay{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

// getters

public function getCurrentVehicles(): array
{
    return $this->currentVehicles;
}

public function getNbLane(): int
{
    return $this->nbLane;
}

public function getMaxSpeed(): int
{
    return $this->maxSpeed;
}

// setters

public function setCurrentVehicles($currentVehicles){
    
    $this->currentVehicles = $currentVehicles;
}

public function setNbLane($nbLane)
{
    $this->nbLane = $nbLane;
}

public function setMaxSpeed($maxSpeed){
    
    $this->maxSpeed = $maxSpeed;
}

// method

abstract function addVehicle($vehicle);

};

?>