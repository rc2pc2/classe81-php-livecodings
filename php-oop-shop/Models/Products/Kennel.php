<?php
require_once __DIR__ . '/../Product.php';

class Kennel extends Product{
    public $volume;

    public function __construct($_name, $_description, $_category, $_isAvailable, $_price, $_volume)
    {
        parent::__construct($_name, $_description, $_category, $_isAvailable, $_price);
        $this->volume = $_volume;
    }

    public function getSpecialStuff(){
        return 'Volume:' . $this->volume;
    }
}