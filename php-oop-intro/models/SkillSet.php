<?php

class SkillSet{
    public $strength;
    public $agility;
    public $defense;

    public function __construct($_strength, $_agility, $_defense)
    {
        $this->strength = $_strength;
        $this->agility = $_agility;
        $this->defense = $_defense;
    }

    public function givePunch(){
        return rand(0,10) * $this->strength;
    }
}
