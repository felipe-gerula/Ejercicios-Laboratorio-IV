<?php
     include('header.php');
     include('nav.php');
     use Models\Client as Client;
     use Repositories\ClientRepository as ClientRepository;
     $clientRepository = new ClientRepository();
     $clientList = $clientRepository->GetAll();
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Clientes</h2>

               <table class="table bg-light">
                    <thead class="bg-dark text-white">
                         <th>Razón Social</th>
                         <th>Nombre de Contacto</th>
                         <th>CUIT</th>
                         <th>Email</th>
                         <th>Condición IVA</th>
                    </thead>
                    <tbody>
                         <?php
                              if (isset($clientList) && !empty($clientList)) {
                                   foreach ($clientList as $client) {
                              ?>
                         <tr>
                              <td><?php echo $client->GetBusinnesName();?></td>
                              <td><?php echo $client->GetClientContact();?></td>
                              <td><?php echo $client->GetCuit();?></td>
                              <td><?php echo $client->GetEmail();?></td>
                              <td><?php echo $client->GetVatCondition();?></td>
                         </tr>
                         <?php
                                   }
                              }
                         ?>          
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php include('footer.php') ?>
