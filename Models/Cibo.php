<?php
require_once __DIR__ . '/Product.php';

class Cibo extends Product{
    public $qualità;
    public $quantità;
    
    
    

    public function __construct(string $_name, string $_description, float $_price, $_imageUrl, $_qualità, float $_quantità)
    {
        parent::__construct($_name, $_description, $_price, $_imageUrl);
       
        $this->qualità = $_qualità;
        $this->quantità = $_quantità;
        

    }
}



?>