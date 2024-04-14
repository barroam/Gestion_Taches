<?php 
    
    require "../config.php";


    class taches {

        protected $id;
        protected $libelle;
        protected $description;
        protected $date ;
        protected $priorite;
        protected $etat;
        protected $id_user;
        protected $connexion;


        public function __construct($connexion,$id,$libelle,$description,$date,$priorite,$etat,$id_user){

         $this->id = $id ;
         $this->libelle = $libelle ;
         $this->description  = $description ;
         $this->date = $date ;
         $this->priorite = $priorite ;
         $this->etat = $etat ;
         $this->id_user =  $id_user ;
         $this->connexion = $connexion ;
          
        }
     // le mutateur et l'accesseur de l'id
       public function getId(){
        return $this->id;
      }
      public function setId($id){
        $this->id =  $id;
      }

      //le mutateur et l'accesseur de libelle
      public function getLibelle(){
        return $this->libelle;
      }
      public function setLibelle($libelle){
        $this->libelle = $libelle;
      }

      //le mutateur et l'accesseur de description 
      public function getDescription(){
        return $this->description;
      }
      public function setDescription($description){
        $this->description = $description;
      }

     // le mutateur et l'accesseur de la date
      public function getDate(){
        return $this->date;
      }
      public function setDate($date){
        $this->date = $date;
      }

      // le mutateur et l'accesseur de la priorite
      public function getPriorite(){
        return $this->priorite;
      }
      public function setPriorite($priorite){
        $this->priorite = $priorite;
      }

      //le mutateur et l'acceseur de l'etat 
      public function getEtat(){
        return $this->etat;
      }
      public function setEtat($etat){
        $this->etat = $etat;
      }

      // le mutateur et l'accesseur de id_user
      public function getId_user(){
        return $this->id_user;
      }
      public function setId_user($id_user){
        $this->id_user = $id_user;
      }

//la methode pour enregistrer une tache

     public function insertTaches($libelle,$description,$date,$priorite,$etat){
      
        try {

            $sql= "INSERT INTO taches(libelle,description,date,priorite,etat) VALUE (:libelle,:description,:date,:priorite,:etat)";
        
        $stmt= $this->connexion->prepare($sql);
        $stmt->bindParam('libelle',$libelle,PDO::PARAM_STR);
        $stmt->bindParam('description',$description,PDO::PARAM_STR);
        $stmt->bindParam('date',$date,PDO::PARAM_STR);
        $stmt->bindParam('priorite',$priorite,PDO::PARAM_STR);
        $stmt->bindParam('etat',$etat,PDO::PARAM_STR);
     

        $stmt->execute();
        header("Location: ../View/index.php");
        exit();

        } catch (PDOException $e) {
          
            die ("impossible d'inserer une taches " . $e->getMessage());

        }
        
     }



     // la methode pour afficher les taches
    public function AffichesTaches (){
     
    try {
   
    $sql = "SELECT * FROM taches ";
    $stmt=$this->connexion->prepare($sql);
    $stmt->execute();
    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
    return $resultat;
 
    } catch (PDOException $e) {
   
        die("erreur impossible d'afficher le billet".$e->getMessage()); 

}
    }

     //les methodes pour affichers la liste des des nom des fiches
     public function AfficheLibelleTaches(){
       
        $sql="SELECT * FROM taches WHERE id = :id";

        $stmt= $this->connexion->prepare($sql);
        $stmt -> bindParam(':id', $_GET["id"], PDO::PARAM_INT );
        $stmt->execute();
        $resultat_libelle = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
        return $resultat_libelle ;
     }


public function ModifieTache($id,$libelle,$description,$date,$priorite,$etat){
   

    try {
   

    //la requette de la modification 
    $sql="UPDATE taches SET libelle = :libelle, description = :description ,date = :date,
    priorite = :priorite ,etat = :etat WHERE id = :id ";
   
    
   $stmt= $this->connexion->prepare($sql);

   $stmt->bindParam('id',$id,PDO::PARAM_INT);
   $stmt->bindParam('libelle',$libelle,PDO::PARAM_STR);
   $stmt->bindParam('description',$description,PDO::PARAM_STR);
   $stmt->bindParam('date',$date,PDO::PARAM_STR);
   $stmt->bindParam('priorite',$priorite,PDO::PARAM_STR);
   $stmt->bindParam('etat',$etat,PDO::PARAM_STR);


   $stmt->execute();
   header("Location: ../View/index.php");
   exit();
  } catch (PDOException $e) {
          
    die ("impossible d'inserer une taches " . $e->getMessage());

  }

  }

   public function SupprimerTache($id){

    try {
   
    $sql= " DELETE FROM taches WHERE id = :id " ;
         // Preparation de la requete
         $stmt =$this->connexion -> prepare($sql) ;
         //liasion de la valeur id
           $stmt->bindValue(':id',$id, PDO::PARAM_INT) ;
           //Exécution de la requete
           $stmt->execute() ;
           return true ;

          

       } catch (PDOException $e) {
           die("impossible  de Supprimer". $e->getMessage());
       }
   }





























    }


?>