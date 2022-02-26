<?php

require_once 'vehicle.class.php';
require_once 'LightableInterface.interface.php';

class Bicycle extends Vehicle implements LightableInterface {

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            return true;
        }
        else{
            return false;
        }    
    }
    public function switchOff(): bool
    {
        return false;
    }    
}
?>