<?php

require_once 'abstract.highway.php';

final class MotorWay extends HighWay {

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            
            return "This vehicle is not allowed here ! ";
        }else{
            $this->currentVehicles[] = $vehicle;
        }
    }

    public function setNbLane($nbLane)
    {
        $this->nbLane = 4;
    }
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = 130;
    }
}

?>