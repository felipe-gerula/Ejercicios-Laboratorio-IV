<?php

    namespace Models;

    require_once("Greet.php");

    use Models\Greet as Greet;

    class Portugues extends Greet{

        public function greet(){
            $this->setMessage("Olá");

            include_once("../greeting.php");
        }

        public function sayGoodBye(){
            $this->setMessage("Tchau");

            include_once("../greeting.php");
        }
    }
?>