<?php
require_once __DIR__ . '/Product.php';

class Cuccia extends Product{
    public $dimensioni;
    public $colore;
    
    
    

    public function __construct(string $_name, string $_description, float $_price, $_imageUrl, $_dimensioni, $_colore)
    {
        parent::__construct($_name, $_description, $_price, $_imageUrl);
       
        $this->dimensioni = $_dimensioni;
        $this->colore = $_colore;
        

    }
}



?>