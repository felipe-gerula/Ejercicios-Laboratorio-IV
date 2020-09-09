<?php require_once "header.php"; ?>
<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content">
          <header class="text-center">
               <h2>Practico N° 4</h2>
          </header>
          <form action="controlador/logueo.php" method="post" class="login-form bg-dark-alpha p-5 text-white">
               <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar usuario">
               </div>
               <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="text" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña">
               </div>
               <button class="btn btn-danger btn-block btn-lg" type="submit">Iniciar Sesión</button>
          </form>
     </div>
</main>

