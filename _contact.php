<?php
require_once '_connexion.php';

if (isset($_POST['envoyer']) && !empty($_POST['icone']) && !empty($_POST['ecole']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['cv'])){
    $sth = $dbh->prepare("

    UPDATE page_formulaire
    SET photo_form=:icone, ecole=:ecole, telephone=:tel, mail=:mail, cv=:cv
    WHERE id_form=1
    
    ");
    $sth->bindValue('icone', $_POST['icone']);
    $sth->bindValue('ecole', $_POST['ecole']);
    $sth->bindValue('tel', $_POST['tel']);
    $sth->bindValue('mail', $_POST['mail']);
    $sth->bindValue('cv', $_POST['cv']);
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
        <h3>Section Contact</h3>
        <a href="_accueil.php"><p>Section Accueil</p></a>
        <a href="_competences.php"><p>Section Compétences</p></a>
        <a href="_experience.php"><p>Section Expérience</p></a>
        <a href="_diplome.php"><p>Section Diplômes</p></a>
        <a href="_projet.php"><p>Section Projet</p></a>

    </article>
    <article>
        <form action="" method="post">
            <div class="form-group">
                <label for="icone">Photo de profil (JPG, PNG ou GIF | max. 15 Ko) :</label><br/>
                <input class="form-control"  type="photo" name="icone" id="icone" />
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Ecole</label>
                <textarea class="form-control" name="ecole" id="ecole" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Numéro de téléphone</label>
                <textarea class="form-control" name="tel" id="tel" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Email</label>
                <textarea class="form-control" name="mail" id="mail" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="mon_fichier">Lien vers le CV :</label><br/>
                <input class="form-control"  type="text" name="cv" id="cv"/>
            </div>
            <div>
                <input class="form-control"  type="submit" name="envoyer" value="ENVOYER" />
            </div>
        </form>
    </article>
</section>
</body>