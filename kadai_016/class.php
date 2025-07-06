<?php
class Food 
{
    private $name;
    private $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function show_price()
    {
        echo $this->price . "<br>";
    }
}

class Animal
{
    private $name;
    private $height;
    private $weight;

    function __construct($name, $height, $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    function show_height()
    {
        echo $this->height . "<br>";
    }
}

$food = new Food("クッキー", 100);
echo "<pre>";

print_r($food);
echo "<pre>";

$animal = new Animal("ねこ", 25, 5);
print_r($animal);
echo "<pre>";

$food->show_price();
echo "<pre>";

$animal->show_height();
?>
