<?php
     require_once("Config/Autoload.php");
     include("Process/CheckUserLogged.php");
?>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="client-list.php">Listar Clientes</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="client-add.php">Agregar Cliente</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="Process/logout.php">Cerrar sesión</a>
          </li>
     </ul>
</nav>
