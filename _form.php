<?php
$dsn = 'pgsql:dbname=projet_web;host=127.0.0.1';
$user = 'php';
$password = 'azerty-85';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : '.$e->getMessage();
}

$sth = $dbh->query("
    SELECT id, nom_contact, prenom_contact, email, message
FROM contact

    ");
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
<h2 class="formulaire">Réponses formulaire de contact</h2>
<div id="form">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nom/Prénom</th>
            <th scope="col">Mail</th>
            <th scope="coll">Message</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)):
            ?>
            <tr>
                <th scope="row"><?= $row['id']; ?></th>
                <td><?= $row['nom_contact']; ?> / <?= $row['prenom_contact']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['message']; ?></td>
            </tr>
        <?php
        endwhile;
        ?>
        </tbody>
    </table>
</div>

</body>
