<?php

require_once 'abstract.highway.php';

final class PedestrianWay extends HighWay{

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Car){

            return "This vehicle is allowed on this route ! ";
        }else{

            $this->currentVehicles[] = $vehicle;
        }
    }

    public function setNbLane($nbLane)
    {
        $this->nbLane = 1;
    }
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = 10;
    }
}
?>