<?php


class Product {
    public $name;
    public $description;
    public $price;
    public $imageUrl;
    
    

    
    public function __construct(string $_name, string $_description, float $_price, string $_imageUrl){
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->imageUrl = $_imageUrl;
       
       
    }

    public function getPrice(){
        return $this->price;
    }

}