<?php

require_once 'vehicle.class.php';
require_once 'LightableInterface.interface.php';

class Car extends Vehicle implements LightableInterface {
    
    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
    
}
?>