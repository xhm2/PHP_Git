<?php

require_once('../src/controllers/EmployesController.php');
require_once('../views/templates/header.php');


$newEmployes = new EmployesController(NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$employes = $newEmployes->listEmployes();


  
?>

<section>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-5">
                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                      <div class="card-header"><h3 class="text-center font-weight-light my-4">Supprimer un employé</h3></div>
                      <div class="card-body">
                          <form enctype="multipart/form-data" action="update_employes.php" method="post">
                              <div class="form-floating mb-3">
                                    <select name="id_employes" id="id_employes">
                                      <option value="">--Choississez une employé--</option>
                                      <?php foreach($employes as $values): ?>
                                      <option value="<?=$values['id_employes']?>"><?=$values['nom']?><?=$values['prenom']?></option>
                                      <?php endforeach; ?>
                                    </select>
                                
                                </div>
                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                      <button class="btn btn-primary" >Supprimer</button>
                                </div>
                          </form>
                      </div>
                    </div>
              </div>
          </div>
      </div>
</section>




<?php

require_once('../views/templates/footer.php');
    
?>
