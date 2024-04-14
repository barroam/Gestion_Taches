<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Taches</title>
    <link rel="stylesheet" href="designSystem.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
  <header class="navbar">
    <img  class="logo_nav" src="../img/13.png" alt="logo">
     
    <a class="nav-link" href="Accueil.php">Accueil</a>
     <a class="nav-link"  href="Equipe.php">Equipe</a>
     <a class="nav-link"  href="service.php">Service</a>
     <select class="nav-select" onchange="window.location.href = this.value;">
     <option value="">Role</option>
        <option value="Accueil.php">Visiteur</option>
        <option value="connexion.php">Employer</option>
     </select>
  </header>
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
  height: 3rem;
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

</style>
</html>