<?php
include 'block/redirect.php';
session_start();

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
<body class="
<?php
include'block/theme.php'
?>">
    <div class="container">
        <?php
        include 'block/header.php'

        ?>
        <?php
        include 'block/menu.php'
        ?>
        <h1 class="text-center">Accueil</h1>

        <?php
        $images = scandir("image/")
        for($i = 2; $i < count($images); $i++){
            echo('<img src="'.$images[$i].'"><img>');
        }
        ?>
    </div>
    <?php
    include 'block/javascript.php'
    ?>
</body>
</html>