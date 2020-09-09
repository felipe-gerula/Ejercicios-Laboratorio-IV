<?php

    require_once("config/Autoload.php");

    use Models\User as User;

    if($_POST){

        $userName = $_POST["userName"];
        $password = $_POST["password"];

        if (($userName == "SSoler")&&($password == "cosme1234")) {
            
            session_start();

            $loggedUser = new User();
            $loggedUser->setUserName($userName);
            $loggedUser->setPassword($password);
            $loggedUser->setFirstName("Sebastian");
            $loggedUser->setLastName("Soler");
            $loggedUser->setEmail("sebastian@utn.com");
            
            $_SESSION["loggedUser"] = $loggedUser;

            header("location:main.php");


        }elseif (($userName == "AzarJ")&&($password == "alAzar123")) {
            
            session_start();

            $loggedUser = new User();
            $loggedUser->setUserName($userName);
            $loggedUser->setPassword($password);
            $loggedUser->setFirstName("Juan");
            $loggedUser->setLastName("Azar");
            $loggedUser->setEmail("juan_azar@utn.com");
            
            $_SESSION["loggedUser"] = $loggedUser;

            header("location:main.php");

        }elseif (($userName == "Mari123")&&($password == "123456Mari")) {
            
            session_start();

            $loggedUser = new User();
            $loggedUser->setUserName($userName);
            $loggedUser->setPassword($password);
            $loggedUser->setFirstName("Juan");
            $loggedUser->setLastName("Perez");
            $loggedUser->setEmail("mariap@utn.com");

            $_SESSION["loggedUser"] = $loggedUser;

            header("location:main.php");

        }else {
            
            header("location:index.php");
        }
    }

?>