<?php
$dsn = 'pgsql:dbname=projet_web;host=127.0.0.1';
$user = 'php';
$password = 'azerty-85';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : '.$e->getMessage();
}



if (isset($_POST['envoyer']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['message'])) {
    $sth= $dbh->prepare("
    INSERT INTO contact(nom_contact,prenom_contact,email,message)
    VALUES (:nom,:prenom,:mail,:message)

");
    $sth->bindValue('nom', $_POST['nom']);
    $sth->bindValue('prenom', $_POST['prenom']);
    $sth->bindValue('mail', $_POST['mail']);
    $sth->bindValue('message', $_POST['message']);
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
    <link rel="stylesheet" style="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
<main>
    <nav>
        <a href="#accueil"><li>Présentation</li></a>
        <a href="#presentation"><li>Compétences</li></a>
        <a href="#Experience"><li>Experience</li></a>
        <a href="#Education"><li>Diplômes</li></a>
        <a href="#projet"><li>Projets</li></a>
        <a href="#contact"><li>Contact</li></a>
    </nav>
    <section id="accueil">
        <h1>Léone Lalloué</h1>
        <h2>Etudiante Informatique</h2>
    </section>
    <section id="presentation">
        <h2>Compétences</h2>
        <div>
            <div>
                <h3>Informatique</h3>
                <p>HTML CSS<br>Langage C<br>Python<br>Javascript</p>
            </div>
            <div>
                <h3>Langues</h3>
                <p>Français<br>Anglais <br>Espagnol</p>
            </div>
            <div>
                <h3>Autres</h3>
                <p>Communication<br>Minutie<br>Methodique<br>Organisée</p>
            </div>
        </div>
    </section>
    <section id="Experience">
        <h2>Experiences Professionelles</h2>
        <div>
            <div>
                <img src="photos/bar.png" alt="Serveuse">
                <p>2015-2018</p>
                <p>Serveuse</p>
                <p>Bar &bull; Café chez Gaelle </p>
            </div>
            <div>
                <img src="photos/secr.png" alt="Secretaire">
                <p>Aout 2018</p>
                <p>Secretaire</p>
                <p>CER France &bull; Chateaubriant</p>
            </div>
            <div>
                <img src="photos/compta.png" alt="Saisie Comptable">
                <p>2016-2018</p>
                <p>Saisie Comptable</p>
                <p>Bar Tabac &bull; Café chez Gaelle </p>
            </div>
        </div>
    </section>
    <section id="Education">
        <h2>Diplôme</h2>
        <div>
            <div>
                <img src="photos/bac.jpg">
                <p>Diplome National du Baccaloreat<br><i>Mention très bien</i></p>
            </div>
            <div>
                <img src="photos/permis.png">
                <p>Permis B<br>2018</p>
            </div>
            <div>
                <img src="photos/psc1.jpg">
                <p>PSC1<br>2017</p>
            </div>
        </div>
    </section>
    <section id="projet">
        <h2>Mes projets et réalisations</h2>
        <div>
            <div>
                <a href="https://boring-thompson-9f1db0.netlify.com/"><img src="photos/zelda.PNG"></a>
                <p>Premier Site réalisé avec du <i>Javascript</i></p>
            </div>
            <div>
                <a href="https://tender-babbage-d44c6f.netlify.com/"><img src="photos/premier.PNG"></a>
                <p>Premier Portfolio en <i>HTML CSS</i></p>
            </div>

        </div>
    </section>
    <section id="contact">
        <div>
            <div>
                <img src="photos/photo.PNG">
                <p>Léone Lalloué</p>
                <img src="photos/etude.png">
                <p>Campus Ynov Nantes</p>
                <img src="photos/tel.png">
                <p>07-71-62-33-87</p>
                <img src="photos/mail.png">
                <p>leone.lalloue@ynov.com</p>
                <a href="CV.pdf" download="Curraculum Vitae"><button>Télécharger mon CV</button></a>
            </div>
            <div>
                <h2>Contactez moi !</h2>
                <form action="" method="post">
                    <div>
                        <label for="Nom">Nom :</label>
                        <input type="text" name="nom" id="nom"/>
                    </div>
                    <div>
                        <label for="Prenom">Prénom :</label>
                        <input type="text" name="prenom" id="prenom"/>
                    </div>
                    <div>
                        <label for="mail">Mail :</label>
                        <input type="email" name="mail" id="mail" />
                    </div>
                    <div id="message">
                        <label for="Message" >Message : </label>
                        <textarea name="message" cols="35" rows="10"></textarea>
                        <input type="submit" name="envoyer" value="ENVOYER" />
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
</body>
</html>
