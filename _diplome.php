<?php
require_once '_connexion.php';

if(isset($_POST['envoyer']) && !empty($_POST['icone']) && !empty($_POST['diplome']) && !empty($_POST['detail'])) {
    $sth = $dbh->prepare("
    INSERT INTO diplomes(icone, diplome, detail)
    VALUES (:icone, :diplome, :detail)
    ");
    $sth->bindValue('icone', $_POST['icone']);
    $sth->bindValue('diplome', $_POST['diplome']);
    $sth->bindValue('detail', $_POST['detail']);
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
        <h3>Section Diplôme</h3>
        <a href="_accueil.php"><p>Section Accueil</p></a>
        <a href="_competences.php"><p>Section Compétences</p></a>
        <a href="_experience.php"><p>Section Expérience</p></a>
        <a href="_projet.php"><p>Section Projet</p></a>
        <a href="_contact.php"><p>Section Contact</p></a>
    </article>
    <article>
        <form action="" method="post">
            <div class="form-group">
                <label for="icone">Icône représentative :</label><br />
                <input type="text" class="form-control" name="icone" id="icone" /><br />
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Nom Diplôme</label>
                <textarea name="diplome" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Détail</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div>
                <input type="submit" class="form-control" name="envoyer" value="ENVOYER" />
            </div>
        </form>
    </article>
</section>
</body>
</html>