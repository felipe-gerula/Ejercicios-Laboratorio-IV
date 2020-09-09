<?php

    namespace Controllers;

    require_once("../Models/English.php");
    require_once("../Models/Spanish.php");
    require_once("../Models/Portugues.php");

    use Models\English as English;
    use Models\Spanish as Spanish;
    use Models\Portugues as Portugues;

    if ($_POST) {

        if(isset($_POST["language"]) && isset($_POST["optionGreet"])){//issets : funcion para saber si una variable esta definida y no es null
            $greet = null;
            $language = $_POST["language"];
            $option = $_POST["optionGreet"];

            if($language == "english"){
                $greet = new English();
            }elseif ($language == "spanish") {
                $greet = new Spanish();
            }else {
                $greet = new Portugues();
            }

            if($option == "other"){
                $message = isset($_POST["message"]) ? $_POST["message"] : "Olvidaste Ingresar el Mensaje";

                //el primer parametro del array ($greet) es la clase y el segundo ($option) el metodo a implementar.
                call_user_func(array($greet, $option), $message);
            }else{
                call_user_func(array($greet, $option));
            }
        }else{
            echo "<script> if(confirm('No se a seleccionado el lenguaje y/o mensaje a enviar.'));";
            echo "window.location = '../index.php';</script>";
        }
     
    }

?>
