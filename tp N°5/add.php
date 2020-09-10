<?php
include('header.php');
include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Cargar Cerveza</h2>

               <form class="bg-dark-alpha p-5" action="process-form.php" method="post">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Codigo</label>
                                   <input type="Text" name="code" class="form-control" require>
                              </div>
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="Text" name="name" class="form-control" require>
                              </div>
                              <div class="form-group">
                                   <label for="">Descripcion</label>
                                   <textarea name="description"rows="5"></textarea require>
                              </div>
                              <div class="form-group">
                                   <label for="">Tipo</label>
                                   <input type="Text" name="type" class="form-control" require>
                              </div>
                         </div> 
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
