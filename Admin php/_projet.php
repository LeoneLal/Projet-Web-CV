<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Léone Lalloué, 18 ans actuellemnt en recherch de stage">
    <meta name="keywords" content="Portfolio CV Stage Etudiante Informatique HTML CSS Ecole Entreprise Projet ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" style="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<a href="index.php"><img src="../photos/arrow.png"></a>
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
        <form>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Nom du projet</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="icone">Photo du projet (JPG, PNG ou GIF | max. 15 Ko) :</label><br />
                <input type="file" name="icone" id="icone" /><br />
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Lien vers le projet</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
        </form>
    </article>
</section>
</body>
