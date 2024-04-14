<?php 
  
  require "../config.php";
  require "../Model/Taches_model.php";
  
  if (isset($_GET['id'])){
    $id = $_GET['id'];
   
    $tache = new taches($connexion,"","","","","","","");
    $tache->SupprimerTache($id);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    header("Location: ../View/index.php") ;
    exit() ;
}else{
    echo"Id de billet non spécifier";
  }



?>