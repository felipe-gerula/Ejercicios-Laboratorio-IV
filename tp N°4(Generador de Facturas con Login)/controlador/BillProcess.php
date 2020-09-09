<?php
namespace controlador;

if($_GET){
    $time = time();//time()= retorna la fecha Unix Actual
    $fecha = date("Y-m-d",$time);
    if($_GET['fecha'] < $fecha){
        header("location:../bill-content.php");
    }else {
        echo"<script> if(confirm('La fecha ingresada pertenece al futuro.'));";
        echo"window.location = '../add-bill.php';
        </script>";
    }
}else {
    echo"<script> if(confirm('Error en el metodo de envio de datos'));";
        echo"window.location = '../add-bill.php';
        </script>'";
}

?>