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
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["creaPswd"])){
            $errors["creaPswd"] = "veuillez saisir un identifiant";
        }
        if(strlen($_POST["creaPswd"])< 3){
            $errors['creaPswd'] = "pas assez de lettres";
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
    }
    ?>
</head>
<body>
<div class="container">
    <?php
    include 'block/menu.php'
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

        ?>" class="from-control <?php
        if(array_key_exists("prenom",$errors)){
            echo('is-invalid');
        }
        ?>" name="prenom">
        <div class="invalid-feedback">
            <?php
            if(array_key_exists("prenom",$errors)){
                echo($errors["prenom"]);
            }
            ?>
        </div>
        <label for="mail">Adresse mail</label>
        <input type="email" value="<?php
        if(!empty($_POST['mail'])){
            echo($_POST['mail']);
        }

        ?>" class="<?php
        if(array_key_exists("mail",$errors)){
            echo('is-invalid');
        }
        ?>" name="mail">
        <div class="invalid-feedback">
            <?php
            if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
            } else {
            echo ("L'adresse email ".$_POST["mail"]." est considérée comme invalide.");
            }
            ?>
        </div>
        <label for="creaPswd">Creer votre mot de passe</label>
        <input type="password" value="<?php
        if(!empty($_POST['creaPswd'])){
            echo($_POST['creaPswd']);
        }

        ?>" class="form-control <?php
        if(array_key_exists("creaPswd",$errors)){
            echo('is-invalid');
        }
        ?>" name="creaPswd">
        <div class="invalid-feedback">
            <?php
            if(array_key_exists("creaPswd",$errors)){
                echo($errors["creaPswd"]);
            }
            ?>

        </div>
        <label for="pswd">Confirmation</label>
        <input type="password" value="<?php
        if(!empty($_POST['pswd'])){
            echo($_POST['pswd']);
        }

        ?>" class="form-control <?php
        if(array_key_exists("pswd",$errors)){
            echo('is-invalid');
        }
        ?>" name="pswd">
        <div class="invalid-feedback">
            <?php
            if(array_key_exists("pswd",$errors)){
                echo($errors["pswd"]);
            }
            ?>
        </div>
        <input type="submit" name="verif">
    </form>
    </div>
</div>
</body>
</html>