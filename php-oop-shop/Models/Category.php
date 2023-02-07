<?php

class Category{
    public $name;
    public $image;

    public function __construct(string $_name, string $_image)
    {
        $this->name = $_name;
        $this->image = $_image;
    }
}