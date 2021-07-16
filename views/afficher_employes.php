<?php

require_once('../src/controllers/EmployesController.php');
require_once('../views/templates/header.php');

$newEmployes = new EmployesController(NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$employes = $newEmployes->listEmployes();
?>

<section>
  <h1 class="mt-4">Employés</h1>
  <div class="container-fluid px-4">
    <div class="card mb-4">
      <div class="card-header">
      <i class="fas fa-table me-1"></i>
     Employés
      </div>
      <div class="card-body">
        <table id="datatablesSimple">
          <thead>
            <tr>
              <th>id_employes</th>
              <th>prenom</th>
              <th>nom</th>
              <th>sexe</th>
              <th>Description</th>
              <th>service</th>
              <th>salaire</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($employes as $values): ?>
              <tr>
                <th><?=$values['id_employes']?></th>
                <th><?=$values['prenom']?></th>
                <th><?=$values['nom']?></th>
                <th><?=$values['sexe']?></th>
                <th><?=$values['service']?></th>
                <th><?=$values['date_embauche']?></th>
                <th><?=$values['salaire']?></th>
                <th><a href="supprimer_employes.php"><i class="fas fa-trash-alt"></i><a href="update_employes.php"><i class="fas fa-edit"></i></th>
              </tr>      
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>


<?php


require_once('../views/templates/footer.php');


?>