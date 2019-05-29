<?php
require_once '_connexion.php';

if(isset($_POST['envoyer']) && !empty($_POST['image']) && !empty($_POST['liensite']) && !empty($_POST['descriptionsite']) && !empty($_POST['technosite'])){
    $sth = $dbh->prepare("
    INSERT INTO projet(image, liensite,description, technique)
    VALUES(:image, :liensite, :descriptionsite, :technosite)
    ");
    $sth->bindValue('image', $_POST['image']);
    $sth->bindValue('liensite', $_POST['liensite']);
    $sth->bindValue('descriptionsite', $_POST['descriptionsite']);
    $sth->bindValue('technosite', $_POST['technosite']);
    $sth->execute();
}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Léone Lalloué, 18 ans actuellemnt en recherch de stage">
    <meta name="keywords" content="Portfolio CV Stage Etudiante Informatique HTML CSS Ecole Entreprise Projet ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" style="text/css" href="styleadmin.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<a href="indexadmin.php"><img src="../photos/arrow.png"></a>
<h2 class="formulaire">Gestion du Portfolio</h2>
<section id="reed" >
    <article>
        <h3>Section Experience</h3>
        <a href="_accueil.php"><p>Section Accueil</p></a>
        <a href="_competences.php"><p>Section Compétences</p></a>
        <a href="_experience.php"><p>Section Expérience</p></a>
        <a href="_diplome.php"><p>Section Diplômes</p></a>
        <a href="_contact.php"><p>Section Contact</p></a>
    </article>
    <article>
        <form action="" method="post">
            <div class="form-group">
                <label for="image">Lien image du site :</label>
                <input type="text" name="image" class="form-control" id="image"/>
            </div>
            <div class="form-group">
                <label for="Lien">Lien vers le site :</label>
                <input type="text" name="liensite" class="form-control" id="liensite"/>
            </div>
            <div class="form-group">
                <label for="Desc">Description du projet :</label>
                <input type="text" name="descriptionsite" class="form-control" id="descriptionsite"/>
            </div>
            <div class="form-group">
                <label for="Techno">Techno utilisée :</label>
                <input type="text" name="technosite" class="form-control" id="technosite"/>
            </div>
            <div>
                <input type="submit" class="form-control" name="envoyer" value="Envoyer"/>
            </div>
        </form>
    </article>
</section>
</body>
