<?php
    namespace Process;
    
    require("../Config/Autoload.php");

    use Models\User as User;

    if($_POST){

        $userEmail = $_POST["email"];
        $userPassword = $_POST["password"];

        if(($userEmail == "user@myapp.com") && ($userPassword == "123456")){
            
            session_start();

            $loggedUser = new User();
            $loggedUser->setUserEmail($userEmail);
            $loggedUser->setUserPassword($userPassword);
            $_SESSION["loggedUser"] = $loggedUser;

            header("location:../client-add.php");
        
        }else {
            echo "<script> if(confirm('Error en el ingreso de datos!'));";
            echo "window.location = '../index.php'; </script>";
        }

    }


?>