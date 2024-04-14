<?php
 require "../config.php";

class user{

    private $connexion ;
    private $nom_complet;
    private $email;
    private $mdp;
    private $poste;
    private $telephone;
    private $adresse;
    private $id;

  public function __construct($connexion,$nom_complet,$email,$mdp,$poste,$telephone,$adresse,$id){
        $this->connexion = $connexion;
        $this->nom_complet = $nom_complet;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->poste = $poste;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->id = $id;
  }

 //accesseur et mutateur du nom au complet
 public function getId(){
   return $this->id;
 }
 public function setId($id){
    $this-> id = $id;
 }





  //accesseur et mutateur du nom au complet
  public function getNom_complet(){
    return $this->nom_complet;
  }
  public function setNom_complet($nom_complet){
     $this->nom_complet=$nom_complet;
  }

   //accesseur et mutateur de l'email
public function getEmail(){
    return $this->email;
  }
public function setEmail($email){
    $this->email=$email;
} 

 //accesseur et mutateur poste
 public function getMdp(){
    return $this->mdp;
 }
 public function setMdp($mdp){
    $this->mdp=$mdp;
 }

  //accesseur et mutateur  de poste
   public function getPoste(){
    return $this->poste;
   }
   public function setPoste($poste){
    $this->poste = $poste;
   }
 
   //accesseur et mutateur de telephone
   public function getTelephone (){
     return $this->telephone;
   }
   public function setTelephone($telephone){
    $this->telephone=$telephone;

   }
//accesseur et mutateur de l'addresse
   public function getAdresse (){
    return $this->adresse;
   }
   public function setAdresse($adresse){
    $this->adresse=$adresse;
   }
   
    //methode pour enregistrer un utlisateur

   public function enregistre($nom_complet,$email,$mdp,$poste,$telephone,$adresse){
     try {
        
      // la requete 
        $ql='INSERT INTO user(nom_complet,email,mdp,poste,telephone,adresse) 
        VALUES (:nom_complet,:email,:mdp,:poste,:telephone,:adresse)';
       
       //préparation de la requette 
       $stmt= $this->connexion->prepare($ql);
       $stmt->bindParam(':nom_complet',$nom_complet,PDO::PARAM_STR);
       $stmt->bindParam('email',$email,PDO::PARAM_STR);
       $stmt->bindParam('mdp',$mdp,PDO::PARAM_STR);
       $stmt->bindParam('poste',$poste,PDO::PARAM_STR);
       $stmt->bindParam('telephone',$telephone,PDO::PARAM_INT);
       $stmt->bindParam('adresse',$adresse,PDO::PARAM_STR);

     

        //Execution de la requette
       $stmt->execute();
  
       header("Location: ../View/index.php");
        exit();
     } catch (PDOException $e) {
      die ("impossible d'inserer les données " . $e->getMessage());
     }
     }
  
     public function connect($email,$mdp,){
      $sql = "SELECT * FROM user WHERE email = :email AND mdp = :mdp";

      // Préparer la déclaration PDO
      $stmt= $this->connexion->prepare($sql);
      $stmt->bindParam('email',$email,PDO::PARAM_STR);
      $stmt->bindParam('mdp',$mdp,PDO::PARAM_STR);
  
      // Liaison des valeurs et exécution de la requête
      $stmt->execute();
      // Vérifier si l'utilisateur existe
    if($stmt->rowCount() > 0) {
      // Utilisateur trouvé, rediriger vers la page d'accueil ou autre page
      header("Location: ../View/index.php");
      exit();
      
      //supprime.php?id=<?php echo $row['id']
  } else {
      // Utilisateur non trouvé, afficher un message d'erreur
      echo "Email ou mot de passe incorrect.";
  }
   }

   public function afficher(){


    $sql = "SELECT * FROM user WHERE id = :id ";
    $stmt = $this -> connexion ->prepare($sql) ;
    $stmt -> execute();
    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultat ;
      
   }














}
?>