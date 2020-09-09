<?php

    namespace Models;

    require_once("Greet.php");

    use Models\Greet as Greet;

    class Spanish extends Greet{

        public function greet(){
            $this->setMessage("Hola!!!");

            include_once("../greeting.php");
        }

        public function sayGoodbye(){
            $this->setMessage("Adios!!!");

            include_once("../greeting.php");
        }
    }
?>