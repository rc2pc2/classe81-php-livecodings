<?php

class Product{
    public $name;
    public $description;
    public $category;
    public $isAvailable;

    protected $price;

    public function __construct(string $_name,string $_description, Category $_category, bool $_isAvailable, float $_price)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->category = $_category;
        $this->isAvailable = $_isAvailable;

        $this->setPrice($_price);
    }

    public function setPrice($price) : void{
        $this->price = $price;
    }

    public function getPrice() : float{
        return $this->price;
    }

    public function getSpecialStuff(){
        return null;
    }

}