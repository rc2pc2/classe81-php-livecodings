<?php

class Player{
    // ? caratteristiche tipiche => campi, fields, attributes
    public $name;
    public $age;
    public $skillsList;
    public $isAlive;
    public static $version = 'Multiplayer';

    public function __construct($_name, $_age, SkillSet $_skillsList)
    {
        $this->name = $_name;
        $this->age = $_age;
        $this->skillsList = $_skillsList;
        $this->isAlive = true;
    }


    // § capacità condivisa => methods
    public function getName(){
        // ritorno il nome del giocatore
        return $this->name;
    }

    public function getVersion(){
        return self::$version;
    }
}
