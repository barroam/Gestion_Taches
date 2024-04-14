
<?php require('header.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>  
</head>

<body>

    <div class="container">
        <h2>Inscription</h2>
        <form action="../Controlleur/AjoutUser_control.php" method="POST">
            <input  class="saisi" type="text" name="nom_complet" id="nom_complet" placeholder="Nom complet" required><br>
            <input class="saisi" type="text" name="email" id="email" placeholder="Adresse email" required><br>
            <input class="saisi" type="password" name="mdp" id="mdp"  placeholder="Mot de passe" required><br>
            <input class="saisi" type="text" name="poste" id="poste" placeholder="Votre profession"><br>
            <input class="saisi" type="number" name="telephone" id="telephone" placeholder="Numéro de téléphone"><br>
            <input class="saisi" type="text" name="adresse" id="adresse" placeholder="Votre adresse"><br>
            <button type="submit" name="save_inscription">S'inscrire</button>
          <p>Si vous avez deja un compte passer a la  <a href="connexion.php"> Connexion</a></p>
        </form>
    </div>

</body>

<style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
           
        }
        
        .container {
            max-width: 30rem;
            margin: 100px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color:#0B724F;
            background-color:#B1D8B7;
            background-size:  cover;
            background-position: center; 
            background-repeat: no-repeat;
        }
        
        .container h2 {
            text-align: center;
        }
        
      .saisi{
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .container button {
            width: 95%;
            padding: 10px;
            background-color:#0B724F ;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .container button:hover {
            background-color: #fff;
            color: #000;
        }
     
  </style>
</html>
