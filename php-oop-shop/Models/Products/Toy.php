<?php
require_once __DIR__ . '/../Product.php';

class Toy extends Product{
    public $genre;

    public function __construct($_name, $_description, $_category, $_isAvailable, $_price, $_genre)
    {
        parent::__construct($_name, $_description, $_category, $_isAvailable, $_price);
        $this->genre = $_genre;
    }
}