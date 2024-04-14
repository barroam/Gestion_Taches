<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require "../Model/User_model.php";



if(isset($_POST['save_connexion'])){
 
    function validate($verifie){
        $verifie = trim($verifie);
        $verifie = stripcslashes($verifie);
        $verifie = htmlspecialchars($verifie);
        return $verifie; }
    
        $email=validate($_POST['email']);
        $mdp=validate($_POST['mdp']);

        $user = new User($connexion,'','','','','','','');
        $user->connect($email,$mdp);

}































    ?>