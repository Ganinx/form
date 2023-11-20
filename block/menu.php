<?php
$isAdmin = true;
$name = 'Delomenie';
$firstName = 'Valentin';
?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="panier.php">panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <?php
                if(array_key_exists("identifiant",$_SESSION)){
                    echo('<a> bonjour '.$_SESSION["identifiant"]. '</a>');
                    echo('<a href="moncompte.php" class="ps-4 pe-2 nav-link"> Mon compte</a>');
                    echo('<img class="img-avatar me-4" src="image/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg">');
                    echo('<a href="deconnexion.php" class="nav-link">deconnexion</a>');
                }elseif(!array_key_exists("identifiant",$_SESSION)){
                    echo('<a class= "nav-link pe-3" href="connection.php">Connexion</a>');
                    echo('<a class= "nav-link " href="inscription.php">Inscription</a>');
                }


                ?>
            </div>
        </div>
    </div>
</nav>