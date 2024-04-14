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
<h1 class="titre_present">Notre Equipe</h1>
<h3> </h3>
    <div class="present">
    <img class="photo_present" src="../img/Capture d’écran du 2024-04-10 13-25-45.png" alt="">
    <p class="text_present"> 
        Notre engagement envers l'excellence agricole se traduit par une gamme complète de services conçus pour répondre aux besoins de chaque exploitant. <br> Nous comprenons que chaque parcelle de terre est unique, et c'est pourquoi nos services sont conçus pour être flexibles et adaptatifs.

        De la préparation des sols à la récolte, en passant par la gestion intégrée des ravageurs et la fertilisation, notre équipe d'experts agronomes travaille en étroite collaboration avec vous pour élaborer des plans personnalisés qui maximisent les rendements tout en minimisant l'impact sur l'environnement. <br>

        En plus de nos services traditionnels, nous proposons également des solutions innovantes telles que la télédétection par drone et l'analyse des données satellitaires pour surveiller la santé des cultures et détecter les problèmes potentiels avant qu'ils ne deviennent des problèmes majeurs. <br>

        </p>
        
        </div>

     
       <div class="present">
        <p class="text_present">Notre équipe agricole est composée de personnes passionnées par le monde agricole, dotées d'une expertise diversifiée et d'un dévouement inébranlable envers l'agriculture durable. <br> Chaque membre de notre équipe apporte une contribution précieuse, que ce soit par son savoir-faire technique, sa connaissance approfondie des cultures ou son engagement envers l'innovation. <br>

Nos agronomes expérimentés sont là pour vous guider à chaque étape du processus agricole, fournissant des conseils avisés et des solutions sur mesure pour répondre aux défis spécifiques de votre exploitation. <br> Ils sont soutenus par notre équipe administrative dévouée, qui veille à ce que toutes vos opérations se déroulent sans accroc. <br>

Ensemble, nous formons une famille agricole unie, déterminée à faire progresser l'agriculture vers un avenir plus durable. 
        </p>
        <img class="photo_present" src="../img/Arrosage.png" alt="">
       </div>

       <div class="present">
    <img class="photo_present" src="../img/rahass.png" alt="">
    <p class="text_present"> 
        Notre engagement envers l'excellence agricole se traduit par une gamme complète de services conçus pour répondre aux besoins de chaque exploitant. <br> Nous comprenons que chaque parcelle de terre est unique, et c'est pourquoi nos services sont conçus pour être flexibles et adaptatifs.

        De la préparation des sols à la récolte, en passant par la gestion intégrée des ravageurs et la fertilisation, notre équipe d'experts agronomes travaille en étroite collaboration avec vous pour élaborer des plans personnalisés qui maximisent les rendements tout en minimisant l'impact sur l'environnement. <br>

        En plus de nos services traditionnels, nous proposons également des solutions innovantes telles que la télédétection par drone et l'analyse des données satellitaires pour surveiller la santé des cultures et détecter les problèmes potentiels avant qu'ils ne deviennent des problèmes majeurs. <br>
        </p>
        
        </div>

</body>
<style>
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