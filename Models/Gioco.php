<?php
require_once __DIR__ . '/Product.php';

class Gioco extends Product{
    
    public $qualità;
    
    
    

    public function __construct(string $_name, string $_description, float $_price, $_imageUrl, $_qualità )
    {
        parent::__construct($_name, $_description, $_price, $_imageUrl);
       
        $this->qualità = $_qualità;
        
        

    }
}



?>