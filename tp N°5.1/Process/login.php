<?php

    namespace Process;

    require("../Config/Autoload.php");

    use Config\Autoload as Autoload;

    Autoload::Start();

    use Models\User as User;

    if($_POST){

        $userName = $_POST["user"];
        $password = $_POST["password"];

        if (($userName == "SSoler")&&($password == "cosme1234")) {
            
            session_start();

            $loggedUser = new User();
            $loggedUser->setUserName($userName);
            $loggedUser->setPassword($password);
            $loggedUser->setFirstName("Sebastian");
            $loggedUser->setLastName("Soler");
            $loggedUser->setEmail("sebastian@utn.com");
            $loggedUser->setDNI("42569981");
            
            $_SESSION["loggedUser"] = $loggedUser;

            header("location:../add-bill.php");


        }else {
            
            echo "<script> if(confirm('Error en el ingreso de datos!'));";
            echo "window.location = '../index.php'; </script>";
        }
    }

?>