<?php
session_start();
include'block/redirect.php';


if(!array_key_exists("identifiant",$_SESSION)){
    header("Location: connection.php");
    exit;
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vegeta</title>
    <?php
    include'block/stylesheet.php';
    ?>
<body class="
<?php
include'block/theme.php'
?>">
<?php
echo('<div class="container">');
include 'block/header.php';
include 'block/menu.php';
echo('</div>');
?>
<h1 class="text-center mt-4">Mon Compte</h1>
</body>

</html>