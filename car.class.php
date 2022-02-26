<?php
class Car{
    private string $color;
    private bool $hasParkBrake;

    public function __construct(string $color)
    { 
        $this->color = $color;
    }

    // getters
    public function getColor (): string    
    {
        return $this-> color;
    }

    public function getHasParkBrake()
    {
        $this->HasParkBrake;
    }

    // setter

    public function setHasParkBrake(bool $hasParkBrake)
    {
        $this->HasParkBrake = $hasParkBrake;
    }

    // method

    public function start(): string
    {
        if(!self::setHasParkBrake(true))
        {
            return ("You can't go");

        }else{
            throw new Exception();
        } 
        return  "Let's Go !!!";   
    }
}
?>