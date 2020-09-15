<?php
    namespace Process;

    use Config\Autoload as Autoload;
    use Models\User as User;
    
    Autoload::Start();

    session_start();

    if (isset($_SESSION["loggedUser"])) {
        
            $loggedUser = $_SESSION["loggedUser"];
    }
    else {
        echo "<script> if(confirm('Vuelva a loguearse!'));";
        echo "window.location = 'index.php'; </script>";
    }
?>