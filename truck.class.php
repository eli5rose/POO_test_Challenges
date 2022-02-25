<?php

require_once 'vehicle.class.php';

class Truck extends Vehicle
{

    private int $storage;
    private string $loading;


    public function __construct($storage,$color,$nbSeats,$loading)
    {
        parent::__construct($color,$nbSeats);
        $this->setStorage = $storage;
        $this->setLoading = $loading;
    } 

    // getters

    public function getStorage():int
    {
        return $this->storage;
    }
    public function getCapacity():string
    {
        return $this->capacity;
    }

    // setters

    public function setStorage(int $storage)
    {
        $this->storage = $storage;
    }
    public function setLoading(string $loading)
    {
        $this->loading = $loading;
    }

    // method used

    public function isFull(int $full)
    {
        if($full == 0){
            return "is filling";
        }else{
            return "full";
        }
    }
}
?>