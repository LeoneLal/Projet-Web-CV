<?php
$dsn = 'pgsql:dbname=projet_web;host=127.0.0.1';
$user = 'php';
$password = 'azerty-85';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : '.$e->getMessage();
}
?>