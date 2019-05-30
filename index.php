<?php
require_once '_connexion.php';



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
$sth = $dbh->query("
    SELECT prenom_acc, formation
    FROM accueil

    ");

$sth1 = $dbh->query("
    SELECT nom_comp
    FROM competances
    WHERE type_comp='Hardskill'
");

$sth2 = $dbh->query("
    SELECT nom_comp
    FROM competances
    WHERE type_comp='Softskill'
");

$sth3 = $dbh->query("
    SELECT nom_comp
    FROM competances
    WHERE type_comp='Langue'
");

$sth4 = $dbh->query("
    SELECT nom_emploie, entreprise_emploie, date_debut_emploie, date_fin_emploie, photo_emploie
    FROM experiences
");

$sth5 = $dbh->query("
    SELECT icone, diplome, detail
    FROM diplomes
");

$sth6 = $dbh->query("
    SELECT image, liensite, description, technique
    FROM projet
");

$sth7 = $dbh->query("
    SELECT photo_form, ecole, telephone, mail, cv
    FROM page_formulaire
")

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Léone Lalloué, 18 ans actuellemnt en recherch de stage">
    <meta name="keywords" content="Portfolio CV Léone Lalloué pour Recheche de stage">
    <link rel="stylesheet" style="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="#accueil"><li>Présentation</li></a>
        <a href="#presentation"><li>Compétences</li></a>
        <a href="#Experience"><li>Experience</li></a>
        <a href="#Education"><li>Diplômes</li></a>
        <a href="#projet"><li>Projets</li></a>
        <a href="#contact"><li>Contact</li></a>
    </nav>
    <section id="accueil">
        <?php
        while($row = $sth->fetch(PDO::FETCH_ASSOC)):
        ?>
        <h1><?= $row['prenom_acc']; ?></h1>
        <h2><?= $row['formation']; ?></h2>
        <?php
        endwhile;
        ?>
    </section>
    <section id="presentation">
        <h2>Compétences</h2>
        <div>
            <div>
                <h3>HardSkill</h3>
                <?php
                while($row = $sth1->fetch(PDO::FETCH_ASSOC)):
                    ?>
                    <p><?= $row['nom_comp']; ?></p>
                <?php
                endwhile;
                ?>
            </div>
            <div>
                <h3>Langues</h3>
                <?php
                while($row = $sth3->fetch(PDO::FETCH_ASSOC)):
                    ?>
                    <p><?= $row['nom_comp']; ?></p>
                <?php
                endwhile;
                ?>
            </div>
            <div>
                <h3>SoftSkill</h3>
                <?php
                while($row = $sth2->fetch(PDO::FETCH_ASSOC)):
                    ?>
                    <p><?= $row['nom_comp']; ?></p>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </section>
    <section id="Experience">
        <h2>Experiences Professionelles</h2>
        <div>
            <?php
            while($row = $sth4->fetch(PDO::FETCH_ASSOC)):
            ?>
            <div>
                <img src="<?= $row['photo_emploie']; ?>" alt="<?= $row['nom_emploie']; ?>">
                <p><?= $row['date_debut_emploie']; ?></p>
                <p><?= $row['date_fin_emploie']; ?></p>
                <p><?= $row['nom_emploie']; ?></p>
                <p><?= $row['entreprise_emploie']; ?></p>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </section>
    <section id="Education">
        <h2>Diplôme</h2>
        <div>
            <?php
            while($row = $sth5->fetch(PDO::FETCH_ASSOC)):
            ?>
            <div>
                <img src="<?= $row['icone']; ?>" alt="<?= $row['diplome'] ; ?>">
                <p><?= $row['diplome'] ; ?></p>
                <p><?= $row['detail'] ; ?></p>
            </div>
            <?php
            endwhile;
            ?>
        </div>
    </section>
    <section id="projet">
        <h2>Mes projets et réalisations</h2>
        <div>
            <?php
            while($row = $sth6->fetch(PDO::FETCH_ASSOC)):
                ?>
                <div>
                    <a href="<?= $row['liensite'] ; ?>"><img src="<?= $row['image'] ; ?>"></a>
                    <p><?= $row['description'] ; ?><i><?= $row['technique'] ; ?></i></p>
                </div>
            <?php
            endwhile;
            ?>
        </div>
    </section>
    <section id="contact">
        <div>
            <div>
                <?php
                while($row = $sth7->fetch(PDO::FETCH_ASSOC)):
                ?>
                <img src="<?= $row['photo_form'] ; ?>">
                <p>Léone Lalloué</p>
                <img src="photos/etude.png">
                <p><?= $row['ecole'] ; ?></p>
                <img src="photos/tel.png">
                <p><?= $row['telephone'] ; ?></p>
                <img src="photos/mail.png">
                <p><?= $row['mail'] ; ?></p>
                <a href="<?= $row['cv'] ; ?>" download="Curraculum Vitae"><button>Télécharger mon CV</button></a>
                <?php
                endwhile;
                ?>
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
</body>
</html>