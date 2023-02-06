<?php 

class Membership{
    private $id;
    private $level;

    public function __construct($_id, $_level)
    {
        $this->id = $_id;
        $this->level = $_level;
    }

    public function getId(){
        return $this->id;
    }

    
    public function getLevel(){
        return $this->level;
    }
}