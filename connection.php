<?php
session_start();



$erreur = '';
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($_POST['identifiant'] == "valentin" && $_POST["pswd"] == "onepiece") {
        $_SESSION['identifiant'] = "valentin";
        header('Location: moncompte.php');
        exit();
    } else {
        $erreur = "identifiant invalide";
    }
}
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include</title>
    <?php
    include'block/stylesheet.php';
    ?>
</head>
<body>
<div class="container">
    <?php
    include 'block/header.php'

    ?>
    <?php
    include 'block/menu.php'
    ?>
    <h1 class="text-center">Connexion</h1>
</div>





?>
<div class="formulaire">
<form method="post">
    <label for="identifiant">Identifiant</label>
    <input value="<?php
    if(!empty($_POST['identifiant'])){
        echo($_POST['identifiant']);
    }

    ?>" type="text" class="form-control" name="identifiant">
    <label for="pswd">Mot de passe</label>
    <input type="password" name="pswd" class="form-control">
    <div>
        <?php
        if(!is_null($erreur)){
            echo('<p class="text-danger">'.$erreur.'</p>');
        }
        ?>
    </div>
    <input type="submit" name="verif">
</form>
</div>
<?php
include 'block/javascript.php';
?>
</body>
</html>