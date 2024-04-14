

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require "../Model/Taches_model.php" ;



if (isset($_POST['save_tache'])) {
    function validate($verifie){
        $verifie = trim($verifie);
        $verifie = stripcslashes($verifie);
        $verifie = htmlspecialchars($verifie);
        return $verifie; }
   
  $libelle = validate($_POST['libelle']) ;
  $date = validate($_POST['date']) ;
  $description = validate($_POST['description']) ;
  $priorite = validate($_POST['priorite']) ;
  $etat = validate($_POST['etat']) ;

 
  $taches = new taches($connexion,"","","","","","","");
  $taches->insertTaches($libelle,$description,$date,$priorite,$etat);




































}
































?>