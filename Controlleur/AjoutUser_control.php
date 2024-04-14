<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require "../Model/User_model.php";


if(isset($_POST['save_inscription'])){
  
    function validate($verifie){
        $verifie = trim($verifie);
        $verifie = stripcslashes($verifie);
        $verifie = htmlspecialchars($verifie);
        return $verifie; }

   $nom_complet =  validate($_POST['nom_complet']);
   $email = validate($_POST['email']);
   $mdp = validate($_POST['mdp']);
   $poste = validate($_POST['poste']);
   $telephone = validate($_POST['telephone']);
   $adresse = validate($_POST['adresse']);
 
   $user = new user($connexion,'','','','','','','');
   $user->enregistre($nom_complet,$email,$mdp,$poste,$telephone,$adresse);
}

?>