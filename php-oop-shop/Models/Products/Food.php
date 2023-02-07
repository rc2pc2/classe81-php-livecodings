<?php
require_once __DIR__ . '/../Product.php';
require_once __DIR__ . '/../../Traits/Position.php';

class Food extends Product{

    use Position;

    public $calories;

    public function __construct($_name, $_description, $_category, $_isAvailable, $_price, $_calories, $magazzino, $corsia, $scaffale)
    {
        parent::__construct($_name, $_description, $_category, $_isAvailable, $_price);
        $this->setPosition($magazzino, $corsia,$scaffale);
        $this->calories = $_calories;
    }
}