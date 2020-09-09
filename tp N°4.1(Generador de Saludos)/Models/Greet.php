<?php

    namespace Models;

    abstract class Greet{
    //atributos
    private $message;

    //constructor
    function __construct(){

    }

    //GET
    public function getMessage(){
        return $this->message;
    }

    //SET
    public function setMessage($message){
        $this->message = $message;
    }

    public function other($message){
        $this->setMessage($message);
        include_once("../greeting.php");
    }

    public abstract function greet();
    public abstract function sayGoodbye();

    }

?>