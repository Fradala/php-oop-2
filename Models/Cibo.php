<?php
require_once __DIR__ . '/Product.php';

class CIbo extends Product{
    public $food;
    public $animal;
    
    

    public function __construct(string $_name, string $_description, float $_price, $_food, $_animal)
    {
        parent::__construct($_name, $_description, $_price, $_imageURL);
       
        $this->food = $_food;
        $this->animal = $_animal;
        

    }
}



?>