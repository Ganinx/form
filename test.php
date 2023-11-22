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
    <?php
    $pattern = "/^(?=.*[!@#$%^&*()_+={}\[\]:;<>,.?\/\-])(?=.*[0-9])(?=.*[A-Z]).{8,}$/";
    $errors = [];
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(strlen($_POST["prenom"])< 3){
            $errors['prenom'] = "pas assez de lettres";
        }
        if(empty($_POST["prenom"])){
            $errors["prenom"] = "veuillez saisir un identifiant";
        }
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(strlen ($_POST["nom"])< 3){
            $errors['nom'] = "pas assez de lettres";
        }
        if(empty($_POST["nom"])){
            $errors["nom"] = "veuillez saisir un identifiant";
        }
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["mail"])){
            $errors["mail"] = "veuillez saisir un identifiant";
        }
        if(strlen($_POST["mail"])< 3){
            $errors['mail'] = "pas assez de lettres";
        }
        if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {

            $errors['mail'] = "est considérée comme invalide.";
        }
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["creaPswd"])){
            $errors["creaPswd"] = "veuillez saisir un identifiant";
        }
        if(!preg_match($pattern,$_POST['creaPswd'])) {
            $errors['creaPswd'] = "pas bon la aussi";
        }
        if(str_contains($_POST['creaPswd'],$_POST['prenom']) || str_contains($_POST['creaPswd'],$_POST['nom'])){
            $errors['creaPswd'] = "pas bon la";

        }

    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["pswd"])){
            $errors["pswd"] = "veuillez saisir un identifiant";
        }
        if(strlen($_POST["pswd"])< 3){
            $errors['pswd'] = "pas assez de lettres";
        }
        if($_POST["creaPswd"] !=$_POST["pswd"] ){
            $errors["pswd"] = "veuillez saisir le meme mot de passe";
        }
        if(count($errors) ==0){
            header('Location: moncompte.php');
            exit();
        }
    }



    ?>
</head>
<body>
<div class="container">
    <?php
    include 'block/menu.php';


    ?>
    <h1 class="text-center">Inscription</h1>
    <div class="formulaire inscription">
        <form method="post">

            <label for="nom">Nom</label>
            <input type="text" value="<?php
            if(!empty($_POST['nom'])){
                echo($_POST['nom']);
            }

            ?>" class="form-control <?php
            if(array_key_exists("nom",$errors)){
                echo('is-invalid');
            }elseif($_SERVER["REQUEST_METHOD"] == 'POST'){
                echo('is-valid');
            }
            ?>" name="nom">
            <div class="invalid-feedback">
                <?php
                if(array_key_exists("nom",$errors)){
                    echo($errors["nom"]);
                }
                ?>
            </div>
            <label for="prenom">Prenom</label>
            <input type="text" value="<?php
            if(!empty($_POST['prenom'])){
                echo($_POST['prenom']);
            }

            ?>" class="form-control <?php
            if(array_key_exists("prenom",$errors)){
                echo('is-invalid');
            }elseif($_SERVER["REQUEST_METHOD"] == 'POST'){
                echo('is-valid');
            }
            ?>" name="prenom">
            <div class="invalid-feedback">
                <?php
                if(array_key_exists("prenom",$errors)){
                    echo($errors["prenom"]);
                }
                ?>
            </div>
            <?php
            var_dump(headers_sent());
            var_dump(headers_sent());
            var_dump(headers_sent());
            var_dump(headers_sent());
            ?>
        </form>
    </div>
</div>
<?php

include 'block/cookie-consent.php';
include'block/javascript.php'
?>
</body>
</html>