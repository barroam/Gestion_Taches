<?php
 require_once "../Model/Taches_model.php";
 $tache = new taches($connexion,"","","","","","","");
    $resultat = $tache->AffichesTaches();
    $resultat_all = $tache->AfficheLibelleTaches()
   
    
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

      <a class="Taches_libelle_one" href="../View/AffichesTaches.php?id=<?php echo $row['id'];    ?>"> <?php echo $row['libelle'] ;?></a>

      <?php
   
    }
    
    ?>
    </div>
  </div>
  <!-- la partie pour les formulaires-->
  <div class="box-b">
  <h1 class="do_tache">Votre Tache  </h1>
<div class="form_t">


<div class="Option_All">
<h2 class="select_form1"> <span>Titre: </span> <?php echo $resultat_all[0]['libelle'] ;?> </h2>
<h2 class="select_form2"> <span>Date: </span>  <?php echo $resultat_all[0]['date'] ;?></h2>
</div>
<p class="textatera_form">
<span> Description: </span> <br>
<?php echo $resultat_all[0]['description'] ;?>
</p>

<div class="Option_All">
<h2 class="select_form1"> <span>Priorite: </span> <?php echo $resultat_all[0]['priorite'] ;?></h2>
<h2 class="select_form2"> <span>Etat: </span>  <?php echo $resultat_all[0]['etat'] ;?> </h2>
</div>
<div class="Option_All">
<h2 class="select_form1"> <a class="Edit" href="ModifierTaches.php?id=<?php echo $resultat_all[0]['id'];    ?>">Edit</a>  </h2>
<h2 class="select_form2"> <a class="delete" href="../Controlleur/SupprimerTache_control.php?id=<?php echo $resultat_all[0]['id'];    ?>" >Delete</a>  </h2>
</div>

</div>

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
  .titre_header{
  text-decoration: none;
  color: white;
}

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
  padding: 2%;
  gap: 1.5rem;
  border: solid 0.5rem ;
  border-color: green;
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
    height: 1.1rem;
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
  height: 1.1rem;
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
.textatera_form{
    font-size: 1.2rem;
    font-family: 'Times New Roman', Times, serif;
}
.textatera_form span {
    font-weight: bold;
    font-size: 1.4rem;
}
span{
    color: #0B724F;
}
.delete{
    float: right;
    text-decoration: none;
    color: red;
}
.Edit{
    text-decoration: none;
    color: blue;
    
}
.caches{
    display: none;
}
</style>
</html>
