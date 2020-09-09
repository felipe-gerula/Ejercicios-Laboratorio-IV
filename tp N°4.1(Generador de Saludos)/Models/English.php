<?php

    namespace Models;

    require_once("Greet.php");

    use Models\Greet as Greet;

    class English extends Greet{

        public function greet(){
            $this->setMessage("Hello!!!");

            include_once("../greeting.php");
        }

        public function sayGoodBye(){
            $this->setMessage("Bye!!!");
            include_once("../greeting.php");
        }
    }
?>