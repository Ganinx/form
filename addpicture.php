<?php
include 'block/redirect.php';
session_start();


$allowedExtension = ["image/jpeg","image/png"];
$errors = [];
var_dump($_FILES["photos"]);

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    if($_FILES["photos"]["error"]!= 0){
        $errors[]= "il y a une erreur";
    }
    if(in_array($_FILES['photos']['type'],$allowedExtension)){
        if($_FILES["photos"]["size"]> 2097152){
            $errors[]= "c'est trop gros";
        }
    }else{
        $errors[]= "le format est pas bon";
    }

    if(count($errors) == 0){
        move_uploaded_file($_FILES["photos"]["tmp_name"],"image/".uniqid().'-'.$_FILES["photos"]["name"]);
            header("Location: index.php");

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
    <h1 class="text-center">mes images</h1>

    <form method="post" enctype="multipart/form-data">
        <input type="file" class="form-control" name="photos">
        <input type="submit" class="btn btn-success w-25">

        <div class="text-danger">
            <ul>
                <?php
                foreach ($errors as $error){
                    if(count($errors) != 0){
                        echo('<li>'.$error.'</li>');
                    }

                }
                ?>
            </ul>
        </div>

    </form>


</div>
<?php
include 'block/javascript.php'
?>
</body>
</html>