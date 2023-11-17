


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
<?php
include 'block/javascript.php'
?>
<div class="formulaire">
    <?php
    include 'block/header.php';
    $errors = [];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["identifiant"])){
            $errors["identifiant"] = "veuillez saisir un identifiant";
        };
        if(strlen($_POST["identifiant"])< 3){
            $errors['identifiant'] = "pas assez de lettres";
        }
    }
    ?>
<form method="post">
    <label for="identifiant">Identifiant</label>
    <input value="<?php
    if(!empty($_POST['identifiant'])){
        echo($_POST['identifiant']);
    }

    ?>" type="text" class="form-control <?php
    if(array_key_exists("identifiant",$errors)){
        echo('is-invalid');
    }
    ?>" name="identifiant">
    <div class='invalid-feedback'>
        <?php
        if(array_key_exists("identifiant",$errors)){
            echo($errors["identifiant"]);
        }
        ?>
    </div>
    <label for="pswd">Mot de passe</label>
    <input type="password" name="pswd">
    <input type="submit" name="verif">
</form>
</div>

</body>
</html>