<?php


class Category{
    public $name;
    public $description;
    

   
    public function __construct(string $_name, string $_description){
        $this->name = $_name;
        $this->description = $_description;
        
    }
}