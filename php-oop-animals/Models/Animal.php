<?php 

/**
 * A class that represents a movie instance
 */
class Animal{
    protected $name;
    public $yearOfBirth;

    public function __construct(String $_name, $_yearOfBirth)
    {
        $this->setName($_name);
        $this->yearOfBirth = $_yearOfBirth;
    }

    public function breathe(){
        return 'fiuu';
    }

    public function makeNoise(){
        return '';
    }

    public function setName($_name){
        // se il nome è troppo lungo non lo accetto
        if (is_string($_name) ){
            $this->name = $_name;
        } else {
            $this->name = null;
        }
    }

}

class Cat extends Animal{
    public $fur;

    public function __construct(String $_name, $_yearOfBirth, $_fur){
        parent::__construct($_name, $_yearOfBirth);
        $this->fur = $_fur;
    }

    public function purrs(){
        return 'rrrrrrrrrrr';
    }

    public function makeNoise(){
        parent::makeNoise();
        return 'miao';  
    }

    public function setName($_name){
        // esiste u altro name uguale? si => richiedi un altro name, no => accettalo
        
    }


}



?>