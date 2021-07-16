<?php


require_once('../src/models/EmployesModel.php');


class EmployesController {

    private $id_employes;
    
    private $prenom;

    private $nom;

    private $sexe;

    private $service;

    private $date_embauche;

    private $salaire;


    public function __construct($id_employes, $prenom, $nom, $sexe, $service, $date_embauche, $salaire){
        $this->setIdEmployes($id_employes);
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setSexe($sexe);
        $this->setService($service);
        $this->setDate($date_embauche);
        $this->setSalaire($salaire);
        
        
    }

    public function createEmploye(){
        
        $employesModel = new EmployesModel();
        $employesModel->add($this->id_employes,$this->prenom, $this->nom, $this->sexe, $this->service, $this->date_embauche, $this->salaire);
    }

    public function getAllEmployes($id_employes){
        $employesModel = new EmployesModel();
        return $employesModel->getAllEmployes($id_employes);
    }

    public function list(){
        $employesModel = new EmployesModel();
        return $employesModel->getAllEmployes();
    }

    public function getOneEmploye($id_employes){
        $employesModel = new EmployesModel();
        return $employesModel->getOneEmploye($id_employes);
    }

    
    
    

    public function getsIdEmployes(){
        return $this->id_employes;
    }

    public function setIdEmployes($id_employes){
         return $this->id_employes = $id_employes;
        
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        
        
            return $this->prenom = $prenom;
        
    }

    public function getNom(){  
        
        return $this->nom;
    }

    public function setNom($nom){
        
         return $this->nom = $nom;

        
        
    }

    public function getSexe(){
        return $this->sexe;
    }

    public function setSexe($sexe){       
            return $this->sexe = $sexe;

            
        
    }

    public function getService(){
        return $this->service;
    }

    public function setService($service){       
            return $this->service = $service;

}

    public function getDate(){
        return $this->date_embauche;
    }

    public function setDate($date_embauche){       
            return $this->date_embauche =$date_embauche;
        
    }

    public function getSalaire(){
        return $this->salaire;
    }

    public function setSalaire($salaire){       
            return $this->salaire =$salaire;
        
    }
}


?>