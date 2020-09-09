<?php

    namespace Models;

    use Models\Aerial as Aerial;

    class Airplane  extends Aerial{

        //Attributes
        private $capacity ;
        
        //Constructors
        function __construct(){

        }

        //Get
        public function getCapacity (){
            return $this->capacity ;
        }

        //SET
        public function setCapacity ($capacity ){
            $this->capacity  = $capacity ;
        }
        
    }

?>