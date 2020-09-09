<?php

    namespace Models;

    use Models\Ship as Ship;

    class Cruiser  extends Ship{

        //Attributes
        private $capacity;
        
        //Constructors
        function __construct(){

        }

        //Get
        public function getCapacity(){
            return $this->capacity ;
        }

        //SET
        public function setCapacity($capacity){
            $this->capacity = $capacity ;
        }
        
    }

?>