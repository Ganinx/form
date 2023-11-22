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
    <input type="password" name="pswd" id="pswd" class="form-control"><svg id="eyes-close"  width="25" height="25" fill="none" stroke="#9a9a9a" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"></path>
        <path d="M14.12 14.12a3 3 0 1 1-4.24-4.24"></path>
        <path d="m1 1 22 22"></path>
        <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"></path>
    </svg>
    <svg width="25" height="25" fill="none" id="eyes" class="d-none" stroke="#9a9a9a" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
        <path d="M12 9a3 3 0 1 0 0 6 3 3 0 1 0 0-6z"></path>
    </svg>
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
include 'block/js-connexion.php';
?>
</body>
</html>