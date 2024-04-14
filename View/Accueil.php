<?php
 include_once "header.php";
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
 <div class="fond_img">
  
    <h1 class="titre-fond_img" >Bienvenue chez</h1>
    <h1 class="nom_fond_img"> MBARRODI-CULTURE</h1>
    <button class="btn_fong_img">Contactez Nous</button>
    <h2 class="slogan_fond_img">Votre culture est notre priorité</h2>
 </div>
       <h1 class="titre_present">Nos Services</h1>
<div class="present">
    <p class="text_present"> Notre engagement envers l'excellence agricole se traduit par une gamme complète de services conçus pour répondre aux besoins de chaque exploitant. <br> Nous comprenons que chaque parcelle de terre est unique, et c'est pourquoi nos services sont conçus pour être flexibles et adaptatifs.

De la préparation des sols à la récolte, en passant par la gestion intégrée des ravageurs et la fertilisation, notre équipe d'experts agronomes travaille en étroite collaboration avec vous pour élaborer des plans personnalisés qui maximisent les rendements tout en minimisant l'impact sur l'environnement. <br>

En plus de nos services traditionnels, nous proposons également des solutions innovantes telles que la télédétection par drone et l'analyse des données satellitaires pour surveiller la santé des cultures et détecter les problèmes potentiels avant qu'ils ne deviennent des problèmes majeurs. <br>

</p>
    <img class="photo_present" src="../img/semence.png" alt="">
</div>




       <h1 class="titre_present">Notre Equipe</h1>
       <div class="present">
        <p class="text_present">Notre équipe agricole est composée de personnes passionnées par le monde agricole, dotées d'une expertise diversifiée et d'un dévouement inébranlable envers l'agriculture durable. <br> Chaque membre de notre équipe apporte une contribution précieuse, que ce soit par son savoir-faire technique, sa connaissance approfondie des cultures ou son engagement envers l'innovation. <br>

Nos agronomes expérimentés sont là pour vous guider à chaque étape du processus agricole, fournissant des conseils avisés et des solutions sur mesure pour répondre aux défis spécifiques de votre exploitation. <br> Ils sont soutenus par notre équipe administrative dévouée, qui veille à ce que toutes vos opérations se déroulent sans accroc. <br>

Ensemble, nous formons une famille agricole unie, déterminée à faire progresser l'agriculture vers un avenir plus durable. 
</p>
        <img class="photo_present" src="../img/Arrosage.png" alt="">
       </div>

</body>
<style>
.fond_img{
    padding: 1.5%;
     background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../img/000631214_896x598_c.png');
    background-size: cover;
    background-repeat: no-repeat;
    height: 35vh;
}
.titre-fond_img{
text-align: center;
color: white;

}
.nom_fond_img{
text-align: center;
color: #16DB5F;
margin:1rem;
}

.btn_fong_img{
    margin: 0 auto;
 align-items: center;
 display: flex;
 justify-content: center;
 border-radius: 5rem;
 border:none ;
 background-color: #0B724F;
 width: 12rem;
 height: 3rem;
 color: white ;
 font-size: 1.2rem;
}

.slogan_fond_img{
text-align: center;
color: white;
margin:1rem;
}
.titre_present{
    text-align: center;
color: #0B724F;
margin:1rem;
}
.present{
    margin: 2rem 5rem;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    
}
.text_present{

    padding: 2%;
    font-size: 1.1rem;
    font-family: Arial, Helvetica, sans-serif;
    align-items: center;
    
}
.photo_present{
    width: auto;
    height: 20rem;
    margin: 0 auto;
}
</style>
</html>

<?php
 include_once "footer.php";
?>