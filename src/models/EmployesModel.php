<?php


require_once('../src/config/Database.php'); 

class EmployesModel {

    
    private $connexion;

    public function __construct(){
        $database = new Database();
        $this->connexion = $database->getPDO();
    }

  


    public function add($id_employes, $prenom, $nom, $sexe, $service, $date_embauche, $salaire){
     

        $request = $this->connexion->prepare('INSERT INTO employes (id_employes, prenom, nom, sexe, service, date_embauche, salaire) VALUES (:id_employes, :prenom, :nom, :sexe, :service, :date_embauche, :salaire)');
    
        $request->execute([
            ':id_employes' => $id_employes,
            ':prenom' => $prenom,
            ':nom' => $nom,
            ':sexe' => $sexe,
            ':service' => $service,
            ':date_embauche' => $date_embauche,
            ':salaire' => $salaire,

        ]);

    }


    public function getAllEmployes(){
        $request = $this->connexion->prepare('SELECT * FROM employes'); 
         
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        

        return $result;
    }


    public function getOneEmploye($id_employes){
        $request = $this->connexion->prepare('SELECT * FROM employes WHERE id_employes=:id');

        $request->execute([
            ':id' => $id_employes,
        ]);

        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }


    public function updateEmployes($prenom, $nom, $sexe, $service, $date_embauche, $salaire){
        $request = $this->connexion->prepare('UPDATE employes SET prenom=:prenom, nom=:nom, sexe=:sexe, service=:service, date_embauche=:date_embauche,salaire:salaire WHERE id_employes=:id');

        
       

        $request->execute(array(
            
            ':prenom' => $prenom,
            ':nom' => $nom,
            ':sexe' => $sexe,
            ':service' => $service,
            ':date_embauche' => $date_embauche,
            ':salaire' => $salaire,
            
            
        ));

    }

    public function delete($id_employes, $prenom, $nom, $sexe, $service, $date_embauche, $salaire){
        
        

        $request = $this->connexion->prepare('DELETE FROM employes WHERE id_employes=:id');

        $request->execute([
            'id_employes'=> $id_employes,
            ':prenom' => $prenom,
            ':nom' => $nom,
            ':sexe' => $sexe,
            ':service' => $service,
            ':date_embauche' => $date_embauche,
            ':salaire' => $salaire,
            
        ]);
    }


}

?>

