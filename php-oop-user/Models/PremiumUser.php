<?php 

require_once __DIR__ . '/User.php';

class PremiumUser extends User{
    protected $membershipCard;

    public function __construct($_name, $_surname, $_age, Membership $_membershipCard){
        parent::__construct($_name, $_surname, $_age);
        $this->membershipCard = $_membershipCard;
        $this->setDiscount();
    }
    
    public function setDiscount(): void{
        if ( $this->age >= 55 || $this->age <= 10) {
            $this->discount = 0.35;
        } else {
            $this->discount = 0.10;
        }
    }

}