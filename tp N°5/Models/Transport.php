<?php

    namespace Models;

    abstract class Transport{


        //Attributes
        private $name;

        //Constructors
        function __construct(){

        }

        //Get
        public function getName(){
            return $this->name;
        }

        //SET
        public function setName($name){
            $this->name = $name;
        }

    }
?>
