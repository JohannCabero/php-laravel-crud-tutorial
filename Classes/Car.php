<?php

class Car
{
    // Properties / Fields
    public $vehicleType = "car";
    protected $brand;
    private $color;

    // Constructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter & Setter Methods
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $allowedColors = [
            "blue",
            "green",
            "red",
            "yellow"
        ];

        if (in_array($color, $allowedColors)) {
            $this->color = $color;
        }
    }

    // Methods
    public function getCarInfo()
    {
        return "Brand: {$this->brand}, Color: {$this->color}";
    }

    protected function blah()
    {
        return "blah";
    }
}

// $car1 = new Car("Volvo", "green");
// $car2 = new Car("BMW");

// $car1->vehicleType = "Sedan";
// echo $car1->vehicleType . "<br>";
// echo $car1->getCarInfo();

class Van extends Car
{
    private function yeh()
    {
        $x = $this->brand;
        parent::blah();
    }
}
