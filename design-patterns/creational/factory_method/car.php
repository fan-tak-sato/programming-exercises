<?php

class Car
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class CarFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}

$veyron = CarFactory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel());
