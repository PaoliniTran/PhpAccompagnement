<?php

class Boat {
    private $name = '';
    private $length = 0;
    private $width = 0;
    private $height = 0;
    public function __construct($name, $length, $width, $height)
    {
        $this->name = $name;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getName() { return $this->name; }

    public function getLength() { return $this->length; }

    public function getWidth() { return $this->width; }

    public function getHeight() { return $this->height; }

    public function setName($name) { $this->name = $name; }

    public function setColor($color) { $this->color = $color; }

    public function setLength($length) { $this->length = $length; }

    public function setWidth($width) { $this->width = $width; }

    public function setHeight($height) { $this->height = $height; }

    public function getVolume() { return $this->length * $this->width * $this->height; }

    public function getArea() { return $this->length * $this->width; }

    public function printBoatInfo() {
        echo "Information's of " . $this->name . " boat:"  . "\n";
        echo "Length: " . $this->length . "\n";
        echo "Width: " . $this->width . "\n";
        echo "Height: " . $this->height . "\n";
        echo "Volume: " . $this->getVolume() . "\n";
        echo "Area: " . $this->getArea() . "\n";
    }
}
