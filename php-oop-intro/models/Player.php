<?php

class Player{
    // ? caratteristiche tipiche => campi, fields, attributes
    protected $name;
    protected $age;
    protected $skillsList;
    protected $isAlive;
    protected static $version = 'Multiplayer';

    public function __construct($_name, $_age, SkillSet $_skillsList)
    {
        $this->setName($_name);
        $this->age = $_age;
        $this->skillsList = $_skillsList;
        $this->isAlive = true;
    }


    // § capacità condivisa => methods
    public function getName(){
        // ritorno il nome del giocatore
        return $this->name;
    }

    private function setName($_name){
        if ($_name === ''){
        } else {
            $this->name = $_name;
        }
    }


    public function getVersion(){
        return self::$version;
    }
}
