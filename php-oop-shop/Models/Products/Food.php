<?php
require_once __DIR__ . '/../Product.php';

class Food extends Product{
    public $calories;

    public function __construct($_name, $_description, $_category, $_isAvailable, $_price, $_calories)
    {
        parent::__construct($_name, $_description, $_category, $_isAvailable, $_price);
        $this->calories = $_calories;
    }
}