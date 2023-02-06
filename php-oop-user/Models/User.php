<?php 

/**
 * User that represents a user in a car
 * @author Riccardo Petricca & Classe 81
 */
class User{
    protected $name;
    protected $surname;
    protected $age;
    protected $discount;

    public function __construct( String $_name, String $_surname, int $_age){
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setAge($_age);
        $this->setDiscount();
    }

    public function setName($_name): void{
        $this->name = $this->checkName($_name);
    }

    public function setSurname($_surname): void{
        $this->surname = $this->checkName($_surname);
    }

    private function checkName($string) : string{
        if ( is_string($string) && strlen($string) > 2){
            return $string;
        } else {
           return "";
        }
    }

    public function setAge($_age): void{
        if ( $_age <= 120 && $_age > 0){
            $this->age = $_age;
        } else {
            $this->age = null;
        }
    }


    public function setDiscount(): void{
        if ( $this->age >= 55 || $this->age <= 10) {
            $this->discount = 0.25;
        } else {
            $this->discount = 0.0;
        }
    }

    public function getDiscount() : float{
        return $this->discount;
    }
}   