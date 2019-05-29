<?php
require_once '_connexion.php';

if (isset($_POST['envoyer']) && !empty($_POST['metier']) && !empty($_POST['entreprise']) && !empty($_POST['dated']) && !empty($_POST['datef']) && !empty($_POST['lien'])) {
    $sth= $dbh->prepare("
    INSERT INTO experiences(nom_emploie,entreprise_emploie, date_debut_emploie, date_fin_emploie, photo_emploie)
    VALUES(:metier,:entreprise,:dated,:datef,:lien)
");
    $sth->bindValue('metier', $_POST['metier']);
    $sth->bindValue('entreprise', $_POST['entreprise']);
    $sth->bindValue('dated', $_POST['dated']);
    $sth->bindValue('datef', $_POST['datef']);
    $sth->bindValue('lien', $_POST['lien']);
    $sth->execute();
};

if (isset($_POST['envoyer']) && !empty($_POST['metier']) && !empty($_POST['entreprise']) && !empty($_POST['dated']) && empty($_POST['datef']) && !empty($_POST['lien'])) {
    $sth= $dbh->prepare("
    INSERT INTO experiences(nom_emploie,entreprise_emploie, date_debut_emploie, date_fin_emploie, photo_emploie)
    VALUES(:metier,:entreprise,:dated, Travail en cours,:lien)
");
    $sth->bindValue('metier', $_POST['metier']);
    $sth->bindValue('entreprise', $_POST['entreprise']);
    $sth->bindValue('dated', $_POST['dated']);
    $sth->bindValue('lien', $_POST['lien']);
    $sth->execute();
};

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
        <a href="_diplome.php"><p>Section Diplômes</p></a>
        <a href="_projet.php"><p>Section Projet</p></a>
        <a href="_contact.php"><p>Section Contact</p></a>
    </article>
    <article>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Lien vers la photo</label>
                <input type="text" class="form-control" name="lien" id="lien">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Date début</label>
                <input type="date" class="form-control" name="dated" id="dated">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Date fin</label>
                <input type="date"class="form-control" name="datef" id="datef">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Métier</label>
                <textarea name="metier" class="form-control" id="metier"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Entreprise</label>
                <textarea name="entreprise" class="form-control" id="entreprise"></textarea>
            </div>
            <div>
                <input type="submit" class="form-control" name="envoyer" value="Envoyer"/>
            </div>
        </form>
    </article>
</section>
</body>