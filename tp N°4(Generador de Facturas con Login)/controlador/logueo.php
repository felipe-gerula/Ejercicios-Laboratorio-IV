<?php
namespace controlador;

if($_POST){

    $user = $_POST['user'];
    $password = $_POST['password'];
    if ($user == "Cosme Fulanito") {
        if ($password == "strongPassword") {
            header("location:../add-bill.php");//redirecciona a add-bill.php
        }else {
            echo "<script> if(confirm('Verifique que la contraseña sea la correcta'));";//funcion confirm = envia un mensaje al usuario
            echo "window.location = '../index.php';
            </script>";//window.location = obtiene la direccion actual URL o direcciona a la asignada
        }
    }else {
            echo "<script> if(confirm('Verifique que el nombre de usuario sea la correcta'));";//funcion confirm = envia un mensaje al usuario
            echo "window.location = '../index.php';
            </script>";
    }
}else {
            echo "<script> if(confirm('Error en el metodo de envio de datos'));";
            echo "window.location = '../index.php';
            </script>";
}

?>
