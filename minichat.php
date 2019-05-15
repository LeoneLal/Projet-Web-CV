<?php
    session_start();
/**
 * Règles de gestion :
 *
 * Un pseudo ne peut pas contenir d'espace
 * Dans le fichier chat.txt, vous ne devez pas avoir d'html
 * Les messages doivent être triés par ordre décroissant
 * Il est possible de se déconnecter du minichat
 * Être possible de filter par pseudo
 *
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    if (isset($_POST['message']) && $_POST['message'] !== '') {
        $fp = fopen('chat.txt', 'a+');
        fwrite($fp, date('d/m/Y H:i:s'). ' '.$_SESSION['pseudo'].': '.$_POST['message']."\n\r");
    }

    if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        unset($_SESSION['pseudo']);
        header('Location: /');
    }

    if (isset($_POST['pseudo']) && $_POST['pseudo'] !== '') {
        // Gestion du pseudo
        if (strpos($_POST['pseudo'], ' ')) {
            echo "<strong>Votre pseudo ne peut pas contenir d'espaces !</strong>";
        } else {
            $_SESSION['pseudo'] = $_POST['pseudo'];
        }
    }

?>

    <h1>Mini Chat</h1>

<?php if (isset($_SESSION['pseudo'])): ?>
    <?php echo '<strong>Bonjour '.$_SESSION['pseudo'].'</strong>'; ?>
    <a href="?action=logout">Se déconnecter</a><br>
    <form action="" method="POST" style="display: inline">
        <input type="text" name="message" autofocus>
        <input type="submit" value="Envoyer" name="Envoyer">

    </form>

    <form action="" method="POST" style="display: inline">
        <input type="text" name="filter" value="<?= isset($_POST['filter'])?$_POST['filter']:''; ?>">
        <input type="submit" value="Filtrer par pseudo" name="Filtrer">

    </form>
<?php else: ?>
    <form action="" method="POST">
        <input type="text" name="pseudo">
        <input type="submit" value="Entrer sur le minichat" name="Envoyer">

    </form>

<?php endif; ?>

<?php
    $messages = [];
    $fp = fopen('chat.txt', 'a+');
    while (($buffer = fgets($fp, 4096)) !== false && !feof($fp)) {
        $messages[] = $buffer;
    }
    krsort($messages);
?>
    <ul>
        <?php foreach ($messages as $message): ?>
            <?php
                $date = substr($message, 0, 20);
                $fullMessage = substr($message, 20);
                $pseudo = trim(substr(trim($fullMessage), 0, strpos(trim($fullMessage), ' ')-1));
                if (isset($_POST['filter']) && $_POST['filter'] != '' && strtolower(trim($pseudo)) != strtolower(trim($_POST['filter']))) {
                    continue;
                }
                $message = substr(trim($fullMessage), strpos(trim($fullMessage), ' '));
            ?>
            <li><em><?=trim($date); ?></em> <strong><?=$pseudo; ?></strong> <?=$message; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>