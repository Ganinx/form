<?php
if(array_key_exists("cookie", $_GET) && $_GET['cookie'] == 'yes'){


    setcookie("consent","yes", time()+60*60*24);
    $urlRedirection = $_SERVER['REQUEST_URI'];
    $urlRedirection = explode("?", "$urlRedirection")[0];
    header('Location: '.$urlRedirection);
    exit();}

    if(array_key_exists("theme", $_GET)){
        setcookie("theme",$_GET["theme"], time()+60*60*24);
        $urlRedirection = $_SERVER['REQUEST_URI'];
        $urlRedirection = explode("?", "$urlRedirection")[0];
        header('Location: '.$urlRedirection);
        exit();
}