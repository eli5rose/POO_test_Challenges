<?php
class Car {
    private int $nbWheels;
    public int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $enenrgy;
    private int $enenryLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    // getters

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
   
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor (): string    
    {
        return $this-> color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

// setters

    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }

    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

// methods

    public function start(): string
    {
        $this->currentSpeed=0;
        return "Start there";
    }

    public function forward(): string
    {
        $this->currentSpeed = 60;
    
        return "Go now!!!!!!!!";
    }
    
    public function brake(): string
    {
       $sentence = "";
       while ($this->currentSpeed > 0) {
           $this->currentSpeed--;
           $sentence .= "Brake !!!";
       }
       $sentence .= "I'm stopped !";
       return $sentence;
    }

}



?>