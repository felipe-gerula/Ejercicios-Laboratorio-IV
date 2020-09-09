<?php require_once "header.php" ?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Factura</h2>
               <form class="bg-light-alpha p-5" action = "controlador/BillProcess.php" method="get">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Fecha</label>
                                   <input type="date" name="fecha" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <p>Tipo</p>
                                   <input type="radio" name="tipoFactura" value="a" class="radioSize" required>Factura A
                                   <input type="radio" name="tipoFactura" value="b" class="radioSize" required>Factura B
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Numero</label>
                                   <input type="number" name="numero" class="form-control" min="0" required>
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>
