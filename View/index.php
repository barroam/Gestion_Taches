<?php

 require "../Model/Taches_model.php";
 $tache = new taches($connexion,"","","","","","","");
    $resultat = $tache->AffichesTaches();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Taches</title>
    <link rel="stylesheet" href="designSystem.css">
</head>
<body>
<header class="navbar">
    <img  class="logo_nav" src="../img/13.png" alt="logo">
    <h1><a  class="titre_header" href="index.php">Taku Liguey</a> </h1>
     <select class="nav-select" onchange="window.location.href = this.value;">
     <option value="">Role</option>
        <option value="../index.php">Visiteur</option>
         <!--attention cette index est le routeur différent de l'index si dessous -->
        <option value="index.php">Employer</option>
     </select>
  </header>
                
 <div class="container">
     <!-- la partie pour les informations du user et la liste des taches -->
  <div class="box-a">
    <div class="Identite" ></div>
    <div class="Taches_libelle">
      <h1>Taches</h1>
    <?php
    foreach ($resultat as $row) {
      ?>

      <a class="Taches_libelle_one" href="../View/AffichesTaches.php?id=<?php echo $row['id']; ?>"> <?php echo $row['libelle'] ;?></a>


   
      
        

      <?php
    }
    ?>
    </div>
  </div>
  <!-- la partie pour les formulaires-->
  <div class="box-b">
  <h1 class="do_tache">Creer votre Tache</h1>
     <form class="form_t" action="../Controlleur/AjoutTache_control.php" method="post">
    <div class="Option_All">
    <input class="select_form" name="libelle" id="libelle" type="text"> 
     <input class="select_form" name="date" id="date" type="datetime-local">
    </div>   

      <textarea class="textatera_form" name="description" id="description" cols="30" rows="15"></textarea>
      <div class="Option_All">

        <select class="select_form1" name="priorite" id="priorite">
        <option class="prio1" value="Faible">Faible</option>
        <option class="prio2" value="Moyen">Moyen</option>
        <option class="prio3" value="Elevé">Elevé</option>
      </select>
      <select class="select_form2" name="etat" id="etat">
        <option class="etat1" value="A faire">A Faire</option>
        <option class="etat2" value="En cours"> En cours</option>
        <option class="etat3" value="Terminer">Terminer</option>
      </select>
 </div>
       <button class="btn" name="save_tache" type="submit" id="save_tache"> Confirmer </button>
     </form>

  </div>
 </div>


</body>
<style>
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    background-color: #F0F4ED;
  }
  .do_tache{
    align-items: center;
    color: #0B724F;
    text-align: center;
    margin: 0.5%;
  }
  /* la partie header*/
.navbar{
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #B1D8B7;
  color: white;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  padding: 0.7%;
}
.logo_nav{
  width: auto;
  height: 3.5rem;
}
.nav-link{
  text-decoration: none;
  font-weight: bold;
  font-size: 1.2rem;
  color: #0B724F;
}
 
 header .nav-link :hover {
  color:#0B724F ;
}
.titre_header{
  text-decoration: none;
  color: white;
}

.nav-select{
  font-size: 1.2rem;
  font-weight: bold;
  color: white;
  border: none;
  background-color: #B1D8B7;
}

.container{
    height: 90vh;
    width: 100%;
    display: grid;
    grid-template-columns: 20rem 1fr;
    
}
.box-a{
    background-color: #0B724F;
    padding: 6%;
    min-height: 20rem;
}
.box-b{
    background-color: #F0F4ED;
    padding: 3% 12%;

}
.form_t{
  display: flex;
  flex-direction: column;
  padding: 1.3%;
  gap: 1.5rem;
  border: solid 0.5rem ;
  border-color: darkgray;
  border-radius: 0.4rem;
  box-shadow: #B1D8B7 0.1rem 0.1rem 0.1rem 0.1rem;

}
.saisi{
  height: 2.7rem;
  
}
.btn{
  margin: 0 auto;
height: 2.7rem;
width: 50%;
background-color: #0B724F;
  border-radius: 5rem;
  color: white;
  font-size: 1.3rem;
  border: none;
}
.btn:hover{
  background-color: white;
  color: #0B724F;
  font-size: 1.3rem;
}
.Option_All{
  display: flex;
  flex-direction: row;
  gap: 1rem;
}
.select_form{
  height: 2.7rem;
  width: 100%;
  
}

.select_form1{
  height: 2.7rem;
  width: 100%;
  color: #000;
  font-weight: bold;
}
.prio1{
  background-color: orange;
}
.prio2{
  background-color: chocolate;
}.prio3{
  background-color: maroon;
}


.select_form2{
  height: 2.7rem;
  width: 100%;
  color: #000;
  font-weight: bold;
}
.etat1{
  background-color: beige ;
}
.etat2{
  background-color: greenyellow ;
}
.etat3{
  background-color: green ;
}
.Identite{
    width: 100%;
    height: 17rem;
    background-color: whitesmoke;
    display: flex;
    justify-content: center;
}
.Taches_libelle{
  display: flex;
  flex-direction: column;
  color: white;
  align-items: center;
  padding: 3%;
  font-family: Arial, Helvetica, sans-serif;
}
.Taches_libelle_one{
  color: yellow;
  font-size: 1.3rem;
  text-decoration: none;
}
</style>
</html>
