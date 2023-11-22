<?php
$isAdmin = true;
$name = 'Delomenie';
$firstName = 'Valentin';
?>


<nav class="navbar navbar-expand-lg
<?php
if(array_key_exists("consent",$_COOKIE)){
    if(array_key_exists("theme",$_COOKIE)&& $_COOKIE["theme"]=="light"){
        echo('navbar-light');
    }elseif(array_key_exists("theme",$_COOKIE)&& $_COOKIE["theme"]=="dark"){
        echo('navbar-dark bg-dark');
    }else{
        echo('');
    }
}
?>">
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
                    <a class="nav-link" href="service.php">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addpicture.php">Télécharger une image</a>
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
                if(array_key_exists("consent",$_COOKIE)){
                    if(array_key_exists("theme",$_COOKIE)&& $_COOKIE["theme"]=="light"){
                       echo('<a href="?theme=dark" class="ms-2"><svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z"></path>
</svg></a> ');
                    }elseif(array_key_exists("theme",$_COOKIE)&& $_COOKIE["theme"]=="dark"){
                        echo('<a href="?theme=light" class="ms-2"><svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 7a5 5 0 1 0 0 10 5 5 0 1 0 0-10z"></path>
  <path d="M12 1v2"></path>
  <path d="M12 21v2"></path>
  <path d="m4.22 4.22 1.42 1.42"></path>
  <path d="m18.36 18.36 1.42 1.42"></path>
  <path d="M1 12h2"></path>
  <path d="M21 12h2"></path>
  <path d="m4.22 19.78 1.42-1.42"></path>
  <path d="m18.36 5.64 1.42-1.42"></path>
</svg></a>');
                    }else{
                        echo('<a href="?theme=dark"><svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z"></path>
</svg></a>
<a href="?theme=light"><svg width="46" height="46" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 7a5 5 0 1 0 0 10 5 5 0 1 0 0-10z"></path>
  <path d="M12 1v2"></path>
  <path d="M12 21v2"></path>
  <path d="m4.22 4.22 1.42 1.42"></path>
  <path d="m18.36 18.36 1.42 1.42"></path>
  <path d="M1 12h2"></path>
  <path d="M21 12h2"></path>
  <path d="m4.22 19.78 1.42-1.42"></path>
  <path d="m18.36 5.64 1.42-1.42"></path>
</svg></a>');
                    }
                };

                ?>
            </div>
        </div>
    </div>
</nav>