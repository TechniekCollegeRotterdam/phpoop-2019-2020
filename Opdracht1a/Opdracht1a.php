<?php
namespace Opdracht1a;

class House
{
    private $floors;
    private $rooms;
    private $width;
    private $length;
    private $height;
    private $volume;

    public function __construct($floors, $rooms, $width, $length, $height)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
    }

    public function calculateVolume()
    {
        $this->volume = $this->width * $this->length * $this->height;
    }

    public function calculatePrice()
    {
        $this->calculateVolume();
        $price = $this->volume * 2500;
        return $price;
    }

    public function getPrice()
    {
        $price = $this->calculatePrice();
        return "De prijs van het huis is: ".$price."<br>";
    }

    public function getHouse()
    {
        return "Het huis heeft ".$this->floors." verdiepingen en ".$this->rooms." kamers <br>
                Verder zijn de afmetingen: <br>
                <ul>
                    <li>Breedte: ".$this->width." meter</li>
                    <li>Lengte: ".$this->length." meter</li>
                    <li>Hoogte: ".$this->height." meter</li>
                </ul>";
    }
}

$house1 = new House(3, 5, 5, 8, 7);
print $house1->getPrice();
print $house1->getHouse();

$house2 = new House(2, 4, 7, 10, 8);
print $house2->getPrice();
print $house2->getHouse();

$house3 = new House(5, 10, 10, 15, 10);
print $house3->getPrice();
print $house3->getHouse();

