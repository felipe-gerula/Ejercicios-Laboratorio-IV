<?php
     include('header.php');
     include('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <form action="Process/newClient.php" method="GET">
          <div class="container">
               <h3 class="mb-3">Agregar Cliente</h3>

               <div class="bg-light p-4">
                    <div class="row">
                         <div class="col-lg-4">
                              <label for="">Razón Social</label>
                              <input type="text" name="businessName" class="form-control form-control-ml" required value="">
                         </div>                         
                         
                         <div class="col-lg-4">
                              <label for="">CUIT</label>
                              <input type="number" name="cuit" class="form-control form-control-ml" required value="">
                         </div>

                         <div class="col-lg-4">
                              <label for="">Nombre de Contacto</label>
                              <input type="text" name="clientContact" class="form-control form-control-ml" required value="">
                         </div>

                         <div class="col-lg-4">
                              <label for="">Email</label>
                              <input type="email" name="email" class="form-control form-control-ml" required value="">
                         </div>

                         <div class="col-lg-4" >
                              <label for="">Condición IVA</label>

                              <div class="form-group">
                                   <label class="radio-inline">
                                        <input type="radio" name="vatCondition" value="monotributo" checked> Monotributo
                                   <label class="radio-inline">
                                   <label class="radio-inline">
                                        <input type="radio" name="vatCondition" value="inscripto"> Resp. Inscripto
                                   <label class="radio-inline">
                                   <label class="radio-inline">
                                        <input type="radio" name="vatCondition" value="exento"> Exento
                                   <label class="radio-inline">
                              </div>                              
                         </div>

                         <div class="col-lg-4">
                              <span>&nbsp;</span>
                              <button type="submit" name="button" class="btn btn-primary ml-auto d-block">Agregar</button>
                         </div>

                    </div>                    
               </div>
          </div>
          </form>
     </section>
</main>

<?php include('footer.php') ?>
