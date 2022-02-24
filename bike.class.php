<?php

class Bicycle{

    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels;

    // construct

    public function __construct(string $color)
    {
    $this->color = $color;
    }

    // getters

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


    // setters

    public function setColor(string $color): void
    {
    $this->color = $color;
    }   

    public function setCurrentSpeed(string $currentSpeed): void
    {
        if ($currentSpeed >=0) {
        $this->currentSpeed = $currentSpeed;
        }
    }

    // methods

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
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