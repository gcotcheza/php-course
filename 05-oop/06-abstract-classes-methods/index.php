<?php

abstract class Shape
{
    protected $name;

    // Abstract method
    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }  

    // Concrete method
    public function getName()
    {
        return $this->name;
    }
}

// Create new subclass circle.
class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Creat new subclass Rectangle
class Rectangle extends Shape
{
    private $height;
    private $width;

    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }
}

// Instantiate classes
$circle = new Circle('circle', 5);
$rectangle = new Rectangle('rectangle', 6, 4);

echo $circle->getName() . ' area is ' . $circle->calculateArea() . '<br>'; 
echo $rectangle->getName() . ' area is ' . $rectangle->calculateArea() . '<br>'; 