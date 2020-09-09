<?php
namespace modelo;

    class Item{

        private $name;
        private $description;
        private $price;
        private $quantity;

        public function __construct($name,$description,$price,$quantity)
        {
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        public function setName($name){$this->name = $name;}
        public function getName(){return $this->name;} 
        
        public function setDescription($description){$this->description = $description;}
        public function getDescription(){return $this->description;} 
        
        public function setPrice($price){$this->price = $price;}
        public function getPrice(){return $this->price;}

        public function setQuantity($quantity){$this->quantity = $quantity;}
        public function getQuantity(){return $this->quantity;}
    }
?>