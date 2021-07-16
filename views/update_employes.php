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
                      <div class="card-header"><h3 class="text-center font-weight-light my-4">Mettre à jour</h3></div>
                      <div class="card-body">
                          <form enctype="multipart/form-data" action="update_employes.php" method="post">
                              <div class="form-floating mb-3">
                                    <select name="id_employe" id="id_employe">
                                      <option value="">--Choississez une employe--</option>
                                      <?php foreach($employes as $values): ?>
                                      <option value="<?=$values['id_employes']?>"><?=$values['nom']?></option>
                                      <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-floating mb-3">
                                      <input class="form-control" id="prenom" type="text" name="prenom" placeholder="" />
                                      <label for="prenom">Prénom</label>
                                </div>
                                <div class="form-floating mb-3">
                                      <input class="form-control" id="nom" type="text" name="nom" />
                                      <label for="nom">Nom</label>
                                </div>
                                <div class="form-floating mb-3">
                                      <input class="form-control" id="sexe" type="text" name="sexe" />
                                      <label for="sexe">sexe</label>
                                </div>
                                <div class="form-floating mb-3">
                                      <input type=text id="service" name="service">
                                      <label for="service">Service</label>
                                </div>
                                <div class="form-floating mb-3">
                                      <input type="text" name="date_embauche" id="date_embauche">
                                      <label for="date_embauche">Date d'embauche</label>
                                </div>
                                <div class="form-floating mb-3">
                                      <input class="form-control" id="salaire" type="text" name="salaire" />
                                      <label for="salaire">Salaire</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                      <button class="btn btn-primary" >Mettre à jour</button>
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