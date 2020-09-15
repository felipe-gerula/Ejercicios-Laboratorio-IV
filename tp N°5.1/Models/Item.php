<?php

    namespace Models;

    class Item{

    //Atributes
        private $name;
        private $description;
        private $quantity;
        private $price;

    //GET  

        function getName(){
            return $this->name;
        }

        function getDescription(){
            return $this->description;
        }

        function getQuantity(){
            return $this->quantity;
        }

        function getPrice(){
            return $this->price;
        }

    //SET
        function setName($name){
            $this->name = $name;
        }

        function setDescription($description){
            $this->description = $description;
        }

        function setQuantity($quantity){
            $this->quantity = $quantity;
        }
        
        function setPrice($price){
            $this->price = $price;
        }
    }
    //Methods
        function getSubTotal(){
            $subtotal = 0.0;
            if($this->quantity >= 1){
                $subtotal = ($this->price * $this->quantity);
            }

            return $subtotal;
        }

?>