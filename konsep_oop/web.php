<?php

class Product
{
    public $name;
    public $price;
    public $description;

    public function __construct($name,$price,$description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }
}
$prduct1 = new product('smartphone','5000000','smartphone terbaru dengan kamera berkualitas tinggi');
$prduct1 = new product('iphone 13','20000000',' terbaru dengan kamera berkualitas tinggi');