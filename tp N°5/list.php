<?php
     include('header.php');
     include('nav.php');
     
     require_once("config/Autoload.php");
     
     use Models\Beer as Beer;
     use Repositories\BeerRepository as BeerRepository; 

     $beerRepository = new BeerRepository();
     $beerList = $beerRepository->getAll();
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Beer List</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>code</th>
                         <th>name</th>
                         <th>description</th>
                         <th>type</th>
                    </thead>
                    <tbody>
                    <?php
                         foreach ($beerList as $beer) 
                         {
                         ?>     
                              <tr>
                                   <td><?php echo $beer->getCode() ?></td>
                                   <td><?php echo $beer->getName() ?></td>
                                   <td><?php echo $beer->getDescription() ?></td>
                                   <td><?php echo $beer->getType() ?></td>
                              </tr>          
                           <?php
                         }
                       ?>       
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
          <h2>Eliminar Cerveza</h2>
          <form class="bg-dark-alpha p-2" action="process-form.php" method="get">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Codigo</label>
                                   <input type="Text" name="code" class="form-control" require>
                              </div>
                         </div> 
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Eliminar</button>
               </form>
          </div>
     </section>

</main>

<?php include('footer.php') ?>
