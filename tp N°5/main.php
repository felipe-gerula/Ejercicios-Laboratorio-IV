<?php

    require_once("config/Autoload.php");

    use Models\User as  User;

    session_start();

     if (isset($_SESSION["loggedUser"])) {//Verifica si el usuario esta logueado.
        $loggedUser = $_SESSION["loggedUser"];//Asignamos a la variable $loggedUser, el usuario logueado.
     }else {
         header("location:index.php");//Si no esta logueado, lo redirecciono al index.php
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <style>

.title{
    text-align : center;
    padding: 20px;
} 

table {
  margin: 2% 5%;
  border-radius: 5px;
  width: 90%;
  text-align: center;
}

td, th {
  border: 1px solid #dddddd;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.header-row-color{
  background-color: #5fcf80;
}

.btn{
    cursor : pointer;
    display: inline-block;
    border: 0;
    font-weight: bold;
    padding: 10px 20px;
    background: #262626;
    color: white;
    font-size: 15px;
    border: 1px solid white;
    margin : 10px 0;
    border-radius: 5px;
    margin-left : 43%;
}
    </style>

</head>

<body>
    <h1 class="title">Bienvenido!!</h1>
    <div>
        <table class="tabla-datos">
            <tr>
                <th colspan="2" class="header-row-color">
                    YOUR BASIC INFORMATION
                </th>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo $loggedUser->getUserName()?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $loggedUser->getEmail()?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo $loggedUser->getPassword()?></td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td><?php echo $loggedUser->getFirstName()?></td>
            </tr>
            <tr>
                <th>LastName</th>
                <td><?php echo $loggedUser->getLastName()?></td>
            </tr>
        </table>
    </div>
    <br><br>
    <a href="logout.php" class="btn">Cerrar Sesión</a>
</body>
</html>